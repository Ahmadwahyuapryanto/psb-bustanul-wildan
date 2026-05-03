<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panduan Pendaftaran - PPTQ Bustanul Wildan</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        /* Kelas kustom untuk menyembunyikan elemen sebelum animasi */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.5, 0, 0, 1);
        }
        /* Kelas yang ditambahkan JS saat elemen terlihat di layar */
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
        /* Transisi khusus untuk FAQ Accordion */
        details > summary { list-style: none; }
        details > summary::-webkit-details-marker { display: none; }
    </style>
</head>
<body class="bg-[#F8FAFC] text-gray-800 font-figtree antialiased">

    <!-- NAVBAR -->
    <nav class="bg-emerald-900 text-white py-4 px-6 md:px-12 flex justify-between items-center">
        <div class="font-bold text-xl tracking-wider">Bustanul Wildan</div>
        <div class="hidden md:flex space-x-6 text-sm font-medium">
            <a href="{{ route('welcome') }}" class="hover:text-amber-400 transition">Pendaftaran</a>
            <a href="{{ route('panduan') }}" class="text-amber-500 border-b-2 border-amber-500 pb-1">Panduan</a>
            <a href="{{ route('tentang') }}" class="hover:text-amber-400 transition">Tentang Kami</a>
            <a href="{{ route('kontak') }}" class="hover:text-amber-400 transition">Kontak</a>
        </div>
        <div class="flex items-center space-x-4">
            <a href="{{ route('login') }}" class="text-sm font-semibold hover:text-amber-400">Login</a>
            <a href="{{ route('register') }}" class="bg-amber-600 hover:bg-amber-700 text-white px-5 py-2 rounded-md text-sm font-semibold transition shadow-md">Daftar Sekarang</a>
        </div>
    </nav>
    <!-- HERO SECTION -->
    <section class="max-w-7xl mx-auto px-6 md:px-12 py-16 md:py-24 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div class="reveal">
            <div class="inline-block bg-amber-100 text-amber-800 text-xs font-bold px-3 py-1 rounded-full mb-6 flex items-center gap-2 w-max">
                <span class="w-2 h-2 rounded-full bg-amber-600"></span> TAHUN AJARAN 2025/2026
            </div>
            <h1 class="text-4xl md:text-6xl font-extrabold text-[#0B3B2C] mb-6 leading-tight">
                Panduan Pendaftaran
            </h1>
            <p class="text-gray-500 text-lg leading-relaxed max-w-lg mb-8">
                Mulai perjalanan spiritual dan akademis Anda di Digital Sanctuary PPTQ Bustanul Wildan. Ikuti panduan komprehensif ini untuk proses pendaftaran yang lancar dan penuh berkah.
            </p>
        </div>
        <div class="relative h-64 md:h-96 bg-gray-200 rounded-3xl overflow-hidden reveal" style="transition-delay: 200ms;">
            <!-- Ilustrasi / Pattern (Bisa diganti dengan gambar asli) -->
            <div class="absolute inset-0 bg-[#E2E8F0] flex items-center justify-center opacity-50">
                <svg class="w-full h-full text-white" viewBox="0 0 100 100" preserveAspectRatio="none" fill="currentColor"><path d="M50 10 C 20 10, 10 30, 10 50 C 10 80, 50 90, 50 90 C 50 90, 90 80, 90 50 C 90 30, 80 10, 50 10 Z M50 20 C 70 20, 80 35, 80 50 C 80 75, 50 82, 50 82 C 50 82, 20 75, 20 50 C 20 35, 30 20, 50 20 Z" opacity="0.3"></path></svg>
            </div>
        </div>
    </section>

    <!-- ALUR PENDAFTARAN -->
    <section class="max-w-7xl mx-auto px-6 md:px-12 py-16">
        <h2 class="text-2xl font-bold text-gray-900 mb-12 reveal">Alur Pendaftaran</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div class="reveal" style="transition-delay: 100ms;">
                <div class="w-10 h-10 bg-[#0B3B2C] text-white rounded-full flex items-center justify-center font-bold mb-4 shadow-sm">1</div>
                <h3 class="font-bold text-gray-900 mb-2">Registrasi Online</h3>
                <p class="text-sm text-gray-500 leading-relaxed border-t-2 border-gray-100 pt-4">Isi formulir pendaftaran melalui portal resmi kami dengan data yang valid dan lengkap.</p>
            </div>
            <!-- Step 2 -->
            <div class="reveal" style="transition-delay: 200ms;">
                <div class="w-10 h-10 bg-gray-100 text-gray-600 rounded-full flex items-center justify-center font-bold mb-4">2</div>
                <h3 class="font-bold text-gray-900 mb-2">Verifikasi Dokumen</h3>
                <p class="text-sm text-gray-500 leading-relaxed border-t-2 border-gray-100 pt-4">Tim administrasi akan memverifikasi kelengkapan berkas yang diunggah secara digital.</p>
            </div>
            <!-- Step 3 -->
            <div class="reveal" style="transition-delay: 300ms;">
                <div class="w-10 h-10 bg-gray-100 text-gray-600 rounded-full flex items-center justify-center font-bold mb-4">3</div>
                <h3 class="font-bold text-gray-900 mb-2">Ujian Seleksi</h3>
                <p class="text-sm text-gray-500 leading-relaxed border-t-2 border-gray-100 pt-4">Mengikuti rangkaian tes baca tulis Al-Quran, tes akademis, dan wawancara santri baru.</p>
            </div>
            <!-- Step 4 -->
            <div class="reveal" style="transition-delay: 400ms;">
                <div class="w-10 h-10 bg-gray-100 text-gray-600 rounded-full flex items-center justify-center font-bold mb-4">4</div>
                <h3 class="font-bold text-gray-900 mb-2">Daftar Ulang</h3>
                <p class="text-sm text-gray-500 leading-relaxed border-t-2 border-gray-100 pt-4">Penyelesaian administrasi keuangan dan penyerahan berkas fisik asli ke sekretariat.</p>
            </div>
        </div>
    </section>

    <!-- PERSYARATAN DOKUMEN -->
    <section class="max-w-7xl mx-auto px-6 md:px-12 py-16">
        <h2 class="text-2xl font-bold text-gray-900 mb-10 text-center reveal">Persyaratan Dokumen</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Berkas Utama -->
            <div class="md:col-span-2 bg-white rounded-3xl p-8 md:p-10 shadow-sm border border-gray-100 reveal">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Berkas Identitas Wajib</h3>
                <p class="text-sm text-gray-500 mb-8 max-w-md">Dokumen hukum yang diperlukan untuk validasi data santri pada sistem kementerian agama.</p>
                
                <ul class="space-y-4">
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-[#8C6B14]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span class="text-sm text-gray-700">Fotokopi Akta Kelahiran (3 Lembar)</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-[#8C6B14]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span class="text-sm text-gray-700">Fotokopi Kartu Keluarga (3 Lembar)</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-[#8C6B14]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span class="text-sm text-gray-700">Ijazah Terakhir atau Surat Keterangan Lulus</span>
                    </li>
                </ul>
            </div>

            <!-- Pas Foto -->
            <div class="bg-[#0B3B2C] text-white rounded-3xl p-8 md:p-10 shadow-md flex flex-col justify-end reveal" style="transition-delay: 200ms;">
                <svg class="w-8 h-8 text-amber-500 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                <h3 class="text-xl font-bold mb-2">Pas Foto Terbaru</h3>
                <p class="text-xs text-emerald-100/80 leading-relaxed">Ukuran 3×4 dan 4×6 masing-masing 4 lembar dengan latar belakang biru untuk santri putra dan merah untuk santri putri.</p>
            </div>

            <!-- Kesehatan -->
            <div class="bg-gray-200 rounded-3xl p-8 md:p-10 shadow-sm reveal">
                <h3 class="text-lg font-bold text-gray-900 mb-2">Kesehatan</h3>
                <p class="text-xs text-gray-600 mb-8 leading-relaxed">Surat keterangan sehat dari Dokter/Puskesmas setempat yang menyatakan santri bebas penyakit menular.</p>
                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                </div>
            </div>

            <!-- Tambahan -->
            <div class="md:col-span-2 bg-[#FDE68A] rounded-3xl p-8 md:p-10 shadow-sm flex items-center justify-between reveal" style="transition-delay: 200ms;">
                <div>
                    <h3 class="text-lg font-bold text-[#92400E] mb-2">Dokumen Tambahan</h3>
                    <p class="text-sm text-[#B45309] max-w-md">Fotokopi KTP Orang Tua/Wali dan fotokopi kartu bantuan sosial (KIP/PKH) jika memiliki.</p>
                </div>
                <svg class="w-12 h-12 text-[#D97706] opacity-50 hidden sm:block" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path></svg>
            </div>
        </div>
    </section>

    <!-- AGENDA PENTING -->
    <section class="bg-[#0B3B2C] text-white py-20 relative overflow-hidden mt-10">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-white to-transparent"></div>
        
        <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10">
            <div class="text-center mb-16 reveal">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Agenda Penting</h2>
                <p class="text-emerald-100/70 text-sm">Catat tanggal-tanggal krusial untuk persiapan pendaftaran Anda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Gelombang 1 -->
                <div class="bg-white/5 border border-white/10 rounded-3xl p-8 backdrop-blur-sm reveal" style="transition-delay: 100ms;">
                    <p class="text-[10px] font-bold text-amber-500 uppercase tracking-widest mb-3">GELOMBANG I</p>
                    <h3 class="text-2xl font-bold mb-4">01 Jan - 28 Feb</h3>
                    <p class="text-sm text-emerald-100/70 leading-relaxed">Pendaftaran Awal & Tes Seleksi Gelombang Pertama.</p>
                </div>
                <!-- Gelombang 2 -->
                <div class="bg-white/5 border border-white/10 rounded-3xl p-8 backdrop-blur-sm reveal" style="transition-delay: 200ms;">
                    <p class="text-[10px] font-bold text-amber-500 uppercase tracking-widest mb-3">GELOMBANG II</p>
                    <h3 class="text-2xl font-bold mb-4">01 Mar - 30 Apr</h3>
                    <p class="text-sm text-emerald-100/70 leading-relaxed">Pendaftaran Lanjutan (Jika kuota masih tersedia).</p>
                </div>
                <!-- Pengumuman -->
                <div class="bg-white/5 border border-amber-500/30 rounded-3xl p-8 backdrop-blur-sm reveal" style="transition-delay: 300ms;">
                    <p class="text-[10px] font-bold text-amber-500 uppercase tracking-widest mb-3">PENGUMUMAN</p>
                    <h3 class="text-2xl font-bold text-amber-400 mb-4">15 Mei 2024</h3>
                    <p class="text-sm text-emerald-100/70 leading-relaxed">Pengumuman kelulusan serentak melalui website resmi.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="max-w-4xl mx-auto px-6 md:px-12 py-20">
        <h2 class="text-3xl font-bold text-gray-900 mb-10 text-center reveal">Pertanyaan Umum</h2>
        
        <div class="space-y-4">
            <!-- Pertanyaan 1 -->
            <details class="group bg-white rounded-2xl border border-gray-100 shadow-sm reveal [&_summary::-webkit-details-marker]:hidden" open>
                <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-gray-900 border-l-4 border-[#8C6B14] rounded-l-2xl">
                    <span>Apakah pendaftaran bisa dilakukan secara offline?</span>
                    <span class="transition group-open:rotate-180">
                        <svg fill="none" height="24" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" width="24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
                    </span>
                </summary>
                <div class="text-gray-500 text-sm px-6 pb-6 leading-relaxed">
                    Ya, pendaftaran offline tetap dilayani di sekretariat pondok setiap hari kerja pukul 08.00 - 15.00 WIB. Namun kami sangat menyarankan pendaftaran online untuk kemudahan administrasi.
                </div>
            </details>

            <!-- Pertanyaan 2 -->
            <details class="group bg-white rounded-2xl border border-gray-100 shadow-sm reveal [&_summary::-webkit-details-marker]:hidden">
                <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-gray-900 border-l-4 border-transparent hover:border-[#8C6B14] transition-all rounded-l-2xl">
                    <span>Berapa biaya pendaftaran awal?</span>
                    <span class="transition group-open:rotate-180">
                        <svg fill="none" height="24" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" width="24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
                    </span>
                </summary>
                <div class="text-gray-500 text-sm px-6 pb-6 leading-relaxed">
                    Biaya formulir dan pendaftaran awal adalah sebesar Rp 250.000,- yang dapat ditransfer melalui Virtual Account yang diberikan sistem setelah pengisian formulir.
                </div>
            </details>

            <!-- Pertanyaan 3 -->
            <details class="group bg-white rounded-2xl border border-gray-100 shadow-sm reveal [&_summary::-webkit-details-marker]:hidden">
                <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-gray-900 border-l-4 border-transparent hover:border-[#8C6B14] transition-all rounded-l-2xl">
                    <span>Apa saja materi ujian seleksi masuk?</span>
                    <span class="transition group-open:rotate-180">
                        <svg fill="none" height="24" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" width="24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
                    </span>
                </summary>
                <div class="text-gray-500 text-sm px-6 pb-6 leading-relaxed">
                    Materi ujian meliputi tes kemampuan dasar (membaca, menulis, berhitung), tes bacaan Al-Quran, dan wawancara kesiapan mental anak serta orang tua.
                </div>
            </details>

            <!-- Pertanyaan 4 -->
            <details class="group bg-white rounded-2xl border border-gray-100 shadow-sm reveal [&_summary::-webkit-details-marker]:hidden">
                <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-gray-900 border-l-4 border-transparent hover:border-[#8C6B14] transition-all rounded-l-2xl">
                    <span>Apakah tersedia beasiswa untuk santri berprestasi?</span>
                    <span class="transition group-open:rotate-180">
                        <svg fill="none" height="24" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" width="24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
                    </span>
                </summary>
                <div class="text-gray-500 text-sm px-6 pb-6 leading-relaxed">
                    Ya, kami menyediakan program beasiswa jalur prestasi akademik dan tahfidz yang akan diseleksi secara khusus oleh yayasan.
                </div>
            </details>
        </div>
    </section>

    <!-- CALL TO ACTION (CTA) -->
    <section class="max-w-7xl mx-auto px-6 md:px-12 pb-20 reveal">
        <div class="bg-[#0B3B2C] rounded-[3rem] p-12 md:p-20 text-center shadow-xl relative overflow-hidden">
            <div class="relative z-10">
                <h2 class="text-3xl md:text-5xl font-bold text-white mb-10">Siap Memulai Langkah Pertama?</h2>
                <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                    <a href="{{ route('pendaftaran.step1') }}" class="w-full sm:w-auto bg-[#8C6B14] hover:bg-[#73570f] text-white px-8 py-4 rounded-xl font-bold transition shadow-lg">
                        Daftar Sekarang
                    </a>
                    <a href="#" class="w-full sm:w-auto bg-transparent border-2 border-emerald-700 text-emerald-100 hover:bg-emerald-800/50 px-8 py-4 rounded-xl font-bold transition">
                        Unduh Brosur (PDF)
                    </a>
                </div>
            </div>
            <!-- Lingkaran Ornamen Latar -->
            <div class="absolute top-0 right-0 -mt-20 -mr-20 w-64 h-64 bg-emerald-800 rounded-full mix-blend-multiply filter blur-3xl opacity-50"></div>
            <div class="absolute bottom-0 left-0 -mb-20 -ml-20 w-72 h-72 bg-emerald-900 rounded-full mix-blend-multiply filter blur-3xl opacity-50"></div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-white border-t border-gray-100 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-6 md:px-12 grid grid-cols-1 md:grid-cols-3 gap-10 mb-12">
            <div>
                <h4 class="font-bold text-gray-900 mb-4">PPTQ Bustanul Wildan</h4>
                <p class="text-xs text-gray-500 leading-relaxed max-w-xs">
                    © 2026 PPTQ Bustanul Wildan. The Digital Sanctuary for Modern Learning. Mencetak generasi Qur'ani yang adaptif dengan teknologi.
                </p>
            </div>
            <div>
                <h4 class="font-bold text-gray-900 text-sm mb-4">Quick Links</h4>
                <ul class="space-y-2 text-xs text-gray-500">
                    <li><a href="#" class="hover:text-[#0B3B2C] transition">Vision & Mission</a></li>
                    <li><a href="#" class="hover:text-[#0B3B2C] transition">History</a></li>
                    <li><a href="#" class="hover:text-[#0B3B2C] transition">Admissions</a></li>
                    <li><a href="#" class="hover:text-[#0B3B2C] transition">Contact Us</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold text-gray-900 text-sm mb-4">Contact</h4>
                <p class="text-xs text-gray-500 leading-relaxed mb-4">
                    Jl. Raya Perum Asabri, Kp. Kutruk RT.005/RW.003, Jambe, Kab. Tangerang, Banten 15720.
                </p>
                <div class="flex gap-4 text-gray-400">
                    <!-- Ikon Sosial Media Placeholder -->
                    <svg class="w-5 h-5 hover:text-[#0B3B2C] cursor-pointer transition" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                    <svg class="w-5 h-5 hover:text-[#0B3B2C] cursor-pointer transition" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.045 3.242.08 4.55 1.39 4.63 4.63.033 1.266.045 1.646.045 4.85s-.012 3.584-.045 4.85c-.08 3.242-1.39 4.55-4.63 4.63-1.266.033-1.646.045-4.85.045s-3.584-.012-4.85-.045c-3.242-.08-4.55-1.39-4.63-4.63-.033-1.266-.045-1.646-.045-4.85s.012-3.584.045-4.85c.08-3.242 1.39-4.55 4.63-4.63 1.266-.033 1.646-.045 4.85-.045zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948s.014 3.667.072 4.947c.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072s3.667-.014 4.947-.072c4.358-.2 6.78-2.618 6.98-6.98.058-1.281.072-1.689.072-4.948s-.014-3.667-.072-4.947c-.2-4.358-2.618-6.78-6.98-6.98-1.281-.058-1.689-.072-4.948-.072zM12 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a3.999 3.999 0 110-7.998 3.999 3.999 0 010 7.998zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                </div>
            </div>
        </div>
    </footer>

    <!-- SCRIPT ANIMASI (Intersection Observer) -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Mengambil semua elemen yang memiliki kelas 'reveal'
            const reveals = document.querySelectorAll(".reveal");

            // Konfigurasi Intersection Observer
            const revealOptions = {
                threshold: 0.15, // Animasi terpicu saat 15% elemen terlihat di layar
                rootMargin: "0px 0px -50px 0px" // Sedikit margin bawah agar animasi tidak terlalu awal
            };

            const revealOnScroll = new IntersectionObserver(function(entries, observer) {
                entries.forEach(entry => {
                    if (!entry.isIntersecting) return;
                    
                    // Menambahkan kelas 'active' untuk memicu CSS transition
                    entry.target.classList.add("active");
                    
                    // Hentikan observasi pada elemen yang sudah dianimasikan
                    observer.unobserve(entry.target);
                });
            }, revealOptions);

            // Menerapkan observer ke setiap elemen
            reveals.forEach(reveal => {
                revealOnScroll.observe(reveal);
            });
        });
    </script>
</body>
</html>