<?php

namespace App\Models;

use App\Http\Traits\HasUuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory,
        HasUuidTrait;

    protected $guarded = ['id'];

    protected $casts = [
        'total' => 'float',
        'added' => 'array'
    ];
}
