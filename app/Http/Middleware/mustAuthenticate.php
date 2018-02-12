<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class mustAuthenticate
{

    public function handle($request, Closure $next)
    {
        if(Auth::guest())
        {
            return redirect()->route('login.display')->with('danger', 'You must login first !');
        }
        return $next($request);
    }
}
