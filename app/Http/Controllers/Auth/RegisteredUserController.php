<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Langkah 1: Tambahkan 'no_wa' ke dalam daftar validasi
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'no_wa' => ['required', 'string', 'max:20'], // Memastikan no_wa wajib diisi dan maksimal 20 karakter
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Langkah 2: Tambahkan 'no_wa' ke proses pembuatan User ke database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'no_wa' => $request->no_wa, // Mengambil input WA dan menyimpannya
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}