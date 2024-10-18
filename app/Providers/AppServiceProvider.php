<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use App\Http\Middleware\AgeVerification;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(Router $router)
    {
        // Register route-specific middleware alias
        $router->aliasMiddleware('age.verification', AgeVerification::class);
    }
}
