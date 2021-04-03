<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @param string|null $guard
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = null): mixed
    {
        if (!auth($guard)->check()) return $next($request);

        if (!$guard === 'user') return redirect()->route('store.admin.dashboard', auth()->guard($guard)->user());

        return redirect()->route('user.profile');
    }
}
