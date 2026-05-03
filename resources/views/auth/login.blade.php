<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - PPTQ Bustanul Wildan</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#E8F7F0] text-gray-800 font-figtree min-h-screen flex flex-col justify-between">

    <div class="flex-grow flex items-center justify-center p-4 md:p-8">
        <div class="bg-white rounded-[2rem] shadow-2xl overflow-hidden flex flex-col md:flex-row w-full max-w-5xl">
            
            <div class="md:w-1/2 relative bg-[#0B3B2C] p-10 flex flex-col justify-center text-white overflow-hidden">
                <div class="absolute inset-0 opacity-20">
                    <img src="{{ asset('images/hero-image.jpg') }}" alt="Background" class="w-full h-full object-cover">
                </div>
                
                <div class="relative z-10">
                    <div class="flex items-center gap-2 mb-8">
                        <svg class="w-6 h-6 text-amber-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L15 9H22L16.5 14L18.5 21L12 17L5.5 21L7.5 14L2 9H9L12 2Z"></path></svg>
                        <span class="font-bold text-lg tracking-wide">Bustanul Wildan</span>
                    </div>
                    
                    <div class="inline-block bg-amber-600/20 text-amber-400 text-xs font-bold px-3 py-1 rounded-full mb-6 uppercase tracking-widest border border-amber-500/30">
                        Gerbang Digital Sanctuary
                    </div>
                    
                    <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
                        Langkah Pertama<br>Menuju <span class="text-amber-400">Masa<br>Depan</span> Mulia.
                    </h1>
                    
                    <p class="text-emerald-100 text-sm leading-relaxed max-w-sm">
                        Masuk ke sistem admisi santri terpadu untuk melanjutkan perjalanan pendidikan spiritual dan intelektual Anda di lingkungan yang modern nan sakral.
                    </p>
                </div>
            </div>

            <div class="md:w-1/2 p-10 md:p-16 flex flex-col justify-center bg-white">
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-2">Selamat Datang Kembali</h2>
                    <p class="text-sm text-gray-500">Silakan masukkan akun admisi Anda untuk melanjutkan.</p>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    
                    <div class="mb-5">
                        <label for="email" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Email atau NISN</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            </div>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="w-full pl-10 pr-4 py-3 bg-gray-100 border-transparent rounded-xl focus:bg-white focus:border-[#0B3B2C] focus:ring-2 focus:ring-[#0B3B2C]/20 transition text-sm">
                        </div>
                        @error('email') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-5">
                        <div class="flex justify-between items-center mb-2">
                            <label for="password" class="block text-xs font-bold text-gray-700 uppercase tracking-wider">Kata Sandi</label>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-xs font-bold text-amber-600 hover:text-amber-700">Lupa Password?</a>
                            @endif
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                            </div>
                            <input id="password" type="password" name="password" required class="w-full pl-10 pr-4 py-3 bg-gray-100 border-transparent rounded-xl focus:bg-white focus:border-[#0B3B2C] focus:ring-2 focus:ring-[#0B3B2C]/20 transition text-sm">
                        </div>
                        @error('password') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-8">
                        <label for="remember_me" class="inline-flex items-center cursor-pointer">
                            <input id="remember_me" type="checkbox" name="remember" class="rounded border-gray-300 text-[#0B3B2C] shadow-sm focus:ring-[#0B3B2C]">
                            <span class="ml-2 text-sm text-gray-600">Biarkan saya tetap masuk</span>
                        </label>
                    </div>

                    <button type="submit" class="w-full bg-[#0B3B2C] hover:bg-[#082a20] text-white font-bold py-3 px-4 rounded-xl transition shadow-lg text-sm tracking-wider uppercase">
                        Masuk Ke Dashboard
                    </button>

                    <div class="mt-8 text-center border-t pt-6">
                        <p class="text-sm text-gray-600">
                            Belum memiliki akun? <a href="{{ route('register') }}" class="font-bold text-[#0B3B2C] border-b border-[#0B3B2C] hover:text-amber-600 hover:border-amber-600 transition pb-0.5">Daftar Akun Baru</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="w-full px-8 py-6 flex flex-col md:flex-row justify-between items-center text-sm border-t border-emerald-200/50 text-[#0B3B2C]">
        <div class="font-bold mb-2 md:mb-0">PPTQ Bustanul Wildan</div>
        <div class="text-emerald-700/70 text-xs">© 2026 Pondok Pesantren Digital Sanctuary. All rights reserved.</div>
        <div class="flex gap-4 mt-2 md:mt-0 text-xs text-emerald-700/70">
            <a href="#" class="hover:text-[#0B3B2C]">Kebijakan Privasi</a>
            <a href="#" class="hover:text-[#0B3B2C]">Syarat & Ketentuan</a>
        </div>
    </footer>
</body>
</html>