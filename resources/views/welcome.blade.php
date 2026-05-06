<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PPTQ Bustanul Wildan</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-slate-50 text-gray-800 font-figtree">

    <nav class="bg-emerald-900 text-white py-4 px-6 md:px-12 flex justify-between items-center">
        <div class="font-bold text-xl tracking-wider">Bustanul Wildan</div>
        
        <!-- Menu Desktop (Sembunyi di HP) -->
        <div class="hidden md:flex space-x-6 text-sm font-medium">
            <a href="{{ route('welcome') }}" class="text-amber-500 border-b-2 border-amber-500 pb-1">Pendaftaran</a>
            <a href="{{ route('panduan') }}" class="hover:text-amber-400 transition">Panduan</a>
            <a href="{{ route('tentang') }}" class="hover:text-amber-400 transition">Tentang Kami</a>
            <a href="{{ route('kontak') }}" class="hover:text-amber-400 transition">Kontak</a>
        </div>
        
        <!-- Tombol Aksi Desktop (Sembunyi di HP) -->
        <div class="hidden md:flex items-center space-x-4">
            <a href="{{ route('login') }}" class="text-sm font-semibold hover:text-amber-400">Login</a>
            <a href="{{ route('register') }}" class="bg-amber-600 hover:bg-amber-700 text-white px-5 py-2 rounded-md text-sm font-semibold transition shadow-md">Daftar Sekarang</a>
        </div>

        <!-- Tombol Menu Burger (Hanya Muncul di HP) -->
        <div class="md:hidden flex items-center">
            <button id="mobile-menu-button" class="text-white hover:text-amber-400 focus:outline-none">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </nav>

    <!-- Menu Dropdown Mobile (Tersembunyi secara default) -->
    <div id="mobile-menu" class="hidden md:hidden bg-emerald-800 text-white border-t border-emerald-700 shadow-lg">
        <div class="px-6 py-4 space-y-3 text-sm">
            <a href="{{ route('welcome') }}" class="block text-amber-500 font-semibold border-b border-emerald-700 pb-2">Pendaftaran</a>
            <a href="{{ route('panduan') }}" class="block hover:text-amber-400 border-b border-emerald-700 pb-2">Panduan</a>
            <a href="{{ route('tentang') }}" class="block hover:text-amber-400 border-b border-emerald-700 pb-2">Tentang Kami</a>
            <a href="{{ route('kontak') }}" class="block hover:text-amber-400 border-b border-emerald-700 pb-2">Kontak</a>
            <div class="pt-2 flex flex-col space-y-3">
                <a href="{{ route('login') }}" class="block text-center bg-emerald-900 hover:bg-emerald-700 py-2.5 rounded-md font-semibold">Login</a>
                <a href="{{ route('register') }}" class="block text-center bg-amber-600 hover:bg-amber-700 py-2.5 rounded-md font-semibold text-white">Daftar Sekarang</a>
            </div>
        </div>
    </div>

    <!-- SEMUA KODE DI BAWAH INI TIDAK SAYA UBAH SAMA SEKALI SESUAI PERINTAHMU -->

    <section class="max-w-7xl mx-auto px-6 md:px-12 py-12 md:py-20 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div>
            <div class="inline-block bg-amber-100 text-amber-800 text-xs font-bold px-3 py-1 rounded-full mb-6 flex items-center gap-2 w-max">
                <span class="w-2 h-2 rounded-full bg-amber-600"></span> TAHUN AJARAN 2025/2026
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-emerald-900 leading-tight mb-6">
                Wujudkan Generasi <br> <span class="text-amber-600">Qur'ani, Kreatif, Komunikatif.</span>
            </h1>
            <p class="text-gray-600 mb-8 max-w-lg text-lg">
                Bergabunglah dengan generasi sarjana Alquran berikutnya di PPTQ Bustanul Wildan. Wujudkan Generasi Qur'ani Berwawasan Luas.
            </p>
            <div class="flex space-x-4">
                <a href="{{ route('register') }}" class="bg-emerald-900 hover:bg-emerald-800 text-white px-6 py-3 rounded-lg font-semibold transition shadow-lg">Daftar Sekarang</a>
                <a href="{{ route('panduan') }}" class="bg-white hover:bg-gray-50 text-emerald-900 border border-gray-200 px-6 py-3 rounded-lg font-semibold transition shadow-sm">Panduan Penerimaan</a>
            </div>
        </div>
        
        <div class="relative">
            <img src="{{ asset('images/hero-image.png') }}" alt="Gedung Pesantren" class="rounded-2xl shadow-xl w-full h-[500px] object-cover object-center">
            
            <div class="absolute bottom-6 left-6 right-6 bg-white/90 backdrop-blur-sm p-6 rounded-xl shadow-lg border border-white/50">
                <p class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-1">Kuota Pendaftaran</p>
                <div class="flex justify-between items-end mb-2">
                    <h3 class="text-xl font-bold text-emerald-900">Kursi yang Tersisa</h3>
                    <div class="text-2xl font-bold text-amber-600">{{ $sisaKursi }}<span class="text-sm text-gray-400">/{{ $kuotaTotal }}</span></div>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                    <div class="bg-amber-500 h-2 rounded-full transition-all duration-1000" style="width: {{ $persentase }}%"></div>
                </div>
                <p class="text-xs text-gray-400 mt-3 flex items-center gap-1">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Pendaftaran sisa 14 hari untuk tahun ajaran 2026
                </p>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 md:px-12 py-16">
        <div class="text-center mb-12">
            <p class="text-amber-600 font-bold text-xs tracking-widest uppercase mb-2">Proses Sederhana</p>
            <h2 class="text-3xl font-bold text-emerald-900">Perjalanan Penerimaan</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <div class="w-10 h-10 bg-emerald-50 rounded-lg flex items-center justify-center text-emerald-600 mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </div>
                <h3 class="font-bold text-emerald-900 mb-2">1. Pembuatan Akun</h3>
                <p class="text-sm text-gray-500">Buat akun pribadi Anda menggunakan email yang valid untuk melacak status aplikasi.</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <div class="w-10 h-10 bg-emerald-50 rounded-lg flex items-center justify-center text-emerald-600 mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                </div>
                <h3 class="font-bold text-emerald-900 mb-2">2. Dokumen Penyerahan</h3>
                <p class="text-sm text-gray-500">Unggah dokumen yang diperlukan termasuk akta kelahiran dan catatan akademis.</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <div class="w-10 h-10 bg-emerald-50 rounded-lg flex items-center justify-center text-emerald-600 mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                </div>
                <h3 class="font-bold text-emerald-900 mb-2">3. Tinjauan Akademik</h3>
                <p class="text-sm text-gray-500">Dewan pendidik kami akan melakukannya meninjau aplikasi dan menjadwalkan wawancara.</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <div class="w-10 h-10 bg-emerald-50 rounded-lg flex items-center justify-center text-emerald-600 mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="font-bold text-emerald-900 mb-2">4. Pendaftaran</h3>
                <p class="text-sm text-gray-500">Selesaikan pendaftaran Anda dan selamat datang di Bustanul Wildan keluarga.</p>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 md:px-12 py-16 grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="md:col-span-2 bg-emerald-900 rounded-2xl p-8 md:p-12 text-white flex flex-col justify-center">
            <h2 class="text-3xl font-bold mb-4">Mengapa Memilih Bustanul Wildan?</h2>
            <p class="text-emerald-100 mb-10 max-w-xl text-sm leading-relaxed">
                Di sini, kesucian Al-Qur'an bertemu dengan semangat intelektual yang dinamis, membentuk pribadi berbudi luhur yang siap menjawab tantangan zaman tanpa kehilangan jati diri Islami.
            </p>
            <div class="grid grid-cols-3 gap-4">
                <div>
                    <div class="text-amber-500 text-3xl font-bold mb-1">500+</div>
                    <div class="text-xs text-emerald-200 tracking-wider uppercase">Active Students</div>
                </div>
                <div>
                    <div class="text-amber-500 text-3xl font-bold mb-1">40+</div>
                    <div class="text-xs text-emerald-200 tracking-wider uppercase">Certified Teachers</div>
                </div>
                <div>
                    <div class="text-amber-500 text-3xl font-bold mb-1">15+</div>
                    <div class="text-xs text-emerald-200 tracking-wider uppercase">National Awards</div>
                </div>
            </div>
        </div>
        <div class="space-y-6">
            <div class="bg-amber-50 rounded-2xl p-8 border border-amber-100 h-[48%]">
                <div class="w-8 h-8 text-amber-600 mb-4">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path></svg>
                </div>
                <h3 class="font-bold text-emerald-900 mb-2">Fasilitas Modern</h3>
                <p class="text-xs text-gray-600">Ruang kelas cerdas dan laboratorium berkecepatan tinggi mendukung pembelajaran teknis bersama Tahfidz.</p>
            </div>
            <div class="bg-gray-200 rounded-2xl p-8 h-[48%] flex flex-col justify-end relative overflow-hidden">
                <div class="absolute inset-0 opacity-20 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-gray-400 to-transparent"></div>
                <div class="relative z-10">
                    <div class="w-8 h-8 text-emerald-700 mb-4">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="font-bold text-emerald-900 mb-2">Berwawasan Luas</h3>
                    <p class="text-xs text-gray-600">Berfokus pada mental, spiritual, dan emosional kesejahteraan setiap santri.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-4xl mx-auto px-6 py-20 text-center">
        <h2 class="text-3xl font-bold text-emerald-900 mb-4">Siap memulai perjalanan Anda?</h2>
        <p class="text-gray-500 mb-8">Pendaftaran untuk tahun ajaran 2026 ditutup dalam 14 hari. Amankan tempat Anda sekarang.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ route('register') }}" class="bg-emerald-900 hover:bg-emerald-800 text-white px-8 py-3 rounded-lg font-bold transition shadow-lg">Daftarkan Akun Pelajar</a>
            <a href="#" class="bg-white hover:bg-gray-50 text-emerald-900 border border-gray-200 px-8 py-3 rounded-lg font-bold transition shadow-sm">Download Brosur</a>
        </div>
    </section>

    <footer class="border-t border-gray-200 bg-white">
        <div class="max-w-7xl mx-auto px-6 py-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <div>
                <div class="font-bold text-emerald-900">PPTQ Bustanul Wildan</div>
                <div class="text-xs text-gray-400 mt-1">© 2026 PPTQ Bustanul Wildan. Crafted for Excellence.</div>
            </div>
            <div class="flex space-x-6 text-xs text-gray-400 font-medium">
                <a href="#" class="hover:text-emerald-900">Privacy Policy</a>
                <a href="#" class="hover:text-emerald-900">Terms of Service</a>
                <a href="#" class="hover:text-emerald-900">Help Center</a>
                <a href="#" class="hover:text-emerald-900">FAQ</a>
            </div>
        </div>
    </footer>

    <!-- Skrip Interaksi Tombol Menu Burger -->
    <script>
        const btn = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>