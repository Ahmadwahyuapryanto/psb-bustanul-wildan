<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Santri - PPTQ Bustanul Wildan</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 font-figtree min-h-screen flex flex-col">

    <header class="bg-[#0B3B2C] text-white py-4 px-6 md:px-8 shadow-md z-30 relative">
    <div class="flex justify-between items-center max-w-[1440px] mx-auto">
        <div class="flex items-center gap-3">
            <div class="bg-amber-500 p-1.5 rounded-lg">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2L15 9H22L16.5 14L18.5 21L12 17L5.5 21L7.5 14L2 9H9L12 2Z"></path></svg>
            </div>
            <span class="font-bold text-lg tracking-wide">PPTQ Bustanul Wildan</span>
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
                    <!-- Isian Sidebar pindah ke sini saat mobile -->
                    <a href="#" class="py-3 px-8 text-white bg-emerald-700 text-sm border-l-4 border-amber-500">1. Data Pribadi</a>
                    <a href="#" class="py-3 px-8 text-emerald-300 text-sm opacity-60">2. Data Orang Tua</a>
                    <a href="#" class="py-3 px-8 text-emerald-300 text-sm opacity-60">3. Riwayat Pendidikan</a>
                    <a href="#" class="py-3 px-8 text-emerald-300 text-sm opacity-60">4. Dokumen</a>
                    <a href="#" class="py-3 px-8 text-emerald-300 text-sm opacity-60">5. Finalisasi</a>
                </div>
            </div>

            <a href="{{ route('profile.edit') }}" class="py-2 px-4 hover:bg-emerald-800 rounded-lg">Profil saya</a>
            <a href="{{ route('wali.bantuan') }}" class="py-2 px-4 hover:bg-emerald-800 rounded-lg">Bantuan</a>
        </div>
    </div>
