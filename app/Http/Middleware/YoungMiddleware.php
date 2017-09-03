<?php

namespace App\Http\Middleware;

use Closure;

class YoungMiddleware
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
        // 如果传入的参数 age 大于25，重定向到'/'
        if( $request->age > 25) {
            return redirect('/');
        }
        return $next($request);
    }
}
