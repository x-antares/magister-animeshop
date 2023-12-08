<?php

namespace App\Providers;

use App\Models\Author;
use App\Models\Page;
use App\Models\Picture;
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
        Schema::defaultStringLength(191);

        Relation::morphMap([
            'author' => Author::class,
            'picture' => Picture::class,
            'page' => Page::class,
        ]);

    }
}
