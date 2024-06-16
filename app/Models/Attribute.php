<?php

namespace App\Models;

use App\Http\Traits\HasSlugTrait;
use App\Http\Traits\HasUuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Attribute extends Model
{
    use HasFactory,
        HasSlugTrait,
        HasUuidTrait;

    protected $guarded = ['id'];

    /**
     * @return HasMany
     */
    public function values(): HasMany
    {
        return $this->hasMany(Value::class);
    }
}
