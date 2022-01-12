<?php

namespace App\Http\Middleware\Kursant;

use Closure;
use Illuminate\Http\Request;

class Kursant
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
        if(auth()->user()->role_id == 3)
        {
            return $next($request);
        }
        return redirect(route('welcome'))->with('eror', 'Login parol xato');
    }
}
