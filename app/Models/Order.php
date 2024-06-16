<?php

namespace App\Models;

use App\Http\Traits\HasUuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory,
        HasUuidTrait;



    const STATUS_PENDING = 'pending';
    const STATUS_NOT_PAID = 'not_paid';
    const STATUS_PAID = 'paid';
    const STATUS_CANCELED = 'canceled';


    protected $guarded = ['id'];

    protected $casts = [
        'total' => 'float',
        'added' => 'array'
    ];

    protected $attributes = [
        'status' => self::STATUS_PENDING,
    ];

    /**
     * @return HasMany
     */
    public function purchaseProducts(): HasMany
    {
        return $this->hasMany(PurchaseProduct::class);
    }

    /**
     * @return string[]
     */
    public static function getStatuses(): array
    {
        return [
            self::STATUS_PENDING => 'В обробці',
            self::STATUS_NOT_PAID => 'Не оплачено',
            self::STATUS_PAID => 'Оплачено',
            self::STATUS_CANCELED => 'Скасовано',
        ];
    }
}
