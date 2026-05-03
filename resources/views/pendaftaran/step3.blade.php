<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Riwayat Pendidikan - PPTQ Bustanul Wildan</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 font-figtree min-h-screen flex flex-col">

    <header class="bg-[#0B3B2C] text-white py-4 px-6 md:px-8 flex justify-between items-center shadow-md z-10">
        <div class="flex items-center gap-3">
            <div class="bg-amber-500 p-1.5 rounded-lg">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2L15 9H22L16.5 14L18.5 21L12 17L5.5 21L7.5 14L2 9H9L12 2Z"></path></svg>
            </div>
            <span class="font-bold text-lg tracking-wide">PPTQ Bustanul Wildan</span>
        </div>
        <div class="flex items-center gap-4">
            <div class="w-8 h-8 rounded-full bg-emerald-700 overflow-hidden border border-emerald-500">
                <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=047857&color=fff" alt="Profile">
            </div>
        </div>
    </header>

    <div class="flex flex-1 overflow-hidden">
        
        <aside class="w-72 bg-white border-r border-gray-100 p-6 hidden md:block overflow-y-auto">
            <div class="flex items-center gap-3 mb-8 p-4 bg-emerald-50 rounded-xl border border-emerald-100">
                <div class="bg-[#0B3B2C] p-2 rounded-lg text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m3-4h1m-1 4h1m-5 8h8"></path></svg>
                </div>
                <div>
                    <h3 class="font-bold text-[#0B3B2C]">Penerimaan 2026</h3>
                    <p class="text-[10px] text-gray-500 font-semibold uppercase">Langkah 3 dari 5</p>
                </div>
            </div>

            <div class="w-full bg-gray-200 h-1 rounded-full mb-6">
                <div class="bg-amber-500 h-1 rounded-full w-3/5"></div>
            </div>

            <nav class="space-y-1">
                <a href="{{ route('pendaftaran.step1') }}" class="flex items-center gap-3 px-4 py-3 text-emerald-700 hover:bg-emerald-50 rounded-xl font-bold transition border border-transparent">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Data Pribadi
                </a>
                <a href="{{ route('pendaftaran.step2') }}" class="flex items-center gap-3 px-4 py-3 text-emerald-700 hover:bg-emerald-50 rounded-xl font-bold transition border border-transparent">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Data Orang Tua
                </a>
                
                <a href="#" class="flex items-center gap-3 px-4 py-3 bg-gray-50 text-[#0B3B2C] rounded-xl font-bold transition border border-gray-100 shadow-sm relative overflow-hidden">
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-[#0B3B2C]"></div>
                    <svg class="w-5 h-5 text-[#0B3B2C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path></svg> Riwayat Pendidikan
                </a>
                
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-400 cursor-not-allowed rounded-xl font-medium transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg> Dokumen
                </a>
            </nav>
        </aside>

        <main class="flex-1 overflow-y-auto p-6 md:p-10">
            <div class="max-w-4xl mx-auto">
                
                <div class="mb-8">
                    <p class="text-xs font-bold text-emerald-700 tracking-widest uppercase mb-1">RIWAYAT PENDIDIKAN SEBELUMNYA</p>
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Asal TK / PAUD</h1>
                    
                    @if(isset($pendidikan))
                        <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 rounded-2xl flex items-center gap-3 shadow-sm">
                            <div class="bg-emerald-500 p-1.5 rounded-full text-white">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-emerald-900">Data Riwayat Pendidikan Tersimpan</p>
                                <p class="text-xs text-emerald-700">Informasi sekolah asal Anda sudah tercatat di sistem kami.</p>
                            </div>
                        </div>
                    @endif

                    <p class="text-gray-500 max-w-2xl text-sm leading-relaxed">
                        Jika anak sebelumnya menempuh pendidikan di TK atau PAUD, silakan lengkapi data di bawah ini. Boleh dikosongkan jika anak belum pernah bersekolah.
                    </p>
                </div>

                <form action="{{ route('pendaftaran.step3.store') }}" method="POST">
                    @csrf
                    
                    <div class="bg-white rounded-3xl p-6 md:p-8 shadow-sm border border-gray-100 mb-6">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="p-2.5 bg-gray-100 text-gray-600 rounded-xl">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m3-4h1m-1 4h1m-5 8h8"></path></svg>
                            </div>
                            <div>
                                <h2 class="text-lg font-bold text-gray-900 leading-tight">Data TK / PAUD</h2>
                                <p class="text-[9px] font-bold text-amber-600 uppercase tracking-widest">Opsional</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                            <div>
                                <label class="block text-xs font-bold text-gray-700 mb-2">Nama TK / PAUD</label>
                                <input type="text" name="nama_sekolah" value="{{ old('nama_sekolah', $pendidikan->nama_sekolah ?? '') }}" placeholder="Contoh: TK Islam Al-Hidayah" class="w-full px-4 py-3 bg-gray-100 border-transparent rounded-xl focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-700 mb-2">Tahun Keluar / Lulus (Tidak Dibatasi)</label>
                                <input type="number" name="tahun_lulus" value="{{ old('tahun_lulus', $pendidikan->tahun_lulus ?? date('Y')) }}" placeholder="Contoh: 2025" class="w-full px-4 py-3 bg-gray-100 border-transparent rounded-xl focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-gray-700 mb-2">Alamat TK / PAUD</label>
                            <textarea name="alamat_sekolah" rows="2" placeholder="Jl. Desa Contoh No. 12" class="w-full px-4 py-3 bg-gray-100 border-transparent rounded-xl focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm">{{ old('alamat_sekolah', $pendidikan->alamat_sekolah ?? '') }}</textarea>
                        </div>
                    </div>

                    <div class="bg-white rounded-3xl p-6 md:p-8 shadow-sm border border-gray-100 flex flex-col mb-8">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="p-2.5 bg-amber-50 text-amber-600 rounded-xl">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                            </div>
                            <div>
                                <h2 class="text-lg font-bold text-gray-900 leading-tight">Prestasi (Hobi & Bakat)</h2>
                                <p class="text-[9px] font-bold text-amber-600 uppercase tracking-widest">Opsional</p>
                            </div>
                        </div>

                        <div class="flex-1 flex flex-col">
                            <label class="block text-xs font-bold text-gray-700 mb-2">Ceritakan minat, bakat, atau perlombaan yang pernah diikuti anak</label>
                            <textarea name="prestasi" placeholder="Contoh: Suka menggambar, atau sudah hafal surat-surat pendek." class="w-full flex-1 px-4 py-3 bg-gray-100 border-transparent rounded-xl focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm resize-none min-h-[100px]">{{ old('prestasi', $pendidikan->prestasi ?? '') }}</textarea>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row justify-between items-center gap-4 pt-4 mb-10 border-t border-gray-200">
                        <a href="{{ route('pendaftaran.step2') }}" class="text-gray-700 font-bold text-sm flex items-center gap-2 bg-white border border-gray-200 px-6 py-3 rounded-xl shadow-sm hover:bg-gray-50 transition w-full sm:w-auto justify-center">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                            Kembali
                        </a>
                        
                        <button type="submit" class="bg-[#0B3B2C] text-white px-8 py-3 rounded-xl font-bold text-sm hover:bg-[#082a20] transition shadow-md flex items-center gap-2 w-full sm:w-auto justify-center">
                            Selanjutnya: Unggah Dokumen
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </button>
                    </div>

                </form>
            </div>
        </main>
    </div>
</body>
</html>