</header>

    <div class="flex flex-1 overflow-hidden relative">
        <aside class="w-72 bg-white border-r border-gray-200 p-6 hidden md:block overflow-y-auto">
            <div class="flex items-center gap-3 mb-8 p-4 bg-emerald-50 rounded-xl border border-emerald-100">
                <div class="bg-[#0B3B2C] p-2 rounded-lg text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m3-4h1m-1 4h1m-5 8h8"></path></svg>
                </div>
                <div>
                    <h3 class="font-bold text-[#0B3B2C]">Penerimaan 2026</h3>
                    <p class="text-[10px] text-gray-500 font-semibold uppercase">Langkah 1 dari 5</p>
                </div>
            </div>

            <div class="w-full bg-gray-200 h-1 rounded-full mb-6">
                <div class="bg-amber-500 h-1 rounded-full w-1/5"></div>
            </div>

            <nav class="space-y-1">
                <a href="#" class="flex items-center gap-3 px-4 py-3 bg-gray-50 text-[#0B3B2C] rounded-xl font-bold transition border border-gray-100 shadow-sm relative overflow-hidden">
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-[#0B3B2C]"></div>
                    <svg class="w-5 h-5 text-[#0B3B2C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    Data Pribadi
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:bg-gray-50 hover:text-gray-700 rounded-xl font-medium transition cursor-not-allowed">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    Data Orang Tua
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:bg-gray-50 hover:text-gray-700 rounded-xl font-medium transition cursor-not-allowed">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path></svg>
                    Riwayat Pendidikan
                </a>
                <a href="{{ route('pendaftaran.step4') }}" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:bg-gray-50 hover:text-gray-700 rounded-xl font-medium transition cursor-not-allowed">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    Dokumen
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:bg-gray-50 hover:text-gray-700 rounded-xl font-medium transition cursor-not-allowed">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                    Finalisasi
                </a>
            </nav>

            <div class="mt-8">
                <button type="button" class="w-full bg-[#0B3B2C] text-white px-4 py-3 rounded-xl font-bold text-sm hover:bg-[#082a20] transition shadow-md flex justify-center items-center gap-2 opacity-50 cursor-not-allowed">
                    Kirim Pendaftaran
                </button>
            </div>
        </aside>

        <main class="flex-1 overflow-y-auto p-4 md:p-10">
            <div class="max-w-5xl mx-auto">
                
                <div class="mb-8">
                    <p class="text-xs font-bold text-emerald-700 tracking-widest uppercase mb-1">PROFIL SANTRI</p>
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Data Calon Santri</h1>
                    <p class="text-gray-500 max-w-2xl text-sm leading-relaxed">
                        Mohon berikan informasi pribadi yang akurat untuk calon santri. Data ini sangat penting untuk registrasi pendaftaran dan pemetaan bimbingan spiritual kami.
                    </p>
                </div>

                <form action="{{ route('pendaftaran.step1.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                        
                        <div class="lg:col-span-2 space-y-8">
                            
                            <div class="bg-white rounded-3xl p-6 md:p-8 shadow-sm border border-gray-100">
                                <div class="flex items-center gap-2 mb-6 border-b border-gray-100 pb-4">
                                    <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path></svg>
                                    <h2 class="text-lg font-bold text-gray-900">Informasi Identitas</h2>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                                    <div>
                                        <label class="block text-xs font-bold text-gray-700 mb-2">Nama Lengkap Sesuai Ijazah</label>
                                        <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap', $santri->nama_lengkap ?? '') }}" placeholder="Masukkan nama lengkap" required class="w-full px-4 py-3 bg-gray-100 border-transparent rounded-xl focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm">
                                        @error('nama_lengkap') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-gray-700 mb-2">Nomor Induk Kependudukan (NIK)</label>
                                        <input type="number" name="nik" value="{{ old('nik', $santri->nik ?? '') }}" placeholder="16 digit NIK" required class="w-full px-4 py-3 bg-gray-100 border-transparent rounded-xl focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm">
                                        @error('nik') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-6">
                                    <div>
                                        <label class="block text-xs font-bold text-gray-700 mb-2">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir', $santri->tempat_lahir ?? '') }}" placeholder="Contoh: Bandung" required class="w-full px-4 py-3 bg-gray-100 border-transparent rounded-xl focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-gray-700 mb-2">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $santri->tanggal_lahir ?? '') }}" required class="w-full px-4 py-3 bg-gray-100 border-transparent rounded-xl focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm text-gray-600">
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-xs font-bold text-gray-700 mb-3">Jenis Kelamin</label>
                                    <div class="grid grid-cols-2 gap-4">
                                        <label class="relative cursor-pointer">
                                            <input type="radio" name="jenis_kelamin" value="L" {{ (old('jenis_kelamin', $santri->jenis_kelamin ?? '') == 'L') ? 'checked' : '' }} class="peer sr-only" required>
                                            <div class="w-full px-4 py-3 bg-gray-100 rounded-xl text-center text-sm font-semibold text-gray-500 peer-checked:bg-[#A7F3D0] peer-checked:text-emerald-800 peer-checked:border-emerald-300 border border-transparent transition flex justify-center items-center gap-2">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                                Laki-laki
                                            </div>
                                        </label>
                                        <label class="relative cursor-pointer">
                                            <input type="radio" name="jenis_kelamin" value="P" {{ (old('jenis_kelamin', $santri->jenis_kelamin ?? '') == 'P') ? 'checked' : '' }} class="peer sr-only" required>
                                            <div class="w-full px-4 py-3 bg-gray-100 rounded-xl text-center text-sm font-semibold text-gray-500 peer-checked:bg-[#A7F3D0] peer-checked:text-emerald-800 peer-checked:border-emerald-300 border border-transparent transition flex justify-center items-center gap-2">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                                Perempuan
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white rounded-3xl p-6 md:p-8 shadow-sm border border-gray-100">
                                <div class="flex items-center gap-2 mb-6 border-b border-gray-100 pb-4">
                                    <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    <h2 class="text-lg font-bold text-gray-900">Alamat & Kontak</h2>
                                </div>

                                <div class="mb-5">
                                    <label class="block text-xs font-bold text-gray-700 mb-2">Alamat Domisili Lengkap</label>
                                    <textarea name="alamat" rows="3" placeholder="Jl. Raya Utama No. 123..." required class="w-full px-4 py-3 bg-gray-100 border-transparent rounded-xl focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm">{{ old('alamat', $santri->alamat ?? '') }}</textarea>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                    <div>
                                        <label class="block text-xs font-bold text-gray-700 mb-2">Provinsi</label>
                                        <select name="provinsi" id="provinsi" required class="w-full px-4 py-3 bg-gray-100 border-transparent rounded-xl focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm text-gray-700 appearance-none">
                                            <option value="" disabled selected>Pilih Provinsi</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label class="block text-xs font-bold text-gray-700 mb-2">Kota/Kabupaten</label>
                                        <select name="kabupaten" id="kabupaten" required class="w-full px-4 py-3 bg-gray-100 border-transparent rounded-xl focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm text-gray-700 appearance-none">
                                            <option value="" disabled selected>Pilih Kota/Kab</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100 flex flex-col items-center justify-center text-center">
                                <div class="w-32 h-40 bg-gray-100 border-2 border-dashed border-gray-300 rounded-xl mb-4 flex items-center justify-center overflow-hidden relative group">
                                    
                                    <img id="photo-preview" src="{{ isset($santri) && $santri->pas_foto ? asset('storage/' . $santri->pas_foto) : '' }}" 
                                         alt="Pas Foto" class="w-full h-full object-cover {{ isset($santri) && $santri->pas_foto ? '' : 'hidden' }}">
                                    
                                    <svg id="photo-placeholder" class="w-8 h-8 text-gray-400 group-hover:text-emerald-500 transition {{ isset($santri) && $santri->pas_foto ? 'hidden' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    
                                    <input type="file" name="pas_foto" id="pas_foto" accept="image/jpeg, image/png, image/jpg" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                                </div>
                                <h3 class="font-bold text-gray-900 mb-1">Pas Foto 3x4</h3>
                                <p class="text-[10px] text-gray-400 mb-4">Maksimal 2MB, format JPG/PNG</p>
                                <button type="button" class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg text-xs font-bold transition pointer-events-none">
                                    Pilih File
                                </button>
                                @error('pas_foto') <span class="text-red-500 text-xs mt-2 block">{{ $message }}</span> @enderror
                            </div>

                            <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">
                                <h3 class="font-bold text-gray-900 mb-4 uppercase tracking-wider text-xs">Petunjuk</h3>
                                <ul class="space-y-4">
                                    <li class="flex gap-3 items-start">
                                        <div class="mt-0.5 bg-[#8C6B14] text-white rounded-full p-0.5">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        </div>
                                        <p class="text-xs text-gray-600 leading-relaxed">Pastikan NIK sesuai dengan Kartu Keluarga terbaru.</p>
                                    </li>
                                    <li class="flex gap-3 items-start">
                                        <div class="mt-0.5 bg-[#8C6B14] text-white rounded-full p-0.5">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        </div>
                                        <p class="text-xs text-gray-600 leading-relaxed">Gunakan huruf kapital untuk Nama Lengkap.</p>
                                    </li>
                                    <li class="flex gap-3 items-start">
                                        <div class="mt-0.5 bg-[#8C6B14] text-white rounded-full p-0.5">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        </div>
                                        <p class="text-xs text-gray-600 leading-relaxed">Siapkan file pas foto berlatar merah.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="mt-10 flex flex-col sm:flex-row justify-between items-center gap-4 pt-6 border-t border-gray-200">
                        <a href="{{ route('dashboard') }}" class="text-gray-500 hover:text-gray-800 font-bold text-sm flex items-center gap-2 bg-white border border-gray-200 px-6 py-3 rounded-xl shadow-sm transition w-full sm:w-auto justify-center">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                            Batal
                        </a>
                        
                        <div class="flex flex-col sm:flex-row items-center gap-4 w-full sm:w-auto">
                            <button type="button" class="text-gray-600 font-bold text-sm hover:text-emerald-700 transition w-full sm:w-auto">
                                Simpan Draf
                            </button>
                            <button type="submit" class="bg-[#0B3B2C] text-white px-6 py-3 rounded-xl font-bold text-sm hover:bg-[#082a20] transition shadow-md flex items-center gap-2 w-full sm:w-auto justify-center">
                                Selanjutnya: Data Orang Tua
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </main>
    </div>

<script>
    // 1. Script EMSIFA untuk Provinsi & Kabupaten
    const provinsiSelect = document.getElementById('provinsi');
    const kabupatenSelect = document.getElementById('kabupaten');

    const savedProvinsi = "{{ old('provinsi', $santri->provinsi ?? '') }}";
    const savedKabupaten = "{{ old('kabupaten', $santri->kabupaten ?? '') }}";

    fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json`)
        .then(response => response.json())
        .then(provinces => {
            provinces.forEach(provinsi => {
                let option = document.createElement('option');
                option.value = provinsi.name; 
                option.dataset.id = provinsi.id; 
                option.text = provinsi.name;
                
                if (savedProvinsi === provinsi.name) {
                    option.selected = true;
                }
                provinsiSelect.appendChild(option);
            });

            if (savedProvinsi) {
                provinsiSelect.dispatchEvent(new Event('change'));
            }
        });

    provinsiSelect.addEventListener('change', function() {
        const selectedOption = this.options[this.selectedIndex];
        const provinceId = selectedOption.dataset.id;
      
        // Toggle Navigasi Utama (Burger Menu)
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            // Ganti icon burger ke close (X) jika diinginkan
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

        kabupatenSelect.innerHTML = '<option value="" disabled selected>Memuat...</option>';

        if(!provinceId) return;

        fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${provinceId}.json`)
            .then(response => response.json())
            .then(regencies => {
                kabupatenSelect.innerHTML = '<option value="" disabled selected>Pilih Kota/Kab</option>';
                regencies.forEach(kab => {
                    let option = document.createElement('option');
                    option.value = kab.name;
                    option.text = kab.name;
                    
                    if (savedKabupaten === kab.name) {
                        option.selected = true;
                    }
                    kabupatenSelect.appendChild(option);
                });
            });
    });

    // 2. SCRIPT LIVE PREVIEW PAS FOTO
    document.getElementById('pas_foto').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            // Validasi ukuran (Maksimal 2MB)
            if(file.size > 2 * 1024 * 1024) {
                alert('Ukuran file maksimal 2MB!');
                this.value = ''; // Reset input
                return;
            }

            const reader = new FileReader();
            reader.onload = function(e) {
                const preview = document.getElementById('photo-preview');
                const placeholder = document.getElementById('photo-placeholder');
                
                // Ubah sumber gambar
                preview.src = e.target.result;
                preview.classList.remove('hidden'); // Munculkan gambar
                
                // Sembunyikan ikon SVG jika ada
                if(placeholder) {
                    placeholder.classList.add('hidden');
                }
            }
            reader.readAsDataURL(file);
        }
    });
</script>
</body>
</html>