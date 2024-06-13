<?php

namespace App\Models;

use App\Http\Traits\HasSlugTrait;
use App\Http\Traits\HasUuidTrait;
use Fomvasss\MediaLibraryExtension\HasMedia\HasMedia;
use Fomvasss\MediaLibraryExtension\HasMedia\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    protected array $mediaSingleCollections = ['image'];

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
}
