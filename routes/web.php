<?php

use App\Http\Client\Web\Controllers\HomeController;
use App\Http\Client\Web\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Client\Web\Controllers\CatalogController;
use App\Http\Client\Web\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/cart', [CartController::class, 'view'])->name('client.cart');

Route::get('/ajax/cart', [CartController::class, 'getAllCartProducts'])->name('cart.index');

Route::post('/ajax/cart/update', [CartController::class, 'updateCart'])->name('cart.update');

Route::post('/ajax/cart/change', [CartController::class, 'changeCart'])->name('cart.change');

Route::get('/product/{product:slug}', [ProductsController::class, 'view'])->name('product');

Route::get('/catalog', [CatalogController::class, 'view']);

Route::get('/checkout', [CartController::class, 'viewCheckout'])->name('checkout');

Route::post('/checkout', [CartController::class, 'checkout']);

Route::get('/contact', function () {
    return view('client.pages.contact');
})->name('contact');

require __DIR__ . '/admin.php';
