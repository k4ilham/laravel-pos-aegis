<?php

namespace App\Http\Middleware;

use Closure;

class KasirMiddleware
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
        if ($request->user() && $request->user()->role == 'kasir') {
            return $next($request);
        }
        return redirect()->route('reports.sales.daily');
    }
}
