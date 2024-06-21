<?php

namespace App\Models;

use App\Http\Traits\HasSlugTrait;
use App\Http\Traits\HasUuidTrait;
use Fomvasss\MediaLibraryExtension\HasMedia\HasMedia;
use Fomvasss\MediaLibraryExtension\HasMedia\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Builder;

class Category extends Model implements HasMedia
{
    use HasFactory,
        HasUuidTrait,
        HasSlugTrait,
        InteractsWithMedia;


    protected $guarded = ['id'];

    protected $casts = [
        'is_main' => 'boolean',
        'is_published' => 'boolean',
    ];

    protected $attributes = [
        'is_published' => 1
    ];

    protected array $mediaSingleCollections = ['image'];

    /**
     * @return BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id')->where('is_main', 1);
    }

    /**
     * @return HasMany
     */
    public function childs(): HasMany
    {
        return $this->hasMany(self::class, 'parent_id')->where('is_main', 0);
    }

    /**
     * @return HasMany
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
