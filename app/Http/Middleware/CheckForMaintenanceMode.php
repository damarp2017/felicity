<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode as Middleware;
use Closure;

class CheckForMaintenanceMode extends Middleware
{
    /**
     * The URIs that should be reachable while maintenance mode is enabled.
     *
     * @var array
     */
    protected $except = [
        //
    ];
    public function handle($request, Closure $next, $guard = null)
    {
        if (!$request->is('coming-soon')) {
            if(!session()->has('allow')){
                return redirect('coming-soon');
            }
        }
        return $next($request);

    }
}
