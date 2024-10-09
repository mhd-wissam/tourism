<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $adminEmail = env('ADMIN_EMAIL');
        $adminPassword = env('ADMIN_PASSWORD');

        // Check if the request has the correct admin credentials
        if ($request->input('email') === $adminEmail && $request->input('password') === $adminPassword) {
            return $next($request);
        }

        return response()->json(['message' => 'Unauthorized'], 401);
    }
}
