<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Orang Tua - PPTQ Bustanul Wildan</title>
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
                        <a href="#" class="py-3 px-8 text-white bg-emerald-700 text-sm border-l-4 border-amber-500">2. Data Orang Tua</a>
                        <a href="#" class="py-3 px-8 text-emerald-300 text-sm opacity-60">3. Riwayat Pendidikan</a>
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
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <div>
                    <h3 class="font-bold text-[#0B3B2C] text-sm">Penerimaan 2026</h3>
                    <p class="text-[10px] text-gray-500 font-semibold uppercase">Langkah 2 dari 5</p>
                </div>
            </div>

            <div class="w-full bg-gray-200 h-1 rounded-full mb-5">
                <div class="bg-amber-500 h-1 rounded-full w-2/5"></div>
            </div>

            <nav class="space-y-1">
                <a href="{{ route('pendaftaran.step1') }}" class="flex items-center gap-3 px-4 py-2.5 text-emerald-700 hover:bg-emerald-50 rounded-xl font-bold transition border border-transparent text-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Data Pribadi
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-2.5 bg-gray-50 text-[#0B3B2C] rounded-xl font-bold transition border border-gray-100 shadow-sm relative overflow-hidden text-sm">
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-[#0B3B2C]"></div>
                    <svg class="w-4 h-4 text-[#0B3B2C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg> Data Orang Tua
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-2.5 text-gray-400 cursor-not-allowed rounded-xl font-medium transition text-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path></svg> Riwayat Pendidikan
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-2.5 text-gray-400 cursor-not-allowed rounded-xl font-medium transition text-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg> Dokumen
                </a>
            </nav>
        </div>
    </div>

    <!-- WRAPPER KONTEN UTAMA -->
    <div class="flex flex-1 overflow-hidden relative">
        
        <!-- SIDEBAR DEKSTOP -->
        <aside class="w-72 bg-white border-r border-gray-100 p-6 hidden md:block overflow-y-auto z-10 relative">
            <div class="flex items-center gap-3 mb-8 p-4 bg-emerald-50 rounded-xl border border-emerald-100">
                <div class="bg-[#0B3B2C] p-2 rounded-lg text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <div>
                    <h3 class="font-bold text-[#0B3B2C]">Penerimaan 2026</h3>
                    <p class="text-[10px] text-gray-500 font-semibold uppercase">Langkah 2 dari 5</p>
                </div>
            </div>

            <div class="w-full bg-gray-200 h-1 rounded-full mb-6">
                <div class="bg-amber-500 h-1 rounded-full w-2/5"></div>
            </div>

            <nav class="space-y-1">
                <a href="{{ route('pendaftaran.step1') }}" class="flex items-center gap-3 px-4 py-3 text-emerald-700 hover:bg-emerald-50 rounded-xl font-bold transition border border-transparent">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Data Pribadi
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 bg-gray-50 text-[#0B3B2C] rounded-xl font-bold transition border border-gray-100 shadow-sm relative overflow-hidden">
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-[#0B3B2C]"></div>
                    <svg class="w-5 h-5 text-[#0B3B2C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg> Data Orang Tua
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-400 cursor-not-allowed rounded-xl font-medium transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path></svg> Riwayat Pendidikan
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-400 cursor-not-allowed rounded-xl font-medium transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg> Dokumen
                </a>
            </nav>
        </aside>

        <!-- KONTEN UTAMA FORM -->
        <main class="flex-1 overflow-y-auto p-6 md:p-10 relative z-10">
            <div class="max-w-4xl mx-auto">
                
                <div class="mb-8">
                    <p class="text-xs font-bold text-emerald-700 tracking-widest uppercase mb-1">IDENTITAS WALI</p>
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Data Orang Tua / Wali</h1>
                    
                    @if(isset($ortu))
                        <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 rounded-2xl flex items-center gap-3 shadow-sm">
                            <div class="bg-emerald-500 p-1.5 rounded-full text-white flex-shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-emerald-900">Data Orang Tua Sudah Tersimpan</p>
                                <p class="text-xs text-emerald-700">Anda dapat memperbarui informasi di bawah ini jika terdapat perubahan.</p>
                            </div>
                        </div>
                    @endif
                </div>

                <form action="{{ route('pendaftaran.step2.store') }}" method="POST"  novalidate>
                    @csrf
                    
                    <div class="space-y-8">
                        <div class="bg-white rounded-3xl p-6 md:p-8 shadow-sm border border-gray-100">
                            <div class="flex items-center gap-2 mb-6 border-b border-gray-100 pb-4">
                                <div class="bg-blue-50 p-2 rounded-lg text-blue-600">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                </div>
                                <h2 class="text-lg font-bold text-gray-900">Informasi Ayah Kandung</h2>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                                <div>
                                    <label class="block text-xs font-bold text-gray-700 mb-2">Nama Lengkap Ayah</label>
                                    <input type="text" name="nama_ayah" value="{{ old('nama_ayah', $ortu->nama_ayah ?? '') }}" placeholder="Nama sesuai KTP" required class="w-full px-4 py-3 bg-gray-100 border-transparent rounded-xl focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-gray-700 mb-2">NIK Ayah</label>
                                    <input type="number" name="nik_ayah" value="{{ old('nik_ayah', $ortu->nik_ayah ?? '') }}" placeholder="16 digit NIK" required class="w-full px-4 py-3 bg-gray-100 border-transparent rounded-xl focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                                <div>
                                    <label class="block text-xs font-bold text-gray-700 mb-2">Pendidikan Terakhir</label>
                                    <select name="pendidikan_ayah" class="w-full px-4 py-3 bg-gray-100 border-transparent rounded-xl focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm">
                                        <option value="" disabled {{ !isset($ortu) ? 'selected' : '' }}>Pilih Pendidikan</option>
                                        @foreach(['SD', 'SMP', 'SMA/SMK', 'D3', 'S1', 'S2', 'S3'] as $p)
                                            <option value="{{ $p }}" {{ old('pendidikan_ayah', $ortu->pendidikan_ayah ?? '') == $p ? 'selected' : '' }}>{{ $p }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-gray-700 mb-2">Pekerjaan</label>
                                    <input type="text" name="pekerjaan_ayah" value="{{ old('pekerjaan_ayah', $ortu->pekerjaan_ayah ?? '') }}" placeholder="Contoh: Karyawan Swasta" required class="w-full px-4 py-3 bg-gray-100 border-transparent rounded-xl focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-gray-700 mb-2">Penghasilan /Bulan</label>
                                    <input type="text" name="penghasilan_ayah" value="{{ old('penghasilan_ayah', $ortu->penghasilan_ayah ?? '') }}" placeholder="Contoh: Rp. 3.000.000" required class="w-full px-4 py-3 bg-gray-100 border-transparent rounded-xl focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm">
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-3xl p-6 md:p-8 shadow-sm border border-gray-100">
                            <div class="flex items-center gap-2 mb-6 border-b border-gray-100 pb-4">
                                <div class="bg-rose-50 p-2 rounded-lg text-rose-600">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                </div>
                                <h2 class="text-lg font-bold text-gray-900">Informasi Ibu Kandung</h2>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                                <div>
                                    <label class="block text-xs font-bold text-gray-700 mb-2">Nama Lengkap Ibu</label>
                                    <input type="text" name="nama_ibu" value="{{ old('nama_ibu', $ortu->nama_ibu ?? '') }}" placeholder="Nama sesuai KTP" required class="w-full px-4 py-3 bg-gray-100 border-transparent rounded-xl focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-gray-700 mb-2">NIK Ibu</label>
                                    <input type="number" name="nik_ibu" value="{{ old('nik_ibu', $ortu->nik_ibu ?? '') }}" placeholder="16 digit NIK" required class="w-full px-4 py-3 bg-gray-100 border-transparent rounded-xl focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-5">
                                <div>
                                    <label class="block text-xs font-bold text-gray-700 mb-2">Pendidikan Terakhir</label>
                                    <select name="pendidikan_ibu" class="w-full px-4 py-3 bg-gray-100 border-transparent rounded-xl focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm">
                                        <option value="" disabled {{ !isset($ortu) ? 'selected' : '' }}>Pilih Pendidikan</option>
                                        @foreach(['SD', 'SMP', 'SMA/SMK', 'D3', 'S1', 'S2', 'S3'] as $p)
                                            <option value="{{ $p }}" {{ old('pendidikan_ibu', $ortu->pendidikan_ibu ?? '') == $p ? 'selected' : '' }}>{{ $p }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-gray-700 mb-2">Pekerjaan</label>
                                    <input type="text" name="pekerjaan_ibu" value="{{ old('pekerjaan_ibu', $ortu->pekerjaan_ibu ?? '') }}" placeholder="Contoh: Ibu Rumah Tangga" required class="w-full px-4 py-3 bg-gray-100 border-transparent rounded-xl focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-gray-700 mb-2">Penghasilan /Bulan</label>
                                    <input type="text" name="penghasilan_ibu" value="{{ old('penghasilan_ibu', $ortu->penghasilan_ibu ?? '') }}" placeholder="Contoh: Rp. 2.000.000" required class="w-full px-4 py-3 bg-gray-100 border-transparent rounded-xl focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm">
                                </div>
                            </div>
                        </div>

                        <div class="bg-amber-50 rounded-3xl p-6 md:p-8 border border-amber-100 shadow-sm">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="bg-amber-500 p-2 rounded-lg text-white">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.037 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                </div>
                                <h2 class="text-lg font-bold text-amber-900">Kontak WhatsApp Utama</h2>
                            </div>
                            <p class="text-xs text-amber-700 mb-5 leading-relaxed">Pihak madrasah akan mengirimkan notifikasi penting terkait seleksi melalui nomor WhatsApp ini.</p>
                            
                            <div class="max-w-md">
                                <label class="block text-xs font-bold text-amber-800 mb-2">Nomor WhatsApp Aktif</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-500 text-sm font-bold">+62</div>
                                    <input type="number" name="no_wa_darurat" value="{{ old('no_wa_darurat', $ortu->no_wa_darurat ?? '') }}" placeholder="8123456789" required class="w-full pl-14 pr-4 py-3 bg-white border-transparent rounded-xl focus:bg-white focus:border-amber-500 focus:ring-2 focus:ring-amber-200 transition text-sm">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 flex flex-col sm:flex-row justify-between items-center gap-4 pt-6 border-t border-gray-200 mb-10">
                        <a href="{{ route('pendaftaran.step1') }}" class="text-gray-500 hover:text-gray-800 font-bold text-sm flex items-center justify-center gap-2 bg-white border border-gray-200 px-6 py-3.5 rounded-xl shadow-sm transition w-full sm:w-auto">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                            Kembali
                        </a>
                        
                        <button type="submit" class="bg-[#0B3B2C] text-white px-8 py-3.5 rounded-xl font-bold text-sm hover:bg-[#082a20] transition shadow-md flex items-center justify-center gap-2 w-full sm:w-auto">
                            Selanjutnya: Riwayat Pendidikan
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