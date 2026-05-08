<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah user sudah login DAN role-nya adalah 'admin'
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request); // Izinkan masuk ke halaman admin
        }

        // Jika bukan admin (misal wali santri), tendang kembali ke dashboard mereka
        return redirect()->route('dashboard')->with('error', 'Akses ditolak! Anda tidak memiliki izin untuk masuk ke halaman Admin.');
    }
}