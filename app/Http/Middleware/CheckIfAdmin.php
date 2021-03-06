<?php

namespace App\Http\Middleware;

use Closure;

class CheckIfAdmin
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

        $user = $request->user();

        if (!isset($user)) {
            return redirect('admin/login');
        }

        if (!$user->isAdmin()) {
            return redirect()->route('products');
        }

        return $next($request);
    }
}
