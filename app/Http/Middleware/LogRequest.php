<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Log request details
        Log::info('Incoming request', [
            'url' => $request->fullUrl(),
            'method' => $request->method(),
            'input' => $request->all(),
            'ip_address' => $request->ip(), 
            'timestamp' => now()->toDateTimeString(),
        ]);

        return $next($request);
    }
}
