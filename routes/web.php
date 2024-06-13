<?php

use App\Http\Client\Web\Controllers\HomeController;
use App\Http\Client\Web\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Client\Web\Controllers\CatalogController;

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
Route::get('/cart/test', [CatalogController::class, 'updateCart'])->name('test.cart');


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/cart', function () {
    return view('client.cart');
})->name('client.cart');

Route::post('/cart/add', [CatalogController::class, 'add'])->name('client.cart.add');

Route::get('/product/{product:slug}', [ProductsController::class, 'view'])->name('product');

Route::get('/catalog', function () {
    return view('client.catalog');
})->name('catalog');

Route::get('/checkout', function () {
    return view('client.checkout');
})->name('checkout');

Route::get('/contact', function () {
    return view('client.pages.contact');
})->name('contact');

require __DIR__ . '/admin.php';
