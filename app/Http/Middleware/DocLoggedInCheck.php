<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class DocLoggedInCheck
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
        if(!Session::has('doctorId')){
            return redirect()->to('login');
        }
        if(Session::has('adminId')){
            return back();
        }
        //if(!Session::has('doctorId')){
        //     return redirect()->to('login');
        // }
        return $next($request);
    }
}
