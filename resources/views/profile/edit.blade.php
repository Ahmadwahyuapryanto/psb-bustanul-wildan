<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil Saya - PPTQ Bustanul Wildan</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<!-- Mengubah flex bawaan menjadi flex-col untuk HP dan md:flex-row untuk PC -->
<body class="bg-[#F8FAFC] text-gray-800 font-figtree flex flex-col md:flex-row h-screen overflow-hidden">

    <!-- HEADER MOBILE (Hanya Muncul di Layar HP) -->
    <div class="md:hidden bg-white border-b border-gray-200 flex justify-between items-center px-6 py-4 flex-shrink-0 z-20 shadow-sm relative">
        <div>
            <h1 class="text-lg font-bold text-[#0B3B2C]">Bustanul Wildan</h1>
            <p class="text-[9px] font-semibold text-gray-400 tracking-widest uppercase mt-0.5">Profil Saya</p>
        </div>
        <button id="mobile-menu-button" class="text-gray-600 hover:text-[#0B3B2C] focus:outline-none bg-gray-50 p-2 rounded-lg">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <!-- OVERLAY GELAP (Muncul di HP saat menu samping terbuka) -->
    <div id="sidebar-overlay" class="fixed inset-0 bg-gray-900 bg-opacity-50 z-30 hidden md:hidden transition-opacity"></div>

    <!-- SIDEBAR / MENU SAMPING -->
    <aside id="sidebar" class="fixed inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-300 ease-in-out w-64 bg-white border-r border-gray-200 flex flex-col justify-between flex-shrink-0 h-full z-40">
        <div>
            <!-- Menyembunyikan judul di HP karena sudah ada di Header Mobile -->
            <div class="hidden md:block px-8 py-8">
                <h1 class="text-xl font-bold text-[#0B3B2C]">Bustanul Wildan</h1>
                <p class="text-[10px] font-semibold text-gray-400 tracking-widest mt-1 uppercase">Tahun Akademik 2025/2026</p>
            </div>

            <!-- Tambahan tombol silang khusus di menu HP untuk menutup menu -->
            <div class="md:hidden flex justify-end px-6 py-4 border-b border-gray-100 mb-4">
                <button id="close-sidebar-button" class="text-gray-400 hover:text-red-500 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>

            <nav class="px-4 space-y-2">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-[#0B3B2C] rounded-xl text-sm font-semibold transition">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    Dashboard
                </a>
                <a href="{{ route('pendaftaran.step1') }}" class="flex items-center gap-3 px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-[#0B3B2C] rounded-xl text-sm font-semibold transition">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    Pendaftaran Saya
                </a>
                <!-- Link Profil (Aktif) -->
                <a href="#" class="flex items-center gap-3 px-4 py-3 bg-[#0B3B2C] text-white rounded-xl text-sm font-semibold transition shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    Profil Saya
                </a>
                <!-- Link Bantuan -->
                <a href="{{ route('wali.bantuan') }}" class="flex items-center gap-3 px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-[#0B3B2C] rounded-xl text-sm font-semibold transition">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    Bantuan
                </a>
            </nav>
        </div>

        <div class="px-6 pb-8">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-[#0B3B2C] text-white flex items-center justify-center font-bold text-lg flex-shrink-0">
                    {{ substr(Auth::user()->name ?? 'U', 0, 1) }}
                </div>
                <div class="flex-1 overflow-hidden">
                    <p class="text-sm font-bold text-gray-900 leading-none mb-1 truncate">{{ explode(' ', Auth::user()->name ?? 'User')[0] }}</p>
                    <p class="text-[10px] text-gray-500">Akun Wali</p>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-gray-400 hover:text-red-500 transition p-1" title="Keluar">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                    </button>
                </form>
            </div>
        </div>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-1 overflow-y-auto w-full relative z-10">
        <div class="p-8 md:p-12 max-w-4xl mx-auto h-full flex flex-col relative">
            
            @if(session('status') === 'profile-updated')
                <div class="mb-6 bg-emerald-100 border border-emerald-200 text-emerald-800 px-6 py-4 rounded-xl shadow-sm text-sm font-bold flex items-center gap-3">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    Profil berhasil diperbarui.
                </div>
            @endif

            <div class="mb-10">
                <p class="text-xs font-bold text-amber-600 tracking-widest uppercase mb-2">Pengaturan Akun</p>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Profil Saya</h2>
                <p class="text-gray-500 text-sm max-w-xl leading-relaxed">
                    Perbarui informasi akun dan alamat email Anda. Pastikan nomor WhatsApp selalu aktif untuk menerima notifikasi.
                </p>
            </div>

            <div class="space-y-8 flex-1">
                <!-- Update Profile Form -->
                <div class="bg-white rounded-3xl p-6 md:p-8 border border-gray-100 shadow-sm">
                    <h3 class="text-xl font-bold text-[#0B3B2C] mb-6">Informasi Dasar</h3>
                    
                    <form method="post" action="{{ route('profile.update') }}" class="space-y-6">
                        @csrf
                        @method('patch')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-2">Nama Lengkap</label>
                                <input type="text" name="name" value="{{ old('name', Auth::user()->name) }}" required class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:bg-white focus:border-[#0B3B2C] focus:ring-2 focus:ring-[#0B3B2C]/20 transition text-sm">
                            </div>
                            
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-2">Nomor WhatsApp</label>
                                <input type="text" name="no_wa" value="{{ old('no_wa', Auth::user()->no_wa) }}" required class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:bg-white focus:border-[#0B3B2C] focus:ring-2 focus:ring-[#0B3B2C]/20 transition text-sm">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-2">Alamat Email</label>
                            <input type="email" name="email" value="{{ old('email', Auth::user()->email) }}" required class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:bg-white focus:border-[#0B3B2C] focus:ring-2 focus:ring-[#0B3B2C]/20 transition text-sm">
                        </div>

                        <div class="pt-4 border-t border-gray-100">
                            <button type="submit" class="w-full md:w-auto bg-[#0B3B2C] hover:bg-[#082a20] text-white px-6 py-3 rounded-xl text-sm font-bold transition shadow-md">
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Update Password Form -->
                <div class="bg-white rounded-3xl p-6 md:p-8 border border-gray-100 shadow-sm">
                    <h3 class="text-xl font-bold text-[#0B3B2C] mb-6">Ubah Kata Sandi</h3>
                    
                    <form method="post" action="{{ route('password.update') }}" class="space-y-6">
                        @csrf
                        @method('put')

                        <div>
                            <label class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-2">Kata Sandi Saat Ini</label>
                            <input type="password" name="current_password" required class="w-full md:w-1/2 px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:bg-white focus:border-[#0B3B2C] focus:ring-2 focus:ring-[#0B3B2C]/20 transition text-sm">
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-2">Kata Sandi Baru</label>
                                <input type="password" name="password" required class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:bg-white focus:border-[#0B3B2C] focus:ring-2 focus:ring-[#0B3B2C]/20 transition text-sm">
                            </div>
                            
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-2">Konfirmasi Sandi Baru</label>
                                <input type="password" name="password_confirmation" required class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:bg-white focus:border-[#0B3B2C] focus:ring-2 focus:ring-[#0B3B2C]/20 transition text-sm">
                            </div>
                        </div>

                        <div class="pt-4 border-t border-gray-100">
                            <button type="submit" class="w-full md:w-auto bg-[#8C6B14] hover:bg-amber-700 text-white px-6 py-3 rounded-xl text-sm font-bold transition shadow-md">
                                Perbarui Kata Sandi
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <footer class="mt-8 pt-6 border-t border-gray-200 flex flex-col md:flex-row justify-between items-center text-xs text-gray-500 text-center md:text-left gap-4 md:gap-0">
                <p>© 2026 PPTQ Bustanul Wildan. Dibuat untuk Kesempurnaan.</p>
                <div class="flex flex-wrap justify-center gap-4 mt-2 md:mt-0">
                    <a href="#" class="hover:text-gray-900 transition">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-gray-900 transition">Syarat Layanan</a>
                </div>
            </footer>
        </div>
    </main>

    <!-- SCRIPT KONTROL SIDEBAR MOBILE -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const openBtn = document.getElementById('mobile-menu-button');
            const closeBtn = document.getElementById('close-sidebar-button');
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');

            // Fungsi untuk membuka / menutup sidebar
            function toggleSidebar() {
                sidebar.classList.toggle('-translate-x-full');
                overlay.classList.toggle('hidden');
            }

            // Memasang event listener ke tombol dan overlay
            if(openBtn) openBtn.addEventListener('click', toggleSidebar);
            if(closeBtn) closeBtn.addEventListener('click', toggleSidebar);
            if(overlay) overlay.addEventListener('click', toggleSidebar);
        });
    </script>
</body>
</html>