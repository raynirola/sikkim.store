<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public const HOME = '/';
    public const PROFILE = '/user/{user}/profile';
    public const SHOP = '/{store}';

    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->domain(config('services.domain.base'))
                ->group(base_path('routes/web.php'));

            Route::middleware('web')
                ->domain('www.'.config('services.domain.base'))
                ->group(function (){
                    Route::get('/', fn()=> redirect()->home());
                    Route::get('{all}', fn()=> redirect()->home());
                });

            Route::middleware('web')
                ->domain('seller.' . config('services.domain.base'))
                ->name('seller.')
                ->group(base_path('routes/seller_auth.php'));

            Route::middleware('web')
                ->group(base_path('routes/auth.php'));

            Route::middleware(['web', 'auth:user', 'verified'])
                ->domain(config('services.domain.base'))
                ->prefix('user')
                ->name('user.')
                ->group(base_path('routes/user.php'));

            Route::middleware(['web', 'cart.make'])
                ->domain('{store}.' . config('services.domain.base'))
                ->name('store.')
                ->group(base_path('routes/store.php'));

            Route::middleware(['web', 'auth:store', 'store.owner'])
                ->domain('{store}.' . config('services.domain.base'))
                ->prefix('admin')
                ->name('store.admin.')
                ->group(base_path('routes/store_admin.php'));
        });
    }

    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60);
        });
    }
}
