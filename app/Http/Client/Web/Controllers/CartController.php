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

        if ($cart && !empty($cartProducts = $cart->getAllProducts())) {
             $cartProducts = $cart->getAllProducts();
             $subTotal = $cart->total;
             $shippingPrice = config('services.shipping_price');
             $total = $subTotal + $shippingPrice;

             return view('client.cart', compact('cartProducts', 'subTotal', 'shippingPrice', 'total'));
         }

        return redirect()->route('home');
    }

    public function getAllCartProducts(Request $request)
    {
        /** @var Cart $cart */
        $cart = Cart::find($request->session()->get('cartId'));

        return response()->json([
            'products' => $cart->getAllProducts(),
            'finalTotal' => $cart->total + config('services.shipping_price'),
            'originalTotal' => $cart->total,
        ]);
    }

    public function updateCart(Request $request)
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

        if ($cart && !empty($cartProducts = $cart->getAllProducts())) {
            $shippingPrice = config('services.shipping_price');

            $data = [
                'shipping_price' => $shippingPrice,
                'cartProducts' => $cartProducts,
                'total' => $cart->total + $shippingPrice,
                'sub_total' => $cart->total,
            ];

            return view('client.checkout', compact('data'));
        }

        return redirect()->route('home');
    }

    public function checkout(Request $request)
    {
        /** @var Cart $cart */
        $cart = Cart::find($request->session()->get('cartId'));

        if ($cart) {
            $added = $request->added;
            $added['products'] = $cart->getAllProducts();
            $order = Order::create($request->only('name', 'email', 'phone', 'address') + ['total' => $cart->total, 'added' => $added]);

            foreach ($cart->getAllProducts() as $product) {
                $order->purchaseProducts()->create($product);
            }

            session()->forget('cartId');
            session()->flush();
        }

        return redirect()->route('home');
    }
}
