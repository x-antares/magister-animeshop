<?php

namespace App\Models;

use App\Http\Traits\HasUuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Media extends \Spatie\MediaLibrary\MediaCollections\Models\Media
{
    use HasFactory, HasUuidTrait;
}
