<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\support\facades\Schma;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringlength(191);
    }
}
