<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Unggah Dokumen - PPTQ Bustanul Wildan</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 font-figtree min-h-screen flex flex-col">

    <!-- HEADER / NAVBAR -->
    <header class="bg-[#0B3B2C] text-white py-4 px-6 md:px-8 shadow-md z-30 relative">
        <div class="flex justify-between items-center max-w-[1440px] mx-auto">
            <div class="flex items-center gap-3">
                <div class="bg-amber-500 p-1.5 rounded-lg flex-shrink-0">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2L15 9H22L16.5 14L18.5 21L12 17L5.5 21L7.5 14L2 9H9L12 2Z"></path></svg>
                </div>
                <span class="font-bold text-base sm:text-lg tracking-wide truncate">PPTQ Bustanul Wildan</span>
            </div>

            <!-- Desktop Nav -->
            <nav class="hidden md:flex space-x-6 text-sm font-medium text-emerald-100">
                <a href="{{ route('dashboard') }}" class="hover:text-white transition">Dashboard</a>
                <a href="#" class="text-amber-400 border-b-2 border-amber-400 pb-1 font-bold">Pendaftaran</a>
                <a href="{{ route('profile.edit') }}" class="hover:text-white transition">Profil Saya</a>
            <a href="{{ route('wali.bantuan') }}" class="hover:text-white transition">Bantuan</a>
            </nav>

            <div class="flex items-center gap-4">
                <div class="hidden md:flex items-center gap-4">
                    <button class="text-emerald-100 hover:text-white"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg></button>
                    <div class="w-8 h-8 rounded-full bg-emerald-700 overflow-hidden border border-emerald-500">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=047857&color=fff" alt="Profile">
                    </div>
                </div>
                
                <!-- Mobile Menu Button (Burger) -->
                <button id="mobile-menu-btn" class="md:hidden text-white focus:outline-none">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu Overlay -->
        <div id="mobile-menu" class="hidden md:hidden absolute top-full left-0 right-0 bg-[#0B3B2C] border-t border-emerald-800 shadow-xl z-20">
            <div class="flex flex-col p-4 space-y-3 font-medium">
                <a href="{{ route('dashboard') }}" class="py-2 px-4 hover:bg-emerald-800 rounded-lg">Dashboard</a>
                
                <!-- Dropdown Pendaftaran di Mobile -->
                <div class="flex flex-col">
                    <button id="mobile-step-toggle" class="flex justify-between items-center py-2 px-4 bg-emerald-800 text-amber-400 rounded-lg font-bold">
                        Pendaftaran
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div id="mobile-steps-content" class="hidden bg-emerald-900/50 rounded-b-lg flex flex-col mt-1 overflow-hidden">
                        <a href="{{ route('pendaftaran.step1') }}" class="py-3 px-8 text-emerald-300 text-sm hover:text-white transition">1. Data Pribadi</a>
                        <a href="{{ route('pendaftaran.step2') }}" class="py-3 px-8 text-emerald-300 text-sm hover:text-white transition">2. Data Orang Tua</a>
                        <a href="#" class="py-3 px-8 text-white bg-emerald-700 text-sm border-l-4 border-amber-500">3. Riwayat Pendidikan</a>
                        <a href="#" class="py-3 px-8 text-emerald-300 text-sm opacity-60">4. Dokumen</a>
                        <a href="#" class="py-3 px-8 text-emerald-300 text-sm opacity-60">5. Finalisasi</a>
                    </div>
                </div>

                <a href="#" class="py-2 px-4 hover:bg-emerald-800 rounded-lg">Pembayaran</a>
                <a href="#" class="py-2 px-4 hover:bg-emerald-800 rounded-lg">Bantuan</a>
            </div>
        </div>
    </header>

    <!-- MOBILE DROPDOWN (Sidebar versi HP) -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-b border-gray-200 shadow-md relative z-20 w-full">
        <div class="p-5">
            <div class="flex items-center gap-3 mb-4 p-3 bg-emerald-50 rounded-xl border border-emerald-100">
                <div class="bg-[#0B3B2C] p-2 rounded-lg text-white">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                </div>
                <div>
                    <h3 class="font-bold text-[#0B3B2C] text-sm">Penerimaan 2026</h3>
                    <p class="text-[10px] text-gray-500 font-semibold uppercase">Langkah 4 dari 5</p>
                </div>
            </div>

            <div class="w-full bg-gray-200 h-1 rounded-full mb-5">
                <div class="bg-amber-500 h-1 rounded-full w-4/5"></div>
            </div>

            <nav class="space-y-1">
                <a href="{{ route('pendaftaran.step1') }}" class="flex items-center gap-3 px-4 py-2.5 text-emerald-700 hover:bg-emerald-50 rounded-xl font-bold transition border border-transparent text-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Data Pribadi
                </a>
                <a href="{{ route('pendaftaran.step2') }}" class="flex items-center gap-3 px-4 py-2.5 text-emerald-700 hover:bg-emerald-50 rounded-xl font-bold transition border border-transparent text-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Data Orang Tua
                </a>
                <a href="{{ route('pendaftaran.step3') }}" class="flex items-center gap-3 px-4 py-2.5 text-emerald-700 hover:bg-emerald-50 rounded-xl font-bold transition border border-transparent text-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Riwayat Pendidikan
                </a>
                
                <a href="#" class="flex items-center gap-3 px-4 py-2.5 bg-gray-50 text-[#0B3B2C] rounded-xl font-bold transition border border-gray-100 shadow-sm relative overflow-hidden text-sm">
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-[#0B3B2C]"></div>
                    <svg class="w-4 h-4 text-[#0B3B2C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg> Dokumen
                </a>
                
                <a href="#" class="flex items-center gap-3 px-4 py-2.5 text-gray-400 cursor-not-allowed rounded-xl font-medium transition text-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg> Finalisasi
                </a>
            </nav>
        </div>
    </div>

<!-- WRAPPER KONTEN UTAMA -->
    <div class="flex flex-1 overflow-hidden relative">
        
        <!-- SIDEBAR DEKSTOP -->
        <aside class="w-72 bg-white border-r border-gray-200 p-6 hidden md:block overflow-y-auto z-10 relative">
            <div class="flex items-center gap-3 mb-8 p-4 bg-emerald-50 rounded-xl border border-emerald-100">
                <div class="bg-[#0B3B2C] p-2 rounded-lg text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                </div>
                <div>
                    <h3 class="font-bold text-[#0B3B2C]">Penerimaan 2026</h3>
                    <p class="text-[10px] text-gray-500 font-semibold uppercase">Langkah 4 dari 5</p>
                </div>
            </div>

            <div class="w-full bg-gray-200 h-1 rounded-full mb-6">
                <div class="bg-amber-500 h-1 rounded-full w-4/5"></div>
            </div>

            <nav class="space-y-1">
                <a href="{{ route('pendaftaran.step1') }}" class="flex items-center gap-3 px-4 py-3 text-emerald-700 hover:bg-emerald-50 rounded-xl font-bold transition border border-transparent">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Data Pribadi
                </a>
                <a href="{{ route('pendaftaran.step2') }}" class="flex items-center gap-3 px-4 py-3 text-emerald-700 hover:bg-emerald-50 rounded-xl font-bold transition border border-transparent">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Data Orang Tua
                </a>
                <a href="{{ route('pendaftaran.step3') }}" class="flex items-center gap-3 px-4 py-3 text-emerald-700 hover:bg-emerald-50 rounded-xl font-bold transition border border-transparent">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Riwayat Pendidikan
                </a>
                
                <a href="#" class="flex items-center gap-3 px-4 py-3 bg-gray-50 text-[#0B3B2C] rounded-xl font-bold transition border border-gray-100 shadow-sm relative overflow-hidden">
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-[#0B3B2C]"></div>
                    <svg class="w-5 h-5 text-[#0B3B2C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg> Dokumen
                </a>
                
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-400 cursor-not-allowed rounded-xl font-medium transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg> Finalisasi
                </a>
            </nav>
        </aside>

        <!-- KONTEN UTAMA FORM -->
        <main class="flex-1 overflow-y-auto p-6 md:p-10 relative z-10">
            <div class="max-w-4xl mx-auto">
                
                <div class="mb-8">
                    <p class="text-xs font-bold text-emerald-700 tracking-widest uppercase mb-1">BERKAS PERSYARATAN</p>
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Unggah Dokumen Pendukung</h1>
                    <p class="text-gray-500 max-w-2xl text-sm leading-relaxed">
                        Silakan unggah dokumen persyaratan dalam format PDF atau Gambar (JPG/PNG) dengan ukuran maksimal 2MB per file.
                    </p>
                </div>

                <form action="{{ route('pendaftaran.step4.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">

                        <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100 flex flex-col justify-between hover:shadow-md transition">
                            <div>
                                <div class="flex items-center gap-3 mb-4 border-b border-gray-100 pb-4">
                                    <div class="p-2.5 bg-blue-50 text-blue-600 rounded-xl">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path></svg>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-gray-900">Kartu Keluarga (KK)</h3>
                                        <p class="text-[10px] text-gray-500">Scan dokumen asli. Maks 2MB.</p>
                                    </div>
                                </div>

                                @if(isset($berkas_terunggah['kartu_keluarga']))
                                    <div class="mb-4 p-3 bg-emerald-50 border border-emerald-200 rounded-xl flex justify-between items-center">
                                        <div class="flex items-center gap-2 text-emerald-700">
                                            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                            <div>
                                                <p class="text-xs font-bold">Dokumen Tersimpan</p>
                                                <p class="text-[9px] opacity-80">Tidak perlu unggah lagi jika tak ada revisi.</p>
                                            </div>
                                        </div>
                                        <a href="{{ asset('storage/' . $berkas_terunggah['kartu_keluarga']) }}" target="_blank" class="px-3 py-1.5 bg-emerald-600 hover:bg-emerald-700 text-white text-[10px] font-bold rounded-lg transition whitespace-nowrap">Lihat File</a>
                                    </div>
                                @endif
                            </div>

                            <div class="mt-2">
                                <label class="block text-xs font-bold text-gray-700 mb-2">{{ isset($berkas_terunggah['kartu_keluarga']) ? 'Perbarui File (Opsional)' : 'Pilih File Dokumen' }}</label>
                                <input type="file" name="kartu_keluarga" accept=".pdf, .jpg, .jpeg, .png" class="w-full text-sm text-gray-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-gray-100 file:text-gray-700 hover:file:bg-gray-200 transition cursor-pointer">
                                @error('kartu_keluarga') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100 flex flex-col justify-between hover:shadow-md transition">
                            <div>
                                <div class="flex items-center gap-3 mb-4 border-b border-gray-100 pb-4">
                                    <div class="p-2.5 bg-rose-50 text-rose-600 rounded-xl">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-gray-900">Akta Kelahiran</h3>
                                        <p class="text-[10px] text-gray-500">Scan dokumen asli. Maks 2MB.</p>
                                    </div>
                                </div>

                                @if(isset($berkas_terunggah['akta_kelahiran']))
                                    <div class="mb-4 p-3 bg-emerald-50 border border-emerald-200 rounded-xl flex justify-between items-center">
                                        <div class="flex items-center gap-2 text-emerald-700">
                                            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                            <div>
                                                <p class="text-xs font-bold">Dokumen Tersimpan</p>
                                                <p class="text-[9px] opacity-80">Tidak perlu unggah lagi jika tak ada revisi.</p>
                                            </div>
                                        </div>
                                        <a href="{{ asset('storage/' . $berkas_terunggah['akta_kelahiran']) }}" target="_blank" class="px-3 py-1.5 bg-emerald-600 hover:bg-emerald-700 text-white text-[10px] font-bold rounded-lg transition whitespace-nowrap">Lihat File</a>
                                    </div>
                                @endif
                            </div>

                            <div class="mt-2">
                                <label class="block text-xs font-bold text-gray-700 mb-2">{{ isset($berkas_terunggah['akta_kelahiran']) ? 'Perbarui File (Opsional)' : 'Pilih File Dokumen' }}</label>
                                <input type="file" name="akta_kelahiran" accept=".pdf, .jpg, .jpeg, .png" class="w-full text-sm text-gray-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-gray-100 file:text-gray-700 hover:file:bg-gray-200 transition cursor-pointer">
                                @error('akta_kelahiran') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100 flex flex-col justify-between hover:shadow-md transition">
                            <div>
                                <div class="flex items-center gap-3 mb-4 border-b border-gray-100 pb-4">
                                    <div class="p-2.5 bg-amber-50 text-amber-600 rounded-xl">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path></svg>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-gray-900">Ijazah / SKL</h3>
                                        <p class="text-[10px] text-gray-500">Ijazah terakhir atau Surat Keterangan Lulus.</p>
                                    </div>
                                </div>

                                @if(isset($berkas_terunggah['ijazah']))
                                    <div class="mb-4 p-3 bg-emerald-50 border border-emerald-200 rounded-xl flex justify-between items-center">
                                        <div class="flex items-center gap-2 text-emerald-700">
                                            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                            <div>
                                                <p class="text-xs font-bold">Dokumen Tersimpan</p>
                                                <p class="text-[9px] opacity-80">Tidak perlu unggah lagi jika tak ada revisi.</p>
                                            </div>
                                        </div>
                                        <a href="{{ asset('storage/' . $berkas_terunggah['ijazah']) }}" target="_blank" class="px-3 py-1.5 bg-emerald-600 hover:bg-emerald-700 text-white text-[10px] font-bold rounded-lg transition whitespace-nowrap">Lihat File</a>
                                    </div>
                                @endif
                            </div>

                            <div class="mt-2">
                                <label class="block text-xs font-bold text-gray-700 mb-2">{{ isset($berkas_terunggah['ijazah']) ? 'Perbarui File (Opsional)' : 'Pilih File Dokumen' }}</label>
                                <input type="file" name="ijazah" accept=".pdf, .jpg, .jpeg, .png" class="w-full text-sm text-gray-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-gray-100 file:text-gray-700 hover:file:bg-gray-200 transition cursor-pointer">
                                @error('ijazah') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100 flex flex-col justify-between hover:shadow-md transition">
                            <div>
                                <div class="flex items-center gap-3 mb-4 border-b border-gray-100 pb-4">
                                    <div class="p-2.5 bg-purple-50 text-purple-600 rounded-xl">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-gray-900">Pas Foto 3x4</h3>
                                        <p class="text-[10px] text-gray-500">Latar merah/biru. Format JPG/PNG.</p>
                                    </div>
                                </div>

                                @if(isset($santri) && $santri->pas_foto)
                                    <div class="mb-4 p-3 bg-emerald-50 border border-emerald-200 rounded-xl flex justify-between items-center">
                                        <div class="flex items-center gap-2 text-emerald-700">
                                            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                            <div>
                                                <p class="text-xs font-bold">Telah diunggah di Step 1</p>
                                                <p class="text-[9px] opacity-80">Anda bisa menggantinya jika perlu.</p>
                                            </div>
                                        </div>
                                        <a href="{{ asset('storage/' . $santri->pas_foto) }}" target="_blank" class="px-3 py-1.5 bg-emerald-600 hover:bg-emerald-700 text-white text-[10px] font-bold rounded-lg transition whitespace-nowrap">Lihat Foto</a>
                                    </div>
                                @endif
                            </div>

                            <div class="mt-2">
                                <label class="block text-xs font-bold text-gray-700 mb-2">Unggah Foto Baru (Opsional)</label>
                                <input type="file" name="pas_foto" accept=".jpg, .jpeg, .png" class="w-full text-sm text-gray-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-gray-100 file:text-gray-700 hover:file:bg-gray-200 transition cursor-pointer">
                                @error('pas_foto') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                        </div>

                    </div>

                    <div class="flex flex-col sm:flex-row justify-between items-center gap-4 pt-6 border-t border-gray-200">
                        <a href="{{ route('pendaftaran.step3') }}" class="text-gray-500 hover:text-gray-800 font-bold text-sm flex items-center justify-center gap-2 bg-white border border-gray-200 px-6 py-3.5 rounded-xl shadow-sm transition w-full sm:w-auto">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                            Kembali ke Step 3
                        </a>
                        
                        <button type="submit" class="bg-[#0B3B2C] text-white px-8 py-3.5 rounded-xl font-bold text-sm hover:bg-[#082a20] transition shadow-md flex items-center justify-center gap-2 w-full sm:w-auto">
                            Selanjutnya: Finalisasi Pendaftaran
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </button>
                    </div>
                </form>

            </div>
        </main>
    </div>

 <!-- SCRIPT TOGGLE MENU MOBILE -->
    <script>
        // Toggle Navigasi Utama (Burger Menu)
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            if (mobileMenu.classList.contains('hidden')) {
                menuIcon.setAttribute('d', 'M4 6h16M4 12h16m-7 6h7');
            } else {
                menuIcon.setAttribute('d', 'M6 18L18 6M6 6l12 12');
            }
        });

        // Toggle Dropdown Step Pendaftaran di Mobile
        const stepToggle = document.getElementById('mobile-step-toggle');
        const stepsContent = document.getElementById('mobile-steps-content');

        stepToggle.addEventListener('click', () => {
            stepsContent.classList.toggle('hidden');
        });
    </script>

</body>
</html>