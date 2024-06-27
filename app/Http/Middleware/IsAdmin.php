<?php

namespace App\Http\Middleware;
use auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{

    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->isAdmin != 1) {
            return redirect('/');
        }
        return $next($request);
    }
}
