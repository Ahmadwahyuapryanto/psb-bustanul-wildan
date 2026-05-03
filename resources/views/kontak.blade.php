<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontak Kami - PPTQ Bustanul Wildan</title>
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

    <!-- NAVBAR -->
    <nav class="bg-emerald-900 text-white py-4 px-6 md:px-12 flex justify-between items-center">
        <div class="font-bold text-xl tracking-wider">Bustanul Wildan</div>
        <div class="hidden md:flex space-x-6 text-sm font-medium">
            <a href="{{ route('welcome') }}" class="hover:text-amber-400 transition">Pendaftaran</a>
            <a href="{{ route('panduan') }}" class="hover:text-amber-400 transition">Panduan</a>
            <a href="{{ route('tentang') }}" class="hover:text-amber-400 transition">Tentang Kami</a>
            <!-- Indikator aktif di menu Kontak -->
            <a href="{{ route('kontak') }}" class="text-amber-500 border-b-2 border-amber-500 pb-1 transition">Kontak</a>
        </div>
        <div class="flex items-center space-x-4">
            <a href="{{ route('login') }}" class="text-sm font-semibold hover:text-amber-400">Login</a>
            <a href="{{ route('register') }}" class="bg-amber-600 hover:bg-amber-700 text-white px-5 py-2 rounded-md text-sm font-semibold transition shadow-md">Daftar Sekarang</a>
        </div>
    </nav>
