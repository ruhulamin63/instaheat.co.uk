<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SessionVerify
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
        if($request->session()->has('admin_status')){
            return $next($request);
        }
        else{
            $request->session()->flash('msg', 'Invalid request');

                return redirect('/login')->with([
                                                'error' => true,
                                                'message' => 'Please login first'
                                            ]);
        }
    }
}
