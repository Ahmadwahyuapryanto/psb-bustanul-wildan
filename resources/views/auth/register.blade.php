<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi - PPTQ Bustanul Wildan</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#E8F7F0] text-gray-800 font-figtree min-h-screen flex flex-col justify-between">

    <div class="flex-grow max-w-7xl mx-auto w-full p-4 md:p-8 flex items-center justify-center">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 w-full">
            
            <div class="lg:col-span-5 flex flex-col gap-4">
                <div class="bg-[#0B3B2C] rounded-[2rem] p-8 md:p-10 text-white relative overflow-hidden shadow-xl h-full flex flex-col justify-center">
                    <div class="absolute -bottom-24 -right-24 w-64 h-64 border-[10px] border-white/5 rounded-full"></div>
                    
                    <div class="inline-block bg-amber-600/20 text-amber-400 text-xs font-bold px-3 py-1 rounded-full mb-6 w-max uppercase tracking-widest">
                        Akses Prioritas
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 leading-tight">Mulai Perjalanan Spiritual & Akademik di Bustanul Wildan.</h2>
                    <p class="text-emerald-100/80 text-sm leading-relaxed">
                        Daftarkan akun wali santri untuk memantau proses admisi, hasil seleksi, dan administrasi pesantren secara digital dan terintegrasi.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-gray-50 rounded-2xl p-6 shadow-sm border border-gray-100">
                        <div class="w-10 h-10 bg-amber-100 text-amber-700 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-1 text-sm">Proses Cepat</h3>
                        <p class="text-xs text-gray-500">Pendaftaran 100% online tanpa perlu antre fisik.</p>
                    </div>
                    <div class="bg-gray-50 rounded-2xl p-6 shadow-sm border border-gray-100">
                        <div class="w-10 h-10 bg-emerald-100 text-emerald-700 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-1 text-sm">Notifikasi Real-time</h3>
                        <p class="text-xs text-gray-500">Update status kelulusan langsung ke WhatsApp Anda.</p>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7 bg-white rounded-[2rem] shadow-xl p-8 md:p-12">
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-2">Registrasi Wali Santri</h2>
                    <p class="text-sm text-gray-500">Silakan lengkapi formulir di bawah ini untuk membuat akun.</p>
                </div>

                <form method="POST" action="{{ route('register') }}" novalidate>
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                        <div>
                            <label for="name" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Nama Lengkap Wali</label>
                            <input id="name" type="text" name="name" value="{{ old('name') }}" placeholder="Contoh: Ahmad Sulaiman" required autofocus class="w-full px-4 py-3 bg-gray-100 border-transparent rounded-xl focus:bg-white focus:border-[#0B3B2C] focus:ring-2 focus:ring-[#0B3B2C]/20 transition text-sm">
                            @error('name') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label for="no_wa" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Nomor WhatsApp</label>
                            <div class="flex">
                                <span class="inline-flex items-center px-4 py-3 rounded-l-xl border-transparent bg-gray-200 text-gray-500 text-sm font-semibold">+62</span>
                                <input id="no_wa" type="number" name="no_wa" value="{{ old('no_wa') }}" placeholder="8123456789" required class="w-full px-4 py-3 bg-gray-100 border-transparent rounded-r-xl focus:bg-white focus:border-[#0B3B2C] focus:ring-2 focus:ring-[#0B3B2C]/20 transition text-sm">
                            </div>
                            @error('no_wa') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="mb-5">
                        <label for="email" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Alamat Email</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="nama@email.com" required class="w-full px-4 py-3 bg-gray-100 border-transparent rounded-xl focus:bg-white focus:border-[#0B3B2C] focus:ring-2 focus:ring-[#0B3B2C]/20 transition text-sm">
                        @error('email') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-6">
                        <!-- KOLOM KATA SANDI DENGAN FITUR SHOW/HIDE -->
                        <div>
                            <label for="password" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Kata Sandi</label>
                            <div class="relative">
                                <!-- Ditambahkan pr-12 (padding-right) agar teks tidak tertimpa ikon -->
                                <input id="password" type="password" name="password" placeholder="••••••••" required class="w-full px-4 py-3 pr-12 bg-gray-100 border-transparent rounded-xl focus:bg-white focus:border-[#0B3B2C] focus:ring-2 focus:ring-[#0B3B2C]/20 transition text-sm">
                                <!-- Tombol Ikon Mata -->
                                <button type="button" onclick="togglePassword('password', 'eye-icon-password')" class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-[#0B3B2C] focus:outline-none">
                                    <svg id="eye-icon-password" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                            </div>
                            @error('password') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <!-- KOLOM KONFIRMASI SANDI DENGAN FITUR SHOW/HIDE -->
                        <div>
                            <label for="password_confirmation" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Konfirmasi Sandi</label>
                            <div class="relative">
                                <input id="password_confirmation" type="password" name="password_confirmation" placeholder="••••••••" required class="w-full px-4 py-3 pr-12 bg-gray-100 border-transparent rounded-xl focus:bg-white focus:border-[#0B3B2C] focus:ring-2 focus:ring-[#0B3B2C]/20 transition text-sm">
                                <!-- Tombol Ikon Mata -->
                                <button type="button" onclick="togglePassword('password_confirmation', 'eye-icon-confirm')" class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-[#0B3B2C] focus:outline-none">
                                    <svg id="eye-icon-confirm" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="mb-8">
                        <label class="inline-flex items-start cursor-pointer">
                            <input type="checkbox" required class="rounded border-gray-300 text-[#0B3B2C] shadow-sm focus:ring-[#0B3B2C] mt-1">
                            <span class="ml-3 text-xs text-gray-600 leading-relaxed">
                                Saya menyetujui <a href="#" class="text-amber-600 font-semibold hover:underline">Syarat & Ketentuan</a> serta <a href="#" class="text-amber-600 font-semibold hover:underline">Kebijakan Privasi</a> yang berlaku di PPTQ Bustanul Wildan.
                            </span>
                        </label>
                    </div>

                    <button type="submit" class="w-full bg-[#0B3B2C] hover:bg-[#082a20] text-white font-bold py-4 px-4 rounded-xl transition shadow-lg text-sm tracking-wider uppercase">
                        Buat Akun Sekarang
                    </button>

                    <div class="mt-8 text-center">
                        <p class="text-sm text-gray-600">
                            Sudah memiliki akun? <a href="{{ route('login') }}" class="font-bold text-[#0B3B2C] hover:text-amber-600 transition">Masuk di sini</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="w-full px-8 py-6 flex flex-col md:flex-row justify-between items-center text-sm border-t border-emerald-200/50 text-[#0B3B2C] bg-[#E8F7F0]">
        <div class="font-bold mb-2 md:mb-0">PPTQ Bustanul Wildan</div>
        <div class="text-emerald-700/70 text-xs">© 2026 Pondok Pesantren Digital Sanctuary. All rights reserved.</div>
        <div class="flex gap-4 mt-2 md:mt-0 text-xs text-emerald-700/70">
            <a href="#" class="hover:text-[#0B3B2C]">Kebijakan Privasi</a>
            <a href="#" class="hover:text-[#0B3B2C]">Syarat & Ketentuan</a>
        </div>
    </footer>

    <!-- Script JavaScript untuk Fitur Tampilkan/Sembunyikan Sandi -->
    <script>
        function togglePassword(inputId, iconId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById(iconId);

            // Jika tipe saat ini adalah password, ubah jadi text (lihat sandi)
            if (input.type === 'password') {
                input.type = 'text';
                // Mengubah icon menjadi mata yang dicoret (eye-slash)
                icon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                `;
            } else {
                // Jika tipe saat ini text, kembalikan ke password (sembunyikan sandi)
                input.type = 'password';
                // Mengubah icon kembali menjadi mata terbuka
                icon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                `;
            }
        }
    </script>
</body>
</html>