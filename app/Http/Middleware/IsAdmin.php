<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
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
        //Cara 2
        if(!auth()->check() || !auth()->user()->is_admin) {{
            abort(403);
        }}

        return $next($request);

         //Cara 1
        // if(auth()->guest() || auth()->user()->username !== 'akhelisera') {{
        //     abort(403);
        // }}
        
    }
}
