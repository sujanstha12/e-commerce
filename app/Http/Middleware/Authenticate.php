<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if (!$request->expectsJson()) {
            if ($request->is('admin') || $request->is('admin/*')) {
                return route('login');
            } elseif ($request->is('customer') || $request->is('customer/*')) {
                return route('customer.loginPage'); // Redirect customers to customer login
            }
            return route('login'); // Default fallback login
        }
    }
}
