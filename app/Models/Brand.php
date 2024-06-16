<?php

namespace App\Models;

use App\Http\Traits\HasSlugTrait;
use App\Http\Traits\HasUuidTrait;
use Fomvasss\MediaLibraryExtension\HasMedia\HasMedia;
use Fomvasss\MediaLibraryExtension\HasMedia\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Brand extends Model implements HasMedia
{
    use HasFactory,
        HasSlugTrait,
        HasUuidTrait,
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
}
