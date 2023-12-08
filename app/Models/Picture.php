<?php

namespace App\Models;

use App\Http\Traits\HasUuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Fomvasss\MediaLibraryExtension\HasMedia\HasMedia;
use Fomvasss\MediaLibraryExtension\HasMedia\InteractsWithMedia;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model implements HasMedia
{
    use HasFactory,
        HasUuidTrait,
        InteractsWithMedia;

    protected $guarded = ['id'];

    protected $mediaSingleCollections = ['image'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
