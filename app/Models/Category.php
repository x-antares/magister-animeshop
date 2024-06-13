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

class Category extends Model implements HasMedia
{
    use HasFactory,
        HasUuidTrait,
        HasSlugTrait,
        InteractsWithMedia;


    protected $guarded = ['id'];

    protected array $mediaSingleCollections = ['image'];

    /**
     * @return BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    /**
     * @return HasMany
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
