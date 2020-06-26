<?php

namespace App\Http\Middleware;

use Closure;

class DemoMiddleware
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
        $token=$request->token;

        if($token=="xyz"){
            return $next($request);
        }
        else{
            return  response("User Blocked");
        }
    }
}
