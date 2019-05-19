<?php

namespace App\Http\Middleware;

use Closure;

class Empleado
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
        if(auth()->user()->roles()->first()->id == 3){
            return $next($request);
        }
        abort(401,'No autorizado');
    }
}
