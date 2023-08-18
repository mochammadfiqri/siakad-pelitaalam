<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OnlyGuest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // if(Auth::user()) {
        //     return redirect()->back();
        // }
        
        if (auth()->check()) {
            return redirect('/');
        }

        // if(Auth::user()->role_id == 1) {
        //     return redirect('/admin/dashboard');
        // } elseif (Auth::user()->role_id == 2) {
        //     return redirect('/student/dashboard');
        // } elseif (Auth::user()->role_id == 3) {
        //     return redirect('/teacher/dashboard');
        // }

        return $next($request);
    }
}
