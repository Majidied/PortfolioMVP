<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthenticateDashboard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Hardcoded username and password
        $adminUsername = 'majidi';
        $adminPassword = 'Majidi2003@';

        // Check if the provided credentials match
        if ($username === $adminUsername && $password === $adminPassword) {
            return $next($request); // Authentication successful
        }

        // Authentication failed
        return redirect()->route('login')->with('error', 'Invalid credentials.');
    }
}
