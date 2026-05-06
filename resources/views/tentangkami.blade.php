<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tentang Kami - PPTQ Bustanul Wildan</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        /* CSS Khusus untuk Animasi Gulir */
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s cubic-bezier(0.5, 0, 0, 1);
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="antialiased bg-[#F8FAFC] text-gray-800 font-figtree">

    <!-- NAVBAR (Sudah Diperbarui Menjadi Responsif) -->
    <nav class="bg-emerald-900 text-white py-4 px-6 md:px-12 flex justify-between items-center">
        <div class="font-bold text-xl tracking-wider">Bustanul Wildan</div>
        
        <!-- Menu Desktop -->
        <div class="hidden md:flex space-x-6 text-sm font-medium">
            <a href="{{ route('welcome') }}" class="hover:text-amber-400 transition">Pendaftaran</a>
            <a href="{{ route('panduan') }}" class="hover:text-amber-400 transition">Panduan</a>
            <a href="{{ route('tentang') }}" class="text-amber-500 border-b-2 border-amber-500 pb-1 transition">Tentang Kami</a>
            <a href="{{ route('kontak') }}" class="hover:text-amber-400 transition">Kontak</a>
        </div>
        
        <!-- Tombol Aksi Desktop -->
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
            <a href="{{ route('welcome') }}" class="block hover:text-amber-400 border-b border-emerald-700 pb-2">Pendaftaran</a>
            <a href="{{ route('panduan') }}" class="block hover:text-amber-400 border-b border-emerald-700 pb-2">Panduan</a>
            <a href="{{ route('tentang') }}" class="block text-amber-500 font-semibold border-b border-emerald-700 pb-2">Tentang Kami</a>
            <a href="{{ route('kontak') }}" class="block hover:text-amber-400 border-b border-emerald-700 pb-2">Kontak</a>
            <div class="pt-2 flex flex-col space-y-3">
                <a href="{{ route('login') }}" class="block text-center bg-emerald-900 hover:bg-emerald-700 py-2.5 rounded-md font-semibold">Login</a>
                <a href="{{ route('register') }}" class="block text-center bg-amber-600 hover:bg-amber-700 py-2.5 rounded-md font-semibold text-white">Daftar Sekarang</a>
            </div>
        </div>
    </div>

    <!-- HERO SECTION -->
    <section class="relative h-[60vh] min-h-[400px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1564683214965-3619addd900d?q=80&w=2000&auto=format&fit=crop" alt="Masjid Background" class="w-full h-full object-cover object-center filter brightness-50">
        </div>
        
        <div class="relative z-10 max-w-7xl w-full mx-auto px-6 md:px-12 reveal">
            <p class="text-emerald-300 font-bold tracking-widest text-xs uppercase mb-3">Lembaga Pendidikan Al-Qur'an</p>
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold text-white tracking-tight">
                Tentang Kami
            </h1>
        </div>
    </section>

    <!-- VISI & MISI SECTION -->
    <section class="max-w-7xl mx-auto px-6 md:px-12 py-20 lg:py-28">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="reveal">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Visi & Misi</h2>
                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    Menjadi pusat unggulan pendidikan Al-Qur'an yang memadukan kedalaman spiritual dengan kecerdasan digital untuk membentuk generasi rabbani yang futuristik.
                </p>
                <div class="w-16 h-1 bg-[#8C6B14] rounded-full"></div>
            </div>
            
            <div class="space-y-6">
                <!-- Kartu 1 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm border-l-4 border-emerald-700 reveal" style="transition-delay: 100ms;">
                    <div class="flex items-center gap-3 mb-3">
                        <svg class="w-6 h-6 text-emerald-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                        <h3 class="font-bold text-gray-900 text-lg">Keunggulan Akademik</h3>
                    </div>
                    <p class="text-sm text-gray-500 leading-relaxed">Menyelenggarakan program tahfidz Al-Qur'an dengan metodologi mutakhir yang terintegrasi dengan kurikulum sains dan teknologi modern.</p>
                </div>
                <!-- Kartu 2 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm border-l-4 border-amber-500 reveal" style="transition-delay: 200ms;">
                    <div class="flex items-center gap-3 mb-3">
                        <svg class="w-6 h-6 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <h3 class="font-bold text-gray-900 text-lg">Karakter Rabbani</h3>
                    </div>
                    <p class="text-sm text-gray-500 leading-relaxed">Membentuk pribadi yang berakhlakul karimah, mandiri, dan memiliki integritas tinggi melalui pembiasaan adab dan tradisi pesantren.</p>
                </div>
                <!-- Kartu 3 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm border-l-4 border-[#0B3B2C] reveal" style="transition-delay: 300ms;">
                    <div class="flex items-center gap-3 mb-3">
                        <svg class="w-6 h-6 text-[#0B3B2C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                        <h3 class="font-bold text-gray-900 text-lg">Jejaring Global</h3>
                    </div>
                    <p class="text-sm text-gray-500 leading-relaxed">Membangun kolaborasi internasional dalam dakwah dan pendidikan untuk mempersiapkan santri berkiprah di kancah global.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SEJARAH KAMI SECTION -->
    <section class="bg-white py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-6 md:px-12 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="order-2 lg:order-1 reveal">
                <img src="https://images.unsplash.com/photo-1609599006353-e629aaab3151?q=80&w=1000&auto=format&fit=crop" alt="Sejarah PPTQ Bustanul Wildan" class="rounded-3xl shadow-2xl w-full h-auto object-cover max-h-[600px]">
            </div>
            
            <div class="order-1 lg:order-2 reveal" style="transition-delay: 200ms;">
                <p class="text-amber-600 font-bold text-xs tracking-widest uppercase mb-3">Sejarah Kami</p>
                <h2 class="text-4xl font-bold text-emerald-900 mb-8">Sebuah Dedikasi Abadi</h2>
                
                <div class="space-y-6 text-gray-600 text-sm md:text-base leading-relaxed">
                    <p>Didirikan pada tahun 1999 di lereng perbukitan yang tenang, PPTQ Bustanul Wildan lahir dari visi Kyai Haji Ahmad Syafi'i untuk menciptakan oase ilmu di tengah gempuran modernitas. Bermula dari sebuah surau bambu kecil, kami telah tumbuh menjadi mercusuar pendidikan Al-Qur'an di Nusantara.</p>
                    <p>Nama "Bustanul Wildan" yang berarti "Taman Anak-anak Surga" bukanlah sekadar label, melainkan doa yang terus mengalir. Kami percaya bahwa setiap santri adalah benih potensial yang harus dirawat dengan kasih sayang spiritual dan ketajaman intelektual.</p>
                    <p>Hingga hari ini, kami tetap setia pada akar tradisi pesantren sembari merangkul inovasi teknologi sebagai alat bantu dalam mensyiarkan kalam Ilahi ke seluruh penjuru dunia.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PIMPINAN & PENGASUH SECTION -->
    <section class="max-w-7xl mx-auto px-6 md:px-12 py-20 lg:py-28">
        <div class="text-center max-w-2xl mx-auto mb-16 reveal">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Pimpinan & Pengasuh</h2>
            <p class="text-gray-500 text-sm">Dibimbing oleh para asatidz dan ulama yang kompeten di bidangnya, untuk menjaga sanad keilmuan dan moralitas.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 reveal" style="transition-delay: 100ms;">
                <img src="https://images.unsplash.com/photo-1566492031773-4f4e44671857?q=80&w=500&auto=format&fit=crop" alt="Pimpinan 1" class="w-full h-72 object-cover filter grayscale hover:grayscale-0 transition duration-500">
                <div class="p-6">
                    <h3 class="font-bold text-gray-900 text-lg">KH. Ahmad Riyan Syafi'i</h3>
                    <p class="text-xs text-amber-600 font-bold uppercase tracking-wider mb-4">Pengasuh Utama</p>
                    <p class="text-sm text-gray-500 leading-relaxed">Ahli Qira'at Sab'ah dengan pengalaman lebih dari 30 tahun dalam membina penghafal Al-Qur'an.</p>
                </div>
            </div>
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 reveal" style="transition-delay: 200ms;">
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=500&auto=format&fit=crop" alt="Pimpinan 2" class="w-full h-72 object-cover filter grayscale hover:grayscale-0 transition duration-500">
                <div class="p-6">
                    <h3 class="font-bold text-gray-900 text-lg">Dr. Muhammad Zaki</h3>
                    <p class="text-xs text-amber-600 font-bold uppercase tracking-wider mb-4">Direktur Akademik</p>
                    <p class="text-sm text-gray-500 leading-relaxed">Lulusan Al-Azhar Kairo yang mengintegrasikan metodologi klasik dengan kurikulum modern.</p>
                </div>
            </div>
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 reveal" style="transition-delay: 300ms;">
                <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=500&auto=format&fit=crop" alt="Pimpinan 3" class="w-full h-72 object-cover filter grayscale hover:grayscale-0 transition duration-500">
                <div class="p-6">
                    <h3 class="font-bold text-gray-900 text-lg">Ust. Ridwan Hakim</h3>
                    <p class="text-xs text-amber-600 font-bold uppercase tracking-wider mb-4">Kepala Program IT & Tahfidz</p>
                    <p class="text-sm text-gray-500 leading-relaxed">Pelopor digitalisasi pembelajaran Al-Qur'an dan manajemen data santri berbasis *cloud*.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FASILITAS SECTION -->
    <section class="max-w-7xl mx-auto px-6 md:px-12 pt-10 mb-24 lg:mb-40">
        <div class="flex flex-col md:flex-row justify-between items-end mb-10 reveal">
            <div>
                <p class="text-amber-600 font-bold text-xs tracking-widest uppercase mb-2">Fasilitas</p>
                <h2 class="text-3xl font-bold text-emerald-900">Sanctuary Modern bagi Para<br>Penghafal</h2>
            </div>
            <a href="#" class="text-sm font-bold text-emerald-700 hover:text-emerald-900 transition flex items-center gap-2 mt-4 md:mt-0">
                Lihat Semua Fasilitas <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Gambar Besar (Sisi Kiri) -->
            <div class="h-64 md:h-96 lg:h-[600px] reveal">
                <img src="https://images.unsplash.com/photo-1584551246679-0daf3d275d0f?q=80&w=1000&auto=format&fit=crop" alt="Masjid Utama" class="w-full h-full object-cover rounded-3xl shadow-sm">
            </div>
            
            <!-- Grid Gambar Kecil (Sisi Kanan) -->
            <div class="grid grid-cols-2 grid-rows-2 gap-6 h-[400px] md:h-[500px] lg:h-[600px] reveal" style="transition-delay: 200ms;">
                <div class="col-span-2 row-span-1 h-full">
                    <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?q=80&w=1000&auto=format&fit=crop" alt="Perpustakaan" class="w-full h-full object-cover rounded-3xl shadow-sm">
                </div>
                <div class="col-span-1 row-span-1 h-full">
                    <img src="https://images.unsplash.com/photo-1555854877-bab0e564b8d5?q=80&w=500&auto=format&fit=crop" alt="Asrama" class="w-full h-full object-cover rounded-3xl shadow-sm">
                </div>
                <div class="col-span-1 row-span-1 h-full">
                    <img src="https://images.unsplash.com/photo-1562774053-701939374585?q=80&w=500&auto=format&fit=crop" alt="Laboratorium Komputer" class="w-full h-full object-cover rounded-3xl shadow-sm">
                </div>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION SECTION -->
    <section class="bg-emerald-900 py-24 px-6 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-white to-transparent"></div>
        
        <div class="max-w-4xl mx-auto relative z-10 reveal">
            <div class="bg-emerald-100/90 backdrop-blur-md rounded-3xl p-10 md:p-16 text-center shadow-xl border border-emerald-200/50">
                <h2 class="text-3xl md:text-4xl font-extrabold text-emerald-900 mb-4">Mulai Perjalanan Spiritual Anda</h2>
                <p class="text-emerald-800/80 mb-10 max-w-lg mx-auto">Pendaftaran santri baru tahun ajaran 2025/2026 telah dibuka. Jadilah bagian dari keluarga besar Bustanul Wildan.</p>
                
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="{{ route('pendaftaran.step1') }}" class="bg-emerald-900 hover:bg-emerald-800 text-white px-8 py-3.5 rounded-xl font-bold transition shadow-lg">Daftar Sekarang</a>
                    <a href="{{ route('panduan') }}" class="bg-transparent border-2 border-emerald-900 text-emerald-900 hover:bg-emerald-200 px-8 py-3.5 rounded-xl font-bold transition">Unduh Brosur</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="border-t border-gray-200 bg-white">
        <div class="max-w-7xl mx-auto px-6 md:px-12 py-10 flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
            <div>
                <div class="font-bold text-emerald-900 text-lg mb-1">PPTQ Bustanul Wildan</div>
                <div class="text-xs text-gray-500 leading-relaxed max-w-xs">© 2026 PPTQ Bustanul Wildan. The Digital Sanctuary for Modern Learning. Mencetak generasi Qur'ani yang adaptif dengan teknologi.</div>
            </div>
            
            <div class="flex flex-col sm:flex-row gap-10">
                <div>
                    <h4 class="font-bold text-gray-900 text-xs uppercase tracking-widest mb-3">Navigasi</h4>
                    <div class="flex flex-col space-y-2 text-xs text-gray-500">
                        <a href="{{ route('tentang') }}" class="hover:text-emerald-900">Visi & Misi</a>
                        <a href="#" class="hover:text-emerald-900">Sejarah</a>
                        <a href="#" class="hover:text-emerald-900">Fasilitas</a>
                    </div>
                </div>
                <div>
                    <h4 class="font-bold text-gray-900 text-xs uppercase tracking-widest mb-3">Informasi</h4>
                    <div class="flex flex-col space-y-2 text-xs text-gray-500">
                        <a href="{{ route('panduan') }}" class="hover:text-emerald-900">Pendaftaran</a>
                        <a href="#" class="hover:text-emerald-900">Pusat Bantuan</a>
                        <a href="#" class="hover:text-emerald-900">Kontak Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- SCRIPT GABUNGAN: MENU BURGER & ANIMASI SCROLL -->
    <script>
        // 1. Skrip Menu Burger Mobile
        const btn = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');

        if(btn && menu) {
            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        }

        // 2. Skrip Animasi Scroll (Sesuai kode aslimu)
        document.addEventListener("DOMContentLoaded", function() {
            const reveals = document.querySelectorAll(".reveal");
            const revealOptions = {
                threshold: 0.15,
                rootMargin: "0px 0px -50px 0px"
            };

            const revealOnScroll = new IntersectionObserver(function(entries, observer) {
                entries.forEach(entry => {
                    if (!entry.isIntersecting) return;
                    entry.target.classList.add("active");
                    observer.unobserve(entry.target);
                });
            }, revealOptions);

            reveals.forEach(reveal => {
                revealOnScroll.observe(reveal);
            });
        });
    </script>
</body>
</html>