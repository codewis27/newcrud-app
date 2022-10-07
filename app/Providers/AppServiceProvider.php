<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use app\Repository\BooksRepository;
use app\Repository\EloquentBooksRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BooksRepository::class, EloquentBooksRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
