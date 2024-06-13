<?php

namespace App\Models;

use App\Http\Traits\HasUuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PurchaseProduct extends Model
{
    use HasFactory,
        HasUuidTrait;

    protected $guarded = ['id'];

    protected $casts = [
        'price' => 'float',
        'qty' => 'integer'
    ];

    /**
     * @return BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * @return BelongsTo
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
