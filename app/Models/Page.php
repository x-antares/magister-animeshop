<?php

namespace App\Models;

use App\Http\Traits\HasUuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory,
        HasUuidTrait;
}
