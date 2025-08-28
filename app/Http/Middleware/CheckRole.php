<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {

        if (!Auth::check()) {
            return redirect('login');
        }

        $user = Auth::user();

        //  looping role
        foreach ($roles as $role) {
            if ($user->role === $role) {
                return $next($request);
            }
        }

        // jika tidak ada akses
        abort(403, 'UNAUTHORIZED ACTION.');
    }
}