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
        // Menambahkan array kedua untuk kustomisasi pesan error
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'no_wa' => ['required', 'string', 'max:20'], 
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ], [
            // Pesan khusus untuk kolom 'name'
            'name.required' => 'Mohon isi nama lengkap wali santri ya.',
            'name.max' => 'Nama lengkap maksimal 255 karakter.',
            
            // Pesan khusus untuk kolom 'email'
            'email.required' => 'Alamat email wajib diisi.',
            'email.email' => 'Format email kurang tepat (contoh: nama@email.com).',
            'email.unique' => 'Email ini sudah terdaftar. Yuk, coba gunakan email yang lain!',
            
            // Pesan khusus untuk kolom 'no_wa'
            'no_wa.required' => 'Nomor WhatsApp wajib diisi agar kami bisa mengirimkan notifikasi.',
            'no_wa.max' => 'Nomor WhatsApp terlalu panjang, maksimal 20 digit.',
            
            // Pesan khusus untuk kolom 'password'
            'password.required' => 'Kata sandi wajib diisi untuk keamanan akun.',
            'password.confirmed' => 'Konfirmasi kata sandi tidak cocok, coba ketik ulang ya.',
            'password.min' => 'Kata sandi setidaknya harus memiliki minimal 8 karakter.',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'no_wa' => $request->no_wa, 
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}