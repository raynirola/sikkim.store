<?php

namespace App\Providers;

use App\Models\Preorder;
use App\Observers\PreorderObserver;
use Illuminate\Support\ServiceProvider;

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
        Preorder::observe(PreorderObserver::class);
    }
}
