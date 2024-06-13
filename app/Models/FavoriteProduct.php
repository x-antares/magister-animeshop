<?php

namespace App\Models;

use App\Http\Traits\HasSearchableProductTrait;
use App\Http\Traits\HasUuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FavoriteProduct extends Model
{
    use HasFactory,
        HasUuidTrait,
        HasSearchableProductTrait;

    protected $guarded = ['id'];

    protected $casts = [
        'added' => 'array'
    ];

    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get product from cart by id
     *
     * @param string $id
     * @return mixed
     */
    public function getProductById(string $id): mixed
    {
        $res = null;

        foreach ($this->added ?? [] as $key => $item) {
            if ($key === 'products') {
                foreach ($item as $product) {
                    if ($product['id'] === $id) {
                        $res = $product;
                        break;
                    }
                }
            }
        }

        return $res;
    }

    /**
     * Get all products from cart
     *
     * @return mixed
     */
    public function getAllProducts(): mixed
    {
        if (isset($this->added['products'])) {
            return $this->added['products'];
        }

        return [];
    }
}
