<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // 1. Cek apakah email & password benar secara umum
        $request->authenticate();

        $request->session()->regenerate();

        // Ambil data user yang baru saja mencoba login
        $user = $request->user();

        // 2. LOGIKA PENJAGA PINTU (FILTER ROLE)
        
        // Jika mencoba login di halaman Wali Santri (/login) tapi ternyata dia ADMIN
        if ($request->is('login') && $user->role === 'admin') {
            Auth::guard('web')->logout(); // Tendang keluar secara otomatis
            return redirect()->route('login')->withErrors([
                'email' => 'Password salah ',
            ]);
        }

        // Jika mencoba login di halaman Admin (/admin/login) tapi ternyata dia WALI SANTRI
        if ($request->is('admin/login') && $user->role === 'wali_santri') {
            Auth::guard('web')->logout(); // Tendang keluar secara otomatis
            return redirect()->route('admin.login')->withErrors([
                'email' => 'Halaman ini hanya untuk Administrator.',
            ]);
        }

        // 3. JIKA LOLOS FILTER, arahkan ke dashboard masing-masing
        if ($user->role === 'admin') {
            return redirect('/admin/dashboard');
        }
if ($user->role === 'wali_santri') {
            return redirect('/dashboard');
        }
        return redirect()->intended('/dashboard');
    }
    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
