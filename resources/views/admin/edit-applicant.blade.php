<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Pendaftar - PPTQ Bustanul Wildan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F8FAFC] text-gray-800 font-figtree flex h-screen overflow-hidden">

    <aside class="w-64 bg-white border-r border-gray-100 hidden md:flex flex-col justify-between flex-shrink-0 h-full z-20">
        <div>
            <div class="px-8 py-6 flex items-center gap-3 mb-4">
                <div class="w-8 h-8 bg-[#0B3B2C] rounded-lg flex items-center justify-center text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path></svg>
                </div>
                <div>
                    <h1 class="text-sm font-bold text-gray-900 leading-tight">Madrasah Admin</h1>
                    <p class="text-[10px] font-semibold text-gray-400 uppercase tracking-widest">Admission 2026/27</p>
                </div>
            </div>

            <nav class="px-4 space-y-1">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-gray-900 rounded-xl text-sm font-medium transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path></svg> Statistics
                </a>
                <a href="{{ route('admin.applicants') }}" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-gray-900 rounded-xl text-sm font-medium transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg> Applicants
                </a>
                <a href="{{ route('admin.verification') }}" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-gray-900 rounded-xl text-sm font-medium transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> Verification
                </a>
                <a href="{{ route('admin.selection') }}" class="flex items-center gap-3 px-4 py-3 bg-gray-50 text-[#0B3B2C] rounded-xl text-sm font-bold transition border border-gray-100 shadow-sm relative overflow-hidden">
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-[#0B3B2C]"></div>
                    <svg class="w-5 h-5 text-[#0B3B2C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg> Selection
                </a>
                <a href="{{ route('admin.reports') }}" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-gray-900 rounded-xl text-sm font-medium transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10"></path></svg> Reports
                </a>
            </nav>
        </div>
        <div class="p-6">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full flex items-center gap-3 px-4 py-2 text-gray-400 hover:text-red-600 rounded-lg text-sm font-medium transition text-left">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg> Logout
                </button>
            </form>
        </div>
    </aside>

    <main class="flex-1 flex flex-col h-screen overflow-hidden bg-[#F4F9F7] relative">
        
        <header class="h-20 bg-white/80 backdrop-blur-md border-b border-gray-100 flex items-center px-4 md:px-8 justify-between flex-shrink-0 z-20 relative">
            <h2 class="text-xl font-bold text-[#0B3B2C] truncate">Edit Data Pendaftar</h2>
            
            <div class="flex items-center gap-4">
                <a href="{{ route('admin.selection') }}" class="text-sm font-bold text-gray-500 hover:text-gray-700 hidden sm:block">Batal & Kembali</a>
                
                <button id="mobile-menu-btn" class="md:hidden text-gray-600 focus:outline-none p-1">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                </button>
            </div>
        </header>

        <div id="mobile-menu" class="hidden md:hidden absolute top-20 left-0 right-0 bg-white border-b border-gray-200 shadow-xl z-50 overflow-y-auto max-h-[calc(100vh-5rem)]">
            <div class="p-4 bg-gray-50 border-b border-gray-100 flex items-center gap-3">
                <div class="w-10 h-10 bg-[#0B3B2C] rounded-lg flex items-center justify-center text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path></svg>
                </div>
                <div>
                    <h1 class="text-sm font-bold text-gray-900 leading-tight">Madrasah Admin</h1>
                    <p class="text-[10px] font-semibold text-gray-400 uppercase tracking-widest">Admission 2026/27</p>
                </div>
            </div>
            
            <nav class="p-4 space-y-1">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path></svg> Statistics
                </a>
                <a href="{{ route('admin.selection') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-bold bg-gray-100 text-[#0B3B2C] border border-gray-200">
                    <svg class="w-5 h-5 text-[#0B3B2C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg> Kembali ke Seleksi
                </a>
            </nav>
        </div>

        <div class="flex-1 overflow-y-auto p-4 md:p-8 relative">
            <div class="max-w-4xl mx-auto">
                <form action="{{ route('admin.applicants.update', $santri->id) }}" method="POST" novalidate class="space-y-6">
    @csrf
    @method('PUT')

    <div class="bg-white rounded-2xl md:rounded-3xl p-5 md:p-8 shadow-sm border border-gray-100">
        <h3 class="text-lg font-bold text-[#0B3B2C] mb-6 flex items-center gap-2">
            <span class="w-8 h-8 bg-emerald-100 text-emerald-700 rounded-full flex items-center justify-center text-xs flex-shrink-0">1</span>
            Data Pribadi Santri
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div><label class="block text-xs font-bold text-gray-500 uppercase mb-2">Nama Lengkap</label><input type="text" name="nama_lengkap" value="{{ old('nama_lengkap', $santri->nama_lengkap) }}" class="w-full px-4 py-3 bg-gray-50 border-gray-200 rounded-xl text-sm"></div>
            <div><label class="block text-xs font-bold text-gray-500 uppercase mb-2">NIK</label><input type="number" name="nik" value="{{ old('nik', $santri->nik) }}" class="w-full px-4 py-3 bg-gray-50 border-gray-200 rounded-xl text-sm"></div>
            <div><label class="block text-xs font-bold text-gray-500 uppercase mb-2">Tempat Lahir</label><input type="text" name="tempat_lahir" value="{{ old('tempat_lahir', $santri->tempat_lahir) }}" class="w-full px-4 py-3 bg-gray-50 border-gray-200 rounded-xl text-sm"></div>
            <div><label class="block text-xs font-bold text-gray-500 uppercase mb-2">Tanggal Lahir</label><input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $santri->tanggal_lahir) }}" class="w-full px-4 py-3 bg-gray-50 border-gray-200 rounded-xl text-sm"></div>
            <div>
                <label class="block text-xs font-bold text-gray-500 uppercase mb-2">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="w-full px-4 py-3 bg-gray-50 border-gray-200 rounded-xl text-sm">
                    <option value="L" {{ old('jenis_kelamin', $santri->jenis_kelamin) == 'L' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="P" {{ old('jenis_kelamin', $santri->jenis_kelamin) == 'P' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
            <div><label class="block text-xs font-bold text-gray-500 uppercase mb-2">Provinsi</label><input type="text" name="provinsi" value="{{ old('provinsi', $santri->provinsi) }}" class="w-full px-4 py-3 bg-gray-50 border-gray-200 rounded-xl text-sm"></div>
            <div><label class="block text-xs font-bold text-gray-500 uppercase mb-2">Kabupaten</label><input type="text" name="kabupaten" value="{{ old('kabupaten', $santri->kabupaten) }}" class="w-full px-4 py-3 bg-gray-50 border-gray-200 rounded-xl text-sm"></div>
            <div class="md:col-span-2"><label class="block text-xs font-bold text-gray-500 uppercase mb-2">Alamat Lengkap</label><textarea name="alamat" rows="2" class="w-full px-4 py-3 bg-gray-50 border-gray-200 rounded-xl text-sm">{{ old('alamat', $santri->alamat) }}</textarea></div>
        </div>
    </div>

    <div class="bg-white rounded-2xl md:rounded-3xl p-5 md:p-8 shadow-sm border border-gray-100">
        <h3 class="text-lg font-bold text-[#0B3B2C] mb-6 flex items-center gap-2">
            <span class="w-8 h-8 bg-amber-100 text-amber-700 rounded-full flex items-center justify-center text-xs flex-shrink-0">2</span>
            Data Orang Tua
        </h3>
        
        <h4 class="font-bold text-gray-700 text-sm mb-4 border-b pb-2">Data Ayah</h4>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
            <div><label class="block text-xs font-bold text-gray-500 uppercase mb-2">Nama Ayah</label><input type="text" name="nama_ayah" value="{{ old('nama_ayah', $santri->orangTua->nama_ayah ?? '') }}" class="w-full px-4 py-3 bg-gray-50 border-gray-200 rounded-xl text-sm"></div>
            <div><label class="block text-xs font-bold text-gray-500 uppercase mb-2">NIK Ayah</label><input type="number" name="nik_ayah" value="{{ old('nik_ayah', $santri->orangTua->nik_ayah ?? '') }}" class="w-full px-4 py-3 bg-gray-50 border-gray-200 rounded-xl text-sm"></div>
            <div><label class="block text-xs font-bold text-gray-500 uppercase mb-2">Pekerjaan Ayah</label><input type="text" name="pekerjaan_ayah" value="{{ old('pekerjaan_ayah', $santri->orangTua->pekerjaan_ayah ?? '') }}" class="w-full px-4 py-3 bg-gray-50 border-gray-200 rounded-xl text-sm"></div>
            <div><label class="block text-xs font-bold text-gray-500 uppercase mb-2">Pendidikan Ayah</label><input type="text" name="pendidikan_ayah" value="{{ old('pendidikan_ayah', $santri->orangTua->pendidikan_ayah ?? '') }}" class="w-full px-4 py-3 bg-gray-50 border-gray-200 rounded-xl text-sm"></div>
            <div class="md:col-span-2"><label class="block text-xs font-bold text-gray-500 uppercase mb-2">Penghasilan Ayah</label><input type="text" name="penghasilan_ayah" value="{{ old('penghasilan_ayah', $santri->orangTua->penghasilan_ayah ?? '') }}" class="w-full px-4 py-3 bg-gray-50 border-gray-200 rounded-xl text-sm"></div>
        </div>

        <h4 class="font-bold text-gray-700 text-sm mb-4 border-b pb-2">Data Ibu</h4>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
            <div><label class="block text-xs font-bold text-gray-500 uppercase mb-2">Nama Ibu</label><input type="text" name="nama_ibu" value="{{ old('nama_ibu', $santri->orangTua->nama_ibu ?? '') }}" class="w-full px-4 py-3 bg-gray-50 border-gray-200 rounded-xl text-sm"></div>
            <div><label class="block text-xs font-bold text-gray-500 uppercase mb-2">NIK Ibu</label><input type="number" name="nik_ibu" value="{{ old('nik_ibu', $santri->orangTua->nik_ibu ?? '') }}" class="w-full px-4 py-3 bg-gray-50 border-gray-200 rounded-xl text-sm"></div>
            <div><label class="block text-xs font-bold text-gray-500 uppercase mb-2">Pekerjaan Ibu</label><input type="text" name="pekerjaan_ibu" value="{{ old('pekerjaan_ibu', $santri->orangTua->pekerjaan_ibu ?? '') }}" class="w-full px-4 py-3 bg-gray-50 border-gray-200 rounded-xl text-sm"></div>
            <div><label class="block text-xs font-bold text-gray-500 uppercase mb-2">Pendidikan Ibu</label><input type="text" name="pendidikan_ibu" value="{{ old('pendidikan_ibu', $santri->orangTua->pendidikan_ibu ?? '') }}" class="w-full px-4 py-3 bg-gray-50 border-gray-200 rounded-xl text-sm"></div>
            <div class="md:col-span-2"><label class="block text-xs font-bold text-gray-500 uppercase mb-2">Penghasilan Ibu</label><input type="text" name="penghasilan_ibu" value="{{ old('penghasilan_ibu', $santri->orangTua->penghasilan_ibu ?? '') }}" class="w-full px-4 py-3 bg-gray-50 border-gray-200 rounded-xl text-sm"></div>
        </div>

        <div>
            <label class="block text-xs font-bold text-gray-500 uppercase mb-2">No WA Darurat</label>
            <input type="number" name="no_wa_darurat" value="{{ old('no_wa_darurat', $santri->orangTua->no_wa_darurat ?? '') }}" class="w-full px-4 py-3 bg-gray-50 border-gray-200 rounded-xl text-sm">
        </div>
    </div>

    <div class="bg-white rounded-2xl md:rounded-3xl p-5 md:p-8 shadow-sm border border-gray-100">
        <h3 class="text-lg font-bold text-[#0B3B2C] mb-6 flex items-center gap-2">
            <span class="w-8 h-8 bg-blue-100 text-blue-700 rounded-full flex items-center justify-center text-xs flex-shrink-0">3</span>
            Riwayat Pendidikan
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="md:col-span-2"><label class="block text-xs font-bold text-gray-500 uppercase mb-2">Nama Sekolah Asal</label><input type="text" name="nama_sekolah" value="{{ old('nama_sekolah', $santri->pendidikan->nama_sekolah ?? '') }}" class="w-full px-4 py-3 bg-gray-50 border-gray-200 rounded-xl text-sm"></div>
            <div><label class="block text-xs font-bold text-gray-500 uppercase mb-2">Tahun Lulus</label><input type="number" name="tahun_lulus" value="{{ old('tahun_lulus', $santri->pendidikan->tahun_lulus ?? '') }}" class="w-full px-4 py-3 bg-gray-50 border-gray-200 rounded-xl text-sm"></div>
            <div><label class="block text-xs font-bold text-gray-500 uppercase mb-2">Prestasi (Opsional)</label><input type="text" name="prestasi" value="{{ old('prestasi', $santri->pendidikan->prestasi ?? '') }}" class="w-full px-4 py-3 bg-gray-50 border-gray-200 rounded-xl text-sm"></div>
            <div class="md:col-span-2"><label class="block text-xs font-bold text-gray-500 uppercase mb-2">Alamat Sekolah</label><textarea name="alamat_sekolah" rows="2" class="w-full px-4 py-3 bg-gray-50 border-gray-200 rounded-xl text-sm">{{ old('alamat_sekolah', $santri->pendidikan->alamat_sekolah ?? '') }}</textarea></div>
        </div>
    </div>

    <div class="flex flex-col-reverse sm:flex-row justify-end gap-3 pb-8">
        <a href="{{ route('admin.selection') }}" class="w-full sm:w-auto bg-white border border-gray-200 text-gray-600 font-bold py-3.5 px-6 rounded-xl hover:bg-gray-50 transition text-sm text-center">Batal</a>
        <button type="submit" class="w-full sm:w-auto bg-emerald-700 border border-gray-200 text-white font-bold py-3.5 px-6 rounded-xl hover:bg-emerald-800 transition text-sm text-center">Simpan Perubahan</button>
    </div>
</form>

            </div>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');

            if(menuBtn && mobileMenu && menuIcon) {
                menuBtn.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                    if (mobileMenu.classList.contains('hidden')) {
                        menuIcon.setAttribute('d', 'M4 6h16M4 12h16m-7 6h7');
                    } else {
                        // Mengubah icon burger menjadi silang (X)
                        menuIcon.setAttribute('d', 'M6 18L18 6M6 6l12 12');
                    }
                });
            }
        });
    </script>
</body>
</html>