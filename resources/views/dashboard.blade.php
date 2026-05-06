<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - PPTQ Bustanul Wildan</title>
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
            <p class="text-[9px] font-semibold text-gray-400 tracking-widest uppercase mt-0.5">Dashboard Wali</p>
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
                <a href="#" class="flex items-center gap-3 px-4 py-3 bg-[#0B3B2C] text-white rounded-xl text-sm font-semibold transition shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    Dashboard
                </a>
                <a href="{{ route('pendaftaran.step1') }}" class="flex items-center gap-3 px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-[#0B3B2C] rounded-xl text-sm font-semibold transition">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    Pendaftaran Saya
                </a>
                <a href="{{ route('profile.edit') }}" class="flex items-center gap-3 px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-[#0B3B2C] rounded-xl text-sm font-semibold transition">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    Profil Saya
                </a>
                <a href="{{ route('wali.bantuan') }}" class="flex items-center gap-3 px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-[#0B3B2C] rounded-xl text-sm font-semibold transition">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    Bantuan
                </a>
            </nav>
        </div>

        <div class="px-6 pb-8">
            <div class="bg-gray-50 border border-gray-200 rounded-2xl p-4 mb-6">
                <div class="flex justify-between items-center mb-2">
                    <p class="text-xs font-bold text-gray-700">{{ $statusInfo['progress'] == 100 ? 'Profil Lengkap' : 'Profil Belum Lengkap' }}</p>
                    <p class="text-[10px] font-bold text-gray-500">{{ round($statusInfo['progress']) }}%</p>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-1.5 mb-4">
                    <div class="bg-[#0B3B2C] h-1.5 rounded-full transition-all duration-1000" style="width: {{ $statusInfo['progress'] }}%"></div>
                </div>
                @if($statusInfo['progress'] < 100)
                    <a href="{{ route('pendaftaran.step1') }}" class="block text-center w-full bg-[#0B3B2C] hover:bg-[#082a20] text-white text-xs font-bold py-2 rounded-lg transition">
                        Lengkapi Profil
                    </a>
                @endif
            </div>

            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-[#0B3B2C] text-white flex items-center justify-center font-bold text-lg flex-shrink-0">
                    {{ substr(Auth::user()->name, 0, 1) }}
                </div>
                <div class="flex-1 overflow-hidden">
                    <p class="text-sm font-bold text-gray-900 leading-none mb-1 truncate">{{ explode(' ', Auth::user()->name)[0] }}</p>
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

    <!-- KONTEN UTAMA -->
    <main class="flex-1 overflow-y-auto w-full relative z-10">
        <div class="p-6 md:p-12 max-w-5xl mx-auto h-full flex flex-col relative">
            
            @if(session('success'))
                <div class="mb-6 bg-emerald-100 border border-emerald-200 text-emerald-800 px-6 py-4 rounded-xl shadow-sm text-sm font-bold flex items-center gap-3">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    {{ session('success') }}
                </div>
            @endif

            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 gap-6">
                <div>
                    <p class="text-xs font-bold text-amber-600 tracking-widest uppercase mb-2">Penerimaan Santri Baru 2026</p>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Selamat Datang, {{ explode(' ', Auth::user()->name)[0] }}.</h2>
                    <p class="text-gray-500 text-sm max-w-md leading-relaxed">
                        Perjalanan Anda menuju pendidikan yang seimbang dan pertumbuhan spiritual dimulai di sini. Pantau status pendaftaran Anda di bawah ini.
                    </p>
                </div>
                <div class="text-left md:text-right w-full md:w-auto bg-white md:bg-transparent p-4 md:p-0 rounded-xl md:rounded-none border md:border-none border-gray-100 shadow-sm md:shadow-none">
                    <p class="text-xs text-gray-500 mb-1">Referensi Pendaftaran</p>
                    <p class="text-lg font-bold text-[#0B3B2C] md:bg-gray-100 px-0 md:px-4 py-1.5 md:rounded-lg md:border border-gray-200">
                        {{ $santri ? 'BW-26-' . str_pad($santri->id, 5, '0', STR_PAD_LEFT) : 'BELUM TERSEDIA' }}
                    </p>
                </div>
            </div>

            <!-- Bagian ini khusus digeser horizontal (scroll) di HP agar grafis alur tidak menyusut dan rusak -->
            <div class="bg-white rounded-3xl p-6 md:p-8 border border-gray-100 shadow-sm mb-6 overflow-hidden">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 gap-4">
                    <h3 class="font-bold text-lg text-gray-900">Alur Pendaftaran</h3>
                    <span class="bg-{{ $statusInfo['color'] ?? 'gray' }}-50 text-{{ $statusInfo['color'] ?? 'gray' }}-700 text-[10px] font-bold px-3 py-1 rounded-full border border-{{ $statusInfo['color'] ?? 'gray' }}-200 uppercase tracking-wider shadow-sm">
                        Tahap Aktif: {{ $statusInfo['label'] }}
                    </span>
                </div>

                <div class="overflow-x-auto pb-4 -mx-6 px-6 md:mx-0 md:px-0 md:overflow-visible">
                    <div class="relative flex justify-between min-w-[500px]">
                        <div class="absolute top-1/2 left-0 w-full h-1 bg-gray-100 -z-10 transform -translate-y-1/2 rounded-full"></div>
                        
                        @php
                            $lineWidth = '0%';
                            if($santri) {
                                if($santri->status_pendaftaran == 'menunggu') $lineWidth = '33%';
                                elseif($santri->status_pendaftaran == 'diverifikasi') $lineWidth = '66%';
                                elseif($santri->status_pendaftaran == 'lulus' || $santri->status_pendaftaran == 'tidak lulus') $lineWidth = '100%';
                            }
                        @endphp
                        <div class="absolute top-1/2 left-0 h-1 bg-amber-500 -z-10 transform -translate-y-1/2 transition-all duration-1000 rounded-full" style="width: {{ $lineWidth }}"></div>

                        <div class="flex flex-col items-center">
                            <div class="w-10 h-10 md:w-12 md:h-12 {{ ($santri && $santri->tahap_pendaftaran >= 6) ? 'bg-[#8C6B14] text-white shadow-md' : 'bg-gray-100 text-gray-400' }} rounded-full flex items-center justify-center border-4 border-white mb-3 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <p class="font-bold text-xs text-gray-900">Pendaftaran</p>
                            <p class="text-[10px] text-gray-400 mt-1">{{ ($santri && $santri->tahap_pendaftaran >= 6) ? 'Selesai' : 'Belum Selesai' }}</p>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="w-10 h-10 md:w-12 md:h-12 {{ ($santri && in_array($santri->status_pendaftaran, ['diverifikasi', 'lulus', 'tidak lulus'])) ? 'bg-[#8C6B14] text-white shadow-md' : (($santri && $santri->status_pendaftaran == 'menunggu') ? 'bg-[#8C6B14] text-white shadow-md ring-4 ring-amber-50' : 'bg-gray-100 text-gray-400') }} rounded-full flex items-center justify-center border-4 border-white mb-3 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <p class="font-bold text-xs text-gray-900">Verifikasi</p>
                            <p class="text-[10px] text-center text-gray-400 mt-1">
                                {{ ($santri && in_array($santri->status_pendaftaran, ['diverifikasi', 'lulus', 'tidak lulus'])) ? 'Selesai' : (($santri && $santri->status_pendaftaran == 'menunggu') ? 'Sedang Diperiksa' : 'Terjadwal') }}
                            </p>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="w-10 h-10 md:w-12 md:h-12 {{ ($santri && in_array($santri->status_pendaftaran, ['lulus', 'tidak lulus'])) ? 'bg-[#8C6B14] text-white shadow-md' : (($santri && $santri->status_pendaftaran == 'diverifikasi') ? 'bg-[#8C6B14] text-white shadow-md ring-4 ring-amber-50' : 'bg-gray-100 text-gray-400') }} rounded-full flex items-center justify-center border-4 border-white mb-3 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                            <p class="font-bold text-xs text-gray-900">Seleksi</p>
                            <p class="text-[10px] text-center text-gray-400 mt-1">
                                {{ ($santri && in_array($santri->status_pendaftaran, ['lulus', 'tidak lulus'])) ? 'Selesai' : (($santri && $santri->status_pendaftaran == 'diverifikasi') ? 'Menunggu Keputusan' : 'Terjadwal') }}
                            </p>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="w-10 h-10 md:w-12 md:h-12 {{ ($santri && $santri->status_pendaftaran == 'lulus') ? 'bg-emerald-500 text-white shadow-md ring-4 ring-emerald-50' : (($santri && $santri->status_pendaftaran == 'tidak lulus') ? 'bg-rose-500 text-white shadow-md ring-4 ring-rose-50' : 'bg-gray-100 text-gray-400') }} rounded-full flex items-center justify-center border-4 border-white mb-3 transition-colors">
                                @if($santri && $santri->status_pendaftaran == 'tidak lulus')
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                @else
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path></svg>
                                @endif
                            </div>
                            <p class="font-bold text-xs text-gray-900">Hasil Akhir</p>
                            <p class="text-[10px] text-gray-400 mt-1">Tahap Akhir</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-3xl p-6 md:p-8 border border-gray-100 shadow-sm flex flex-col md:flex-row gap-8 items-start relative overflow-hidden flex-1 mb-8">
                <div class="absolute right-0 top-0 w-full md:w-64 h-full bg-gradient-to-t md:bg-gradient-to-l from-{{ $statusInfo['color'] ?? 'gray' }}-50/50 to-transparent"></div>
                
                <div class="w-full md:w-1/3 relative z-10">
                    <div class="flex items-center gap-3 mb-2">
                        <svg class="w-6 h-6 text-[#0B3B2C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                        <h3 class="font-bold text-lg text-[#0B3B2C]">Pembaruan Pendaftaran</h3>
                    </div>
                    <p class="text-sm text-gray-500 leading-relaxed">
                        Informasi dan instruksi terbaru dari panitia terkait status anak Anda.
                    </p>
                </div>

                <div class="w-full md:w-2/3 border-l-2 border-{{ $statusInfo['color'] ?? 'gray' }}-200 pl-6 relative z-10">
                    <div class="relative">
                        <div class="absolute -left-[31px] top-1.5 w-3 h-3 bg-{{ $statusInfo['color'] ?? 'gray' }}-500 rounded-full ring-4 ring-white"></div>
                        <h4 class="font-bold text-gray-900 mb-2">{{ $statusInfo['label'] }}</h4>
                        <p class="text-sm text-gray-600 mb-4 leading-relaxed bg-{{ $statusInfo['color'] ?? 'gray' }}-50 p-4 rounded-xl border border-{{ $statusInfo['color'] ?? 'gray' }}-100">
                            {{ $statusInfo['message'] }}
                        </p>
                        
                        @if(!$santri || $santri->tahap_pendaftaran < 6)
                            <a href="{{ route('pendaftaran.step1') }}" class="inline-flex items-center justify-center w-full md:w-auto gap-2 bg-[#0B3B2C] text-white px-5 py-3 md:py-2.5 rounded-xl text-xs font-bold hover:bg-[#082a20] transition shadow-sm">
                                Lanjutkan Pengisian Formulir <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        @endif
                    </div>
                </div>
            </div>

            <footer class="mt-auto pt-6 border-t border-gray-200 flex flex-col md:flex-row justify-between items-center text-xs text-gray-500 gap-4 md:gap-0 text-center md:text-left">
                <p>© 2026 PPTQ Bustanul Wildan. Dibuat untuk Kesempurnaan.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#" class="hover:text-gray-900 transition">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-gray-900 transition">Syarat Layanan</a>
                    <a href="#" class="hover:text-gray-900 transition">Pusat Bantuan</a>
                    <a href="#" class="hover:text-gray-900 transition">FAQ</a>
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