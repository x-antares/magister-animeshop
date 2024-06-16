<?php

namespace App\Http\Client\Web\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function view(Request $request)
    {
        /** @var Cart $cart */
        $cart = Cart::find($request->cookie('uuid'));
        $cartProducts = $cart->getAllProducts();

        return view('client.cart', compact('cartProducts'));
    }

    public function getAllCartProducts(Request $request)
    {
        /** @var Cart $cart */
        $cart = Cart::find($request->cookie('uuid'));

        return response()->json([
            'products' => $cart->getAllProducts(),
        ]);
    }

    public function updateCart(Request $request)
    {
//        $test = [
////            [
////                'id' => '0eb673c4-40b7-49da-bafc-141c835d4460',
////                'is_deleted' => 1,
////                'qty' => 3,
////            ],
//            [
//                'id' => '0f152bc1-ac93-43c6-9d49-061ed4087f4f',
//                'is_deleted' => 0,
//                'qty' => 1,
//            ],
//            [
//                'id' => 'bb054c56-c722-4600-8981-ec7040d8fa05',
//                'is_deleted' => 0,
//                'qty' => 3,
//            ]
//        ];


        /** @var Cart $cart */
        $cart = Cart::firstOrCreate(['user_id' => $request->cookie('uuid')]);

        $data = $request->data;

        $cartProducts = $cart->getAllProducts();
        $newCartProducts = [];

        foreach ($data ?? [] as $item) {
            $id = $item['id'];

            $productData = $cart->getProductById($id);

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
        $cart->setAttribute('added->products', $cartProducts);
        $cart->save();

        return redirect()->route('products.index')->with('success', 'Product added to cart successfully!');
    }

    public function viewCheckout(Request $request)
    {
        /** @var Cart $cart */
        $cart = Cart::find($request->cookie('uuid'));

        if ($cart) {
            $cartProducts = $cart->getAllProducts();
            $shippingPrice = config('services.shipping_price');

            $data = [
                'shipping_price' => $shippingPrice,
                'cartProducts' => $cartProducts,
                'total' => $cart->total + $shippingPrice,
                'sub_total' => $cart->total,
            ];

            return view('client.checkout', $data ?? []);
        }

//        abort(404);
        return view('client.checkout', $data ?? []);

    }

    public function checkout(Request $request)
    {
        /** @var Cart $cart */
        $cart = Cart::find($request->cookie('uuid'));

        $order = Order::create();

        foreach ($cart->getAllProducts() as $product) {
            $order->purchaseProducts()->create($product);
        }
    }
}
