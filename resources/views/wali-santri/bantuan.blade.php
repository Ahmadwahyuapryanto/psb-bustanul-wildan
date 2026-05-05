<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pusat Bantuan - PPTQ Bustanul Wildan</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F8FAFC] text-gray-800 font-figtree flex h-screen overflow-hidden">

    <!-- SIDEBAR (Sama dengan Dashboard) -->
    <aside class="w-64 bg-white border-r border-gray-200 flex flex-col justify-between flex-shrink-0 h-full z-20">
        <div>
            <div class="px-8 py-8">
                <h1 class="text-xl font-bold text-[#0B3B2C]">Bustanul Wildan</h1>
                <p class="text-[10px] font-semibold text-gray-400 tracking-widest mt-1 uppercase">Tahun Akademik 2025/2026</p>
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
                <!-- Link Profil (Baru) -->
                <a href="{{ route('profile.edit') }}" class="flex items-center gap-3 px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-[#0B3B2C] rounded-xl text-sm font-semibold transition">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    Profil Saya
                </a>
                <!-- Link Bantuan (Aktif) -->
                <a href="#" class="flex items-center gap-3 px-4 py-3 bg-[#0B3B2C] text-white rounded-xl text-sm font-semibold transition shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    Bantuan
                </a>
            </nav>
        </div>

        <div class="px-6 pb-8">
            <div class="bg-gray-50 border border-gray-200 rounded-2xl p-4 mb-6">
                <div class="flex justify-between items-center mb-2">
                    <p class="text-xs font-bold text-gray-700">{{ ($statusInfo['progress'] ?? 0) == 100 ? 'Profil Lengkap' : 'Profil Belum Lengkap' }}</p>
                    <p class="text-[10px] font-bold text-gray-500">{{ round($statusInfo['progress'] ?? 0) }}%</p>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-1.5 mb-4">
                    <div class="bg-[#0B3B2C] h-1.5 rounded-full transition-all duration-1000" style="width: {{ $statusInfo['progress'] ?? 0 }}%"></div>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-[#0B3B2C] text-white flex items-center justify-center font-bold text-lg">
                    {{ substr(Auth::user()->name ?? 'U', 0, 1) }}
                </div>
                <div class="flex-1">
                    <p class="text-sm font-bold text-gray-900 leading-none mb-1">{{ explode(' ', Auth::user()->name ?? 'User')[0] }}</p>
                    <p class="text-[10px] text-gray-500">Akun Wali</p>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-gray-400 hover:text-red-500 transition" title="Keluar">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                    </button>
                </form>
            </div>
        </div>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-1 overflow-y-auto">
        <div class="p-8 md:p-12 max-w-5xl mx-auto h-full flex flex-col relative">
            
            <div class="mb-10">
                <p class="text-xs font-bold text-amber-600 tracking-widest uppercase mb-2">Pusat Informasi</p>
                <h2 class="text-4xl font-bold text-gray-900 mb-3">Bantuan & FAQ</h2>
                <p class="text-gray-500 text-sm max-w-xl leading-relaxed">
                    Temukan jawaban atas pertanyaan yang sering diajukan seputar pendaftaran santri baru atau hubungi tim layanan kami.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8 flex-1">
                <!-- FAQ Section -->
                <div class="md:col-span-2 space-y-4">
                    <!-- FAQ 1 -->
                    <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm">
                        <h4 class="font-bold text-[#0B3B2C] text-lg mb-2">Bagaimana cara melihat hasil seleksi?</h4>
                        <p class="text-sm text-gray-600 leading-relaxed">Anda dapat memantau status kelulusan secara langsung melalui menu Dashboard. Selain itu, kami juga akan mengirimkan pemberitahuan otomatis ke nomor WhatsApp yang telah Anda daftarkan.</p>
                    </div>
                    <!-- FAQ 2 -->
                    <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm">
                        <h4 class="font-bold text-[#0B3B2C] text-lg mb-2">Apa saja berkas yang harus disiapkan?</h4>
                        <p class="text-sm text-gray-600 leading-relaxed">Siapkan Kartu Keluarga (KK), Akta Kelahiran, Surat Keterangan Sehat, dan pas foto terbaru. Berkas fisik wajib dibawa pada saat jadwal tes/wawancara berlangsung.</p>
                    </div>
                    <!-- FAQ 3 -->
                    <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm">
                        <h4 class="font-bold text-[#0B3B2C] text-lg mb-2">Apakah jadwal wawancara bisa diubah?</h4>
                        <p class="text-sm text-gray-600 leading-relaxed">Jadwal yang telah ditentukan oleh panitia bersifat tetap. Jika ada kendala mendesak (udzur syar'i), mohon segera menghubungi admin melalui kontak di samping selambatnya H-1 sebelum jadwal tes.</p>
                    </div>
                </div>

                <!-- Contact Support Section -->
                <div class="md:col-span-1">
                    <div class="bg-[#0B3B2C] rounded-3xl p-8 text-white shadow-md sticky top-0">
                        <h3 class="text-xl font-bold mb-2">Hubungi Admin</h3>
                        <p class="text-xs text-emerald-100/80 mb-8 leading-relaxed">Tim panitia kami siap membantu Anda setiap Senin-Jumat pukul 08:00 - 15:00 WIB.</p>
                        
                        <div class="space-y-4">
                            <a href="#" class="w-full bg-[#8C6B14] hover:bg-amber-600 text-white px-4 py-3.5 rounded-xl font-bold transition shadow-lg text-sm flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                                WhatsApp
                            </a>
                            <a href="#" class="w-full bg-white/10 hover:bg-white/20 border border-white/20 text-white px-4 py-3.5 rounded-xl font-bold transition text-sm flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                Email Panitia
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="mt-auto pt-6 border-t border-gray-200 flex flex-col md:flex-row justify-between items-center text-xs text-gray-500">
                <p>© 2026 PPTQ Bustanul Wildan. Dibuat untuk Kesempurnaan.</p>
                <div class="flex gap-4 mt-2 md:mt-0">
                    <a href="#" class="hover:text-gray-900 transition">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-gray-900 transition">Syarat Layanan</a>
                </div>
            </footer>
        </div>
    </main>

</body>
</html>