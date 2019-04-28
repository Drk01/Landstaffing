<?php

namespace App\Http\Middleware;

use Closure;

class hasFulfilledData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->user()->hasFulFilledData()){
            return $next($request);
        }
        abort(401, "Necesitas rellenar tus datos para poder realizar esta acción");
    }
}
