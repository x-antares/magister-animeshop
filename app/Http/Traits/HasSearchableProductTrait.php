<?php

namespace App\Http\Traits;

use Illuminate\Support\Str;

trait HasSearchableProductTrait
{
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
        return $this->added['products'] ?? [];
    }
}
