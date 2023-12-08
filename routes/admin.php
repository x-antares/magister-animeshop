<?php

use \Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::group([
    'middleware' => ['auth'],
    'prefix' => 'admin',
    'as' => 'admin.',
], function () {
    Route::get('/', [App\Http\Admin\Controllers\AdminController::class, 'admin']);
    Route::resource('authors', \App\Http\Admin\Controllers\AuthorController::class)->except(['show']);
    Route::resource('pictures', \App\Http\Admin\Controllers\PictureController::class)->except(['show']);
    Route::resource('pages', \App\Http\Admin\Controllers\PageController::class)->except(['show']);
});
