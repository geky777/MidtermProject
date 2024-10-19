<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use App\Http\Middleware\AgeVerification;
use App\Http\Middleware\LogRequest;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(Router $router)
    {
        
        $router->aliasMiddleware('age.verification', AgeVerification::class);
        $router->aliasMiddleware('log.request', LogRequest::class);
    }
    
}
