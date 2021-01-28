<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoginMiddleware
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
        if($request->path()=="login" && $request->session()->has('userdata'))
        {
            return redirect("/");
        }
        if($request->path()=="signup" && $request->session()->has('userdata'))
        {
            return redirect("/");
        }
        if($request->path()=="admin" && $request->session()-> has('userdata') )
        {
            return redirect("/");
        }
        if($request->path()=="admin" && $request->session()-> has(null) )
        {
            return redirect("/");  
        }
        return $next($request);
    }
}
