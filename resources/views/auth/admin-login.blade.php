<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin - PPTQ Bustanul Wildan</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#E8F7F0] text-gray-800 font-figtree min-h-screen flex flex-col justify-between">

    <div class="flex-grow flex items-center justify-center p-4 md:p-8">
        <div class="bg-white rounded-[2rem] shadow-2xl overflow-hidden flex flex-col md:row w-full max-w-lg border border-emerald-100">
            
            <div class="bg-[#0B3B2C] p-10 text-center relative overflow-hidden">
                <div class="absolute -top-10 -right-10 w-32 h-32 bg-white/5 rounded-full"></div>
                <div class="absolute -bottom-10 -left-10 w-24 h-24 bg-amber-500/10 rounded-full"></div>
                
                <div class="relative z-10">
                    <div class="flex justify-center mb-4">
                        <div class="bg-amber-500 p-3 rounded-2xl shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                    </div>
                    <h1 class="text-2xl font-bold text-white tracking-tight">Gerbang Administrator</h1>
                    <p class="text-emerald-200 text-xs mt-2 uppercase tracking-[0.2em] font-semibold">PSB Bustanul Wildan</p>
                </div>
            </div>

            <div class="p-10 md:p-12 bg-white">
                <form method="POST" action="{{ url('admin/login') }}">
                    @csrf
                    
                    <div class="mb-6">
                        <label for="email" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Email Admin</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            </div>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="w-full pl-12 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:bg-white focus:border-[#0B3B2C] focus:ring-4 focus:ring-[#0B3B2C]/5 transition text-sm">
                        </div>
                        @error('email') <span class="text-red-500 text-xs mt-2 block font-medium">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Kata Sandi</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                            </div>
                            <input id="password" type="password" name="password" required class="w-full pl-12 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:bg-white focus:border-[#0B3B2C] focus:ring-4 focus:ring-[#0B3B2C]/5 transition text-sm">
                        </div>
                        @error('password') <span class="text-red-500 text-xs mt-2 block font-medium">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-8 flex justify-between items-center">
                        <label for="remember_me" class="inline-flex items-center cursor-pointer">
                            <input id="remember_me" type="checkbox" name="remember" class="rounded border-gray-300 text-[#0B3B2C] shadow-sm focus:ring-[#0B3B2C]">
                            <span class="ml-2 text-xs text-gray-600 font-medium">Tetap masuk</span>
                        </label>
                        <a href="#" class="text-xs font-bold text-amber-600 hover:text-amber-700">Lupa Password?</a>
                    </div>

                    <button type="submit" class="w-full bg-[#0B3B2C] hover:bg-[#082a20] text-white font-bold py-4 px-4 rounded-xl transition shadow-lg text-sm tracking-widest uppercase flex justify-center items-center gap-2 group">
                        Masuk ke Dashboard
                        <svg class="w-4 h-4 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                    </button>

                    <div class="mt-8 text-center border-t border-gray-100 pt-6">
                        <a href="{{ url('/') }}" class="text-xs font-bold text-gray-400 hover:text-[#0B3B2C] transition flex items-center justify-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                            Kembali ke Beranda
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="w-full px-8 py-6 text-center text-[10px] text-emerald-700/50 uppercase tracking-widest font-bold">
        &copy; 2026 Pondok Pesantren Tahfidz Qur'an Bustanul Wildan
    </footer>
</body>
</html>