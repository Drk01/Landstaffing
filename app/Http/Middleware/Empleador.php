<?php

namespace App\Http\Middleware;

use Closure;

class Empleador
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
        if(auth()->user()->roles()->first()->id == 2){
            return $next($request);
        }
        abort(401,'No autorizado');
    }
}
