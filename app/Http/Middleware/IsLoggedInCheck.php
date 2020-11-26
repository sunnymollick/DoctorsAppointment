<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class IsLoggedInCheck
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
        if(!Session::has('adminId')){
            return redirect()->to('login');
        }
        if(Session::has('doctorId')){
            return redirect()->back();
        }
        //if(!Session::has('doctorId')){
        //     return redirect()->to('login');
        // }
        return $next($request);
    }
}
