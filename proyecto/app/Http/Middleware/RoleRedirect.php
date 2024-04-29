<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleRedirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user();

        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard'); // Ruta del dashboard de Admin
        } elseif ($user->role === 'cajera') {
            return redirect()->route('cajera.dashboard'); // Ruta del dashboard de Cajero
        } elseif ($user->role === 'vendedor') {
            return redirect()->route('vendedor.dashboard'); // Ruta del dashboard de Vendedor
        }
        return $next($request);
    }
}
