<?php

namespace App\Models;

use App\Http\Traits\HasSearchableProductTrait;
use App\Http\Traits\HasUuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    use HasFactory,
        HasSearchableProductTrait;

    protected $fillable = ['id'];

    protected $casts = [
        'total' => 'float',
        'added' => 'array'
    ];

    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
