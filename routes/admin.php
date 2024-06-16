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
    Route::resource('attributes', \App\Http\Admin\Controllers\AttributeController::class)->except(['show']);
    Route::any('orders/{order}/update-status', [\App\Http\Admin\Controllers\OrderController::class, 'updateStatus'])->name('orders.update-status');
    Route::get('orders/{order}/view', [\App\Http\Admin\Controllers\OrderController::class, 'show'])->name('orders.view');

    Route::get('suggest/category', [\App\Http\Admin\Controllers\CategoryController::class, 'suggestCategory'])->name('suggest.category');
    Route::get('suggest/value', [\App\Http\Admin\Controllers\AttributeController::class, 'suggestValue'])->name('suggest.value');
});
