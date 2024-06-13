<?php

namespace App\Http\Client\Web\Controllers;

use App\Models\Cart;
use App\Models\FavoriteProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function updateFavorites(Request $request)
    {
        /** @var Cart $cart */
        $favorites = FavoriteProduct::firstOrCreate(['user_id' => $request->cookie('uuid')]);

        $data = $request->data;

        $cartProducts = $favorites->getAllProducts();
        $newCartProducts = [];

        foreach ($data ?? [] as $item) {
            $id = $item['id'];

            $productData = $favorites->getProductById($id);

            if ($productData) {
                foreach ($cartProducts as $key => $product) {
                    $productId = $product['id'];

                    // логіка видалення
                    if ($item['is_deleted'] && ($item['id'] === $productId)) {
                        // логіка видалення певної к-сті товарів
                        if ($product['qty'] > $item['qty']) {
                            $updQty = $productData['qty'] - $item['qty'];
                            $cartProducts[$key]['qty'] = $updQty;
                        }

                        // логіка видалення всього товару
                        if ($product['qty'] <= $item['qty']) {
                           unset($cartProducts[$key]);
                        }
                    }

                    // логіка додавання к-сті існуючого товару в корзині
                    if (!$item['is_deleted'] && $productData) {
                        $updQty = $productData['qty'] + $item['qty'];
                        $cartProducts[$key]['qty'] = $updQty;
                    }

                }
            }

            // логіка додавання товару
            if (!$item['is_deleted'] && !$productData) {
                $product = Product::find($item['id'])->only('id', 'name', 'price');
                $product['qty'] = $item['qty'];

                $newCartProducts[] = $product;
            }
        }

        $cartProducts = array_merge($cartProducts ?? [], $newCartProducts);
        $favorites->setAttribute('added->products', $cartProducts);
        $favorites->save();
    }
}
