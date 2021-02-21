<?php

namespace App\Http\Middleware;

use Closure;
use Cookie;

class CheckToken
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
        $value = Cookie::get('tokens_mizan');
        if(!$value){
            return redirect()->route('landing');
        }
        return $next($request);
    }
}
