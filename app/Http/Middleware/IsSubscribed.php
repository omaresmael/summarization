<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsSubscribed
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
        $user = auth()->user();

        if(!$user)
        {
            return redirect('/register');
        }
        if (!$user->hasStripeId())
        {
            return redirect('/subscribe');
        }
        return $next($request);
    }
}
