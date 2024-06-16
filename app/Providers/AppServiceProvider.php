<?php

namespace App\Providers;

use App\Models\Author;
use App\Models\Category;
use App\Models\Page;
use App\Models\Picture;
use App\Models\Product;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        if($this->app->environment('ngrok')) {
            \URL::forceScheme('https');
            \URL::forceRootUrl(env('NGROK_URL', 'https://9677-31-128-77-179.ngrok-free.app'));
        }

        view()->share('categories', Category::with('media')
//            ->where('is_published', 1)
            ->get()
        );

        Schema::defaultStringLength(191);

//        Relation::morphMap([
//            'page' => Page::class,
//            'product' => Product::class,
//            'category' => Category::class,
//        ]);

    }
}