<!-- HEADER SECTION -->
    <section class="max-w-7xl mx-auto px-6 md:px-12 pt-16 pb-12 flex flex-col md:flex-row justify-between items-start md:items-center gap-6 reveal">
        <div>
            <p class="text-[#8C6B14] font-bold text-xs tracking-widest uppercase mb-3">REACH OUT TO US</p>
            <h1 class="text-4xl md:text-5xl font-extrabold text-[#0B3B2C] mb-4">Hubungi Kami</h1>
            <p class="text-gray-500 max-w-lg text-sm leading-relaxed">
                Kami siap membantu menjawab pertanyaan Anda seputar program tahfidz, pendaftaran santri baru, dan kurikulum pendidikan kami.
            </p>
        </div>
        <button class="w-10 h-10 rounded-full bg-white border border-gray-200 flex items-center justify-center hover:bg-gray-50 transition shadow-sm flex-shrink-0" title="Bagikan">
            <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg>
        </button>
    </section>

    <!-- MAIN GRID SECTION -->
    <section class="max-w-7xl mx-auto px-6 md:px-12 pb-20 grid grid-cols-1 lg:grid-cols-12 gap-8 md:gap-12">
        
        <!-- KOLOM KIRI: INFO & MAPS -->
        <div class="lg:col-span-5 flex flex-col gap-8 reveal" style="transition-delay: 100ms;">
            
            <div class="flex flex-col gap-6">
                <!-- Info 1: Alamat -->
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-[#0B3B2C] text-white flex items-center justify-center flex-shrink-0 shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 mb-1">Alamat Utama</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Kutruk, Kec. Jambe,<br> Kabupaten Tangerang, Banten 15720<br>Indonesia</p>
                    </div>
                </div>

                <!-- Info 2: WhatsApp -->
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-amber-400 text-white flex items-center justify-center flex-shrink-0 shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 mb-1">WhatsApp</h3>
                        <p class="text-sm text-gray-500 leading-relaxed mb-1">+62 812 3456 7890</p>
                        <p class="text-[10px] font-bold text-amber-600">Hanya melayani pesan teks (08:00 - 16:00)</p>
                    </div>
                </div>

                <!-- Info 3: Email -->
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-gray-200 text-gray-600 flex items-center justify-center flex-shrink-0 shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 mb-1">Email Resmi</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">info@bustanulwildan.id<br>pendaftaran@bustanulwildan.id</p>
                    </div>
                </div>
            </div>

            <!-- Peta -->
            <div class="relative w-full h-64 md:h-72 rounded-3xl overflow-hidden shadow-md group">
                <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?q=80&w=800&auto=format&fit=crop" alt="Peta Lokasi" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                
                <div class="absolute bottom-4 left-4 right-4">
                    <!-- TAUTAN GOOGLE MAPS YANG SUDAH DIPERBARUI -->
                    <a href="https://maps.app.goo.gl/aBbL9nZQt5qZyU6E6" target="_blank" class="flex items-center justify-between bg-white/90 backdrop-blur-sm text-gray-800 px-4 py-3 rounded-xl text-sm font-bold hover:bg-white transition shadow-sm">
                        <span>Lihat di Google Maps</span>
                        <svg class="w-4 h-4 text-[#8C6B14]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- KOLOM KANAN: FORMULIR & SOSIAL -->
        <div class="lg:col-span-7 flex flex-col gap-6 reveal" style="transition-delay: 200ms;">
            
            <div class="bg-white rounded-3xl p-8 md:p-10 shadow-sm border border-gray-100 flex-1">
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Get in Touch</h2>
                <p class="text-gray-500 text-sm mb-8">Kirimkan pesan Anda secara langsung melalui formulir di bawah ini. Tim kami akan menghubungi Anda kembali dalam waktu 1x24 jam.</p>
                
                <form action="#" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-[10px] font-bold text-gray-700 mb-2 uppercase tracking-widest">Nama Lengkap</label>
                            <input type="text" name="nama" placeholder="Masukkan nama Anda" required 
                                class="w-full px-4 py-3.5 bg-gray-100 border-none rounded-xl focus:bg-white focus:ring-2 focus:ring-emerald-500 transition text-sm">
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-gray-700 mb-2 uppercase tracking-widest">Alamat Email</label>
                            <input type="email" name="email" placeholder="nama@email.com" required 
                                class="w-full px-4 py-3.5 bg-gray-100 border-none rounded-xl focus:bg-white focus:ring-2 focus:ring-emerald-500 transition text-sm">
                        </div>
                    </div>

                    <div>
                        <label class="block text-[10px] font-bold text-gray-700 mb-2 uppercase tracking-widest">Subjek Pertanyaan</label>
                        <select name="subjek" required class="w-full px-4 py-3.5 bg-gray-100 border-none rounded-xl focus:bg-white focus:ring-2 focus:ring-emerald-500 transition text-sm text-gray-700 appearance-none">
                            <option value="">Informasi Pendaftaran Santri Baru</option>
                            <option value="Biaya">Informasi Biaya Pendidikan</option>
                            <option value="Fasilitas">Pertanyaan Fasilitas</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-[10px] font-bold text-gray-700 mb-2 uppercase tracking-widest">Pesan Anda</label>
                        <textarea name="pesan" rows="4" placeholder="Bagaimana kami dapat membantu Anda?" required 
                            class="w-full px-4 py-3.5 bg-gray-100 border-none rounded-xl focus:bg-white focus:ring-2 focus:ring-emerald-500 transition text-sm resize-none"></textarea>
                    </div>

                    <button type="submit" class="bg-[#0B3B2C] hover:bg-[#082a20] text-white px-8 py-3.5 rounded-xl font-bold transition shadow-md flex items-center justify-center gap-2 text-sm w-fit">
                        <span>Kirim Pesan</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </button>
                </form>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <a href="#" class="bg-gray-100 hover:bg-gray-200 rounded-2xl py-6 flex flex-col items-center justify-center gap-3 transition">
                    <svg class="w-6 h-6 text-gray-700" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.045 3.242.08 4.55 1.39 4.63 4.63.033 1.266.045 1.646.045 4.85s-.012 3.584-.045 4.85c-.08 3.242-1.39 4.55-4.63 4.63-1.266.033-1.646.045-4.85.045s-3.584-.012-4.85-.045c-3.242-.08-4.55-1.39-4.63-4.63-.033-1.266-.045-1.646-.045-4.85s.012-3.584.045-4.85c.08-3.242 1.39-4.55 4.63-4.63 1.266-.033 1.646-.045 4.85-.045zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948s.014 3.667.072 4.947c.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072s3.667-.014 4.947-.072c4.358-.2 6.78-2.618 6.98-6.98-1.281-.058-1.689-.072-4.948-.072zM12 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a3.999 3.999 0 110-7.998 3.999 3.999 0 010 7.998zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    <span class="text-[10px] font-bold text-gray-700 tracking-widest uppercase">Instagram</span>
                </a>
                <a href="#" class="bg-gray-100 hover:bg-gray-200 rounded-2xl py-6 flex flex-col items-center justify-center gap-3 transition">
                    <svg class="w-6 h-6 text-gray-700" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    <span class="text-[10px] font-bold text-gray-700 tracking-widest uppercase">YouTube</span>
                </a>
                <a href="#" class="bg-gray-100 hover:bg-gray-200 rounded-2xl py-6 flex flex-col items-center justify-center gap-3 transition">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"></path></svg>
                    <span class="text-[10px] font-bold text-gray-700 tracking-widest uppercase">Facebook</span>
                </a>
                <a href="#" class="bg-gray-100 hover:bg-gray-200 rounded-2xl py-6 flex flex-col items-center justify-center gap-3 transition">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                    <span class="text-[10px] font-bold text-gray-700 tracking-widest uppercase">Website</span>
                </a>
            </div>
        </div>
    </section>

    <!-- BANNER BERLANGGANAN (NEWSLETTER) -->
    <section class="max-w-7xl mx-auto px-6 md:px-12 pb-24 reveal" style="transition-delay: 300ms;">
        <div class="bg-[#0B3B2C] rounded-3xl p-10 md:p-16 text-center shadow-lg">
            <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">Ingin Bergabung Bersama Kami?</h2>
            <p class="text-emerald-100/80 mb-8 max-w-lg mx-auto text-sm leading-relaxed">
                Dapatkan update terbaru mengenai jadwal pendaftaran dan kegiatan pesantren langsung melalui email Anda.
            </p>
            
            <form action="#" method="POST" class="flex flex-col sm:flex-row justify-center max-w-lg mx-auto gap-3">
                @csrf
                <input type="email" name="subscribe" placeholder="Alamat email Anda" required 
                    class="w-full sm:w-2/3 px-6 py-3.5 bg-emerald-800/50 border border-emerald-700 text-white placeholder-emerald-300/50 rounded-xl focus:outline-none focus:ring-2 focus:ring-amber-500 transition text-sm">
                <button type="submit" class="w-full sm:w-1/3 bg-[#8C6B14] hover:bg-[#73570f] text-white px-6 py-3.5 rounded-xl font-bold transition text-sm">
                    Berlangganan
                </button>
            </form>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-gray-50 border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-6 md:px-12 py-12 flex flex-col md:flex-row justify-between items-start gap-8">
            <div class="md:w-1/3">
                <div class="font-bold text-gray-900 text-lg mb-2">PPTQ Bustanul Wildan</div>
                <div class="text-xs text-gray-500 leading-relaxed max-w-xs">© 2026 PPTQ Bustanul Wildan. The Digital Sanctuary for Modern Learning.</div>
            </div>
            
            <div class="flex gap-16">
                <div>
                    <h4 class="font-bold text-gray-900 text-[10px] uppercase tracking-widest mb-4">Navigation</h4>
                    <div class="flex flex-col space-y-3 text-xs text-gray-500">
                        <a href="{{ route('tentang') }}" class="hover:text-gray-900 transition">Vision & Mission</a>
                        <a href="#" class="hover:text-gray-900 transition">History</a>
                        <a href="#" class="hover:text-gray-900 transition">Admissions</a>
                        <a href="{{ route('kontak') }}" class="text-[#8C6B14] font-semibold">Contact Us</a>
                    </div>
                </div>
                <div>
                    <h4 class="font-bold text-gray-900 text-[10px] uppercase tracking-widest mb-4">Resources</h4>
                    <div class="flex flex-col space-y-3 text-xs text-gray-500">
                        <a href="{{ route('login') }}" class="hover:text-gray-900 transition">Santri Portal</a>
                        <a href="{{ route('dashboard') }}" class="hover:text-gray-900 transition">Parent Dashboard</a>
                        <a href="#" class="hover:text-gray-900 transition">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- SCRIPT ANIMASI (Intersection Observer) -->
    <script>
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