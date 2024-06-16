<?php

namespace App\Models;

use App\Http\Traits\HasSlugTrait;
use App\Http\Traits\HasUuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Value extends Model
{
    use HasFactory,
        HasSlugTrait,
        HasUuidTrait;

    protected $guarded = ['id'];

    /**
     * @return BelongsTo
     */
    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}
