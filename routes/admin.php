<?php

use \Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::group([
    'middleware' => ['auth'],
    'prefix' => 'admin',
    'as' => 'admin.',
], function () {
    Route::get('/', [App\Http\Admin\Controllers\AdminController::class, 'admin']);
    Route::resource('authors', \App\Http\Admin\Controllers\CategoryController::class)->except(['show']);
    Route::resource('categories', \App\Http\Admin\Controllers\CategoryController::class)->except(['show']);
    Route::resource('brands', \App\Http\Admin\Controllers\BrandController::class)->except(['show']);
    Route::resource('pictures', \App\Http\Admin\Controllers\PictureController::class)->except(['show']);
    Route::resource('products', \App\Http\Admin\Controllers\ProductController::class)->except(['show']);
    Route::resource('pages', \App\Http\Admin\Controllers\PageController::class)->except(['show']);
    Route::resource('orders', \App\Http\Admin\Controllers\OrderController::class)->except(['show']);
});
