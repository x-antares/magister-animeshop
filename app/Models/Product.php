<?php

namespace App\Models;

use App\Http\Traits\HasSlugTrait;
use App\Http\Traits\HasUuidTrait;
use Fomvasss\MediaLibraryExtension\HasMedia\HasMedia;
use Fomvasss\MediaLibraryExtension\HasMedia\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Builder;

class Product extends Model implements HasMedia
{
    use HasFactory,
        HasUuidTrait,
        HasSlugTrait,
        InteractsWithMedia;


    protected $guarded = ['id'];

    protected $casts = [
        'price' => 'float',
        'qty' => 'integer',
        'in_stock' => 'boolean',
    ];

    protected array $mediaMultipleCollections = ['images'];

    /**
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return BelongsTo
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function url()
    {
        return route('product', $this->slug);
    }

    public function getFormattedPrice(): string
    {
        return '$' . \number_format($this->price, 2, '.', ',');
    }

    /**
     * @param Builder $builder
     * @param array $attrs
     * @param array $default
     */
    public function scopeFilterable(Builder $builder, array $attrs = [], array $default = [])
    {
        $attrs = ($attrs ?: request()->all()) + $default;

        $builder->when($value = Arr::get($attrs, 'search'), fn ($b) =>
            $b->where('name', 'like', '%' . $value . '%')
                ->orWhereHas('brand', function ($q) use ($value) {
                    $q->where('name', 'like', '%' . $value . '%');
                })
                ->orWhereHas('category', function ($q) use ($value) {
                    $q->where('name', 'like', '%' . $value . '%');
                })
        );

        if ($filters = Arr::get($attrs, 'filters')) {
            $categories = array_column(array_filter( $filters, function ($arr) {
                return $arr['attribute'] === 'category';
            }), 'value');

            $brands = array_column(array_filter( $filters, function ($arr) {
                return $arr['attribute'] === 'brand';
            }), 'value');

            $builder->when($value = !empty($brands) ? $brands : false, fn ($b) =>
                $b->whereHas('brand', function ($q) use ($value) {
                    $q->whereIn('slug', $value);
                })
            );

            $builder->when($value = !empty($categories) ? $categories : false, fn ($b) =>
                $b->whereHas('category', function ($q) use ($value) {
                    $q->whereIn('slug', $value);
                })
            );
        }

        if (($min_price = Arr::get($attrs, 'filter.min_price')) && ($max_price = Arr::get($attrs, 'filter.max_price'))) {
            $builder->whereBetween('price', [$min_price, $max_price]);
        }

        // Sort
        if ($sort = Arr::get($attrs, 'sort')) {
            $order = Arr::get($attrs, 'order');
            $order = in_array($order, ['asc', 'desc']) ? $order : 'asc';
            if (in_array($sort, ['name', 'created_at'])) {
                $builder->orderBy($sort, $order);
            } else {
                $builder->latest('created_at');
            }
        } else {
            $builder->latest('created_at');
        }

        $val = Arr::get($attrs, 'per_page') ?: Arr::get($default, 'per_page');
        $builder->when($val, fn($b) => $b->limit($val));
    }
}
