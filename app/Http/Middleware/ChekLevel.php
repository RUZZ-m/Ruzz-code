<?php

namespace App\Http\Middleware;

use Closure;
use illuminate\Http\Request;
use symfony\component\HttpFoundation\Response;
use illuminate\Support\Facedes\Auth;

class ChekLevel
{
    public function handle(Requset $request, Closure $next, $level)
    {
        if(Auth::check() && Auth::user()->level === $level){
            return $next($Request);
        }

        return redirect('/')->with('error', 'kamu tidak punya akses');

        if(Auth::check() && Auth::user()->level === $level){
            return $next($Request);
        }
        return redirect('/')->with('error', 'kamu tidak punya akses');
    }
}