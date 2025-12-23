<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if user is logged in
        if (!Auth::check()) {
            // Not logged in → redirect to login page
            return redirect()->route('admin.login');
        }

        $user = Auth::user();

        // Check if user is admin
        if ($user->role !== 'admin') {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
