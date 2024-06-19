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
        $cart = Cart::find($request->session()->get('cartId'));
        $cartProducts = $cart->getAllProducts();
        $subTotal = $cart->total;
        $shippingPrice = config('services.shipping_price');
        $total = $subTotal + $shippingPrice;

        return view('client.cart', compact('cartProducts', 'subTotal', 'shippingPrice', 'total'));
    }

    public function getAllCartProducts(Request $request)
    {
        /** @var Cart $cart */
        $cart = Cart::find($request->session()->get('cartId'));

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
////                'quantity' => 3,
////            ],
//            [
//                'id' => '0f152bc1-ac93-43c6-9d49-061ed4087f4f',
//                'is_deleted' => 0,
//                'quantity' => 1,
//            ],
//            [
//                'id' => 'bb054c56-c722-4600-8981-ec7040d8fa05',
//                'is_deleted' => 0,
//                'quantity' => 3,
//            ]
//        ];

        /** @var Cart $cart */
        $cart = Cart::find($request->session()->get('cartId'));

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
                        if ($product['quantity'] > $item['quantity']) {
                            $updQty = $productData['quantity'] - $item['quantity'];
                            $cartProducts[$key]['quantity'] = $updQty;
                            $cartProducts[$key]['total'] = $updQty * $product['price'];
                        }

                        // логіка видалення всього товару
                        if ($product['quantity'] <= $item['quantity']) {
                           unset($cartProducts[$key]);
                        }

                        // логіка додавання к-сті існуючого товару в корзині
                        if (!$item['is_deleted'] && $productData) {
                            $updQty = $productData['quantity'] + $item['quantity'];
                            $cartProducts[$key]['quantity'] = $updQty;
                            $cartProducts[$key]['total'] = $updQty * $product['price'];
                        }
                    }


                }
            }

            // логіка додавання товару
            if (!$item['is_deleted'] && !$productData) {
                $productItem = Product::with('media')->find($item['id']);
                $product = $productItem->only('id', 'quantity', 'name', 'price');
                $product['quantity'] = $item['quantity'];
                $product['total'] = $item['quantity'] * $product['price'];
                $product['img'] = $productItem->getMyFirstMediaUrl('images');

                $newCartProducts[] = $product;
            }
        }

        $cartProducts = array_merge($cartProducts ?? [], $newCartProducts);
        $cart->setAttribute('added->products', $cartProducts);
        $cart->setAttribute('total', $cart->getCalcCartTotal());
        $cart->save();

        return response()->json(['message' => 'Продукт успішно доданий!']);

    }

    public function changeCart(Request $request)
    {
        /** @var Cart $cart */
        $cart = Cart::find($request->session()->get('cartId'));
        $data = $request->data;

        $cartProducts = $cart->getAllProducts();
        $newCartProducts = [];

        foreach ($data ?? [] as $item) {
            $id = $item['id'];

            $productData = $cart->getProductById($id);

            if ($productData) {
                foreach ($cartProducts as $key => $product) {
                    $productId = $product['id'];

                    // логіка зміни к-сті товару
                    if ($item['id'] === $productId) {
                            $cartProducts[$key]['quantity'] = $item['quantity'];
                            $cartProducts[$key]['total'] = $item['quantity'] * $product['price'];
                    }
                }
            }
        }

        $cartProducts = array_merge($cartProducts ?? [], $newCartProducts);
        $cart->setAttribute('added->products', $cartProducts);
        $cart->setAttribute('total', $cart->getCalcCartTotal());
        $cart->save();

        return response()->json(['message' => 'Продукт успішно доданий!']);
    }


    public function viewCheckout(Request $request)
    {
        /** @var Cart $cart */
        $cart = Cart::find($request->session()->get('cartId'));

        $data = $request->data;


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

        return view('client.checkout', $data ?? []);
    }

    public function checkout(Request $request)
    {
        /** @var Cart $cart */
        $cart = Cart::find($request->session()->get('cartId'));

        $order = Order::create($request->only('name', 'email', 'phone', 'address', 'added'));

        foreach ($cart->getAllProducts() as $product) {
            $order->purchaseProducts()->create($product);
        }
    }
}
