<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Finalisasi Pendaftaran - PPTQ Bustanul Wildan</title>
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
        
        <aside class="w-72 bg-white border-r border-gray-200 p-6 hidden md:block overflow-y-auto">
            <div class="flex items-center gap-3 mb-8 p-4 bg-emerald-50 rounded-xl border border-emerald-100">
                <div class="bg-[#0B3B2C] p-2 rounded-lg text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                </div>
                <div>
                    <h3 class="font-bold text-[#0B3B2C]">Penerimaan 2026</h3>
                    <p class="text-[10px] text-gray-500 font-semibold uppercase">Langkah 5 dari 5</p>
                </div>
            </div>

            <div class="w-full bg-gray-200 h-1 rounded-full mb-6">
                <div class="bg-amber-500 h-1 rounded-full w-full"></div>
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
                <a href="{{ route('pendaftaran.step4') }}" class="flex items-center gap-3 px-4 py-3 text-emerald-700 hover:bg-emerald-50 rounded-xl font-bold transition border border-transparent">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Dokumen
                </a>
                
                <a href="#" class="flex items-center gap-3 px-4 py-3 bg-gray-50 text-[#0B3B2C] rounded-xl font-bold transition border border-gray-100 shadow-sm relative overflow-hidden">
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-[#0B3B2C]"></div>
                    <svg class="w-5 h-5 text-[#0B3B2C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> Finalisasi
                </a>
            </nav>

            <div class="mt-8">
                <button type="button" onclick="document.getElementById('form-finalisasi').submit();" class="w-full bg-[#0B3B2C] text-white px-4 py-3 rounded-xl font-bold text-sm hover:bg-[#082a20] transition shadow-md flex justify-center items-center gap-2">
                    Kirim Pendaftaran
                </button>
            </div>
        </aside>

        <main class="flex-1 overflow-y-auto p-6 md:p-10">
            <div class="max-w-4xl mx-auto">
                
                <div class="mb-8">
                    <p class="text-xs font-bold text-emerald-700 tracking-widest uppercase mb-1">LANGKAH TERAKHIR</p>
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Ringkasan & Finalisasi Pendaftaran</h1>
                    <p class="text-gray-500 max-w-2xl text-sm leading-relaxed">
                        Mohon periksa kembali seluruh data Anda sebelum mengirimkan pendaftaran. Data yang sudah dikirim tidak dapat diubah kembali secara mandiri.
                    </p>
                </div>

                @if($errors->any())
                    <div class="mb-6 bg-red-50 text-red-700 p-4 rounded-xl border border-red-200">
                        <ul class="list-disc pl-5 text-sm font-semibold">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <div class="md:col-span-2 bg-white rounded-3xl p-6 md:p-8 shadow-sm border border-gray-100 relative">
                        <a href="{{ route('pendaftaran.step1') }}" class="absolute top-6 right-6 text-xs font-bold text-amber-600 hover:text-amber-700 transition">Ubah</a>
                        
                        <div class="flex items-center gap-3 mb-6">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            <h3 class="font-bold text-gray-900 text-lg">Data Santri</h3>
                        </div>

                        <div class="grid grid-cols-2 gap-y-6 gap-x-4">
                            <div>
                                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider mb-1">Nama Lengkap</p>
                                <p class="text-sm font-semibold text-gray-900">{{ $santri->nama_lengkap }}</p>
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider mb-1">NIK</p>
                                <p class="text-sm font-semibold text-gray-900">{{ $santri->nik }}</p>
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider mb-1">Tempat, Tgl Lahir</p>
                                <p class="text-sm font-semibold text-gray-900">{{ $santri->tempat_lahir }}, {{ \Carbon\Carbon::parse($santri->tanggal_lahir)->isoFormat('D MMMM YYYY') }}</p>
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider mb-1">Jenis Kelamin</p>
                                <p class="text-sm font-semibold text-gray-900">{{ $santri->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-[#0B3B2C] rounded-3xl p-6 shadow-md relative overflow-hidden flex flex-col justify-center">
                        <div class="absolute -right-4 -bottom-4 opacity-10">
                            <svg class="w-32 h-32 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <h3 class="font-bold text-white text-lg mb-2 relative z-10">Kesiapan Berkas</h3>
                        <p class="text-xs text-emerald-100/80 leading-relaxed mb-6 relative z-10">Semua dokumen wajib telah diunggah dengan benar.</p>
                        
                        <div class="relative z-10">
                            <h2 class="text-5xl font-bold text-white mb-2">{{ round($persentaseBerkas) }}%</h2>
                            <div class="w-full bg-emerald-900 h-1.5 rounded-full">
                                <div class="bg-amber-400 h-1.5 rounded-full" style="width: {{ $persentaseBerkas }}%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100 relative">
                        <a href="{{ route('pendaftaran.step2') }}" class="absolute top-6 right-6 text-xs font-bold text-amber-600 hover:text-amber-700 transition">Ubah</a>
                        <div class="flex items-center gap-3 mb-6">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            <h3 class="font-bold text-gray-900 text-base">Orang Tua</h3>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider mb-0.5">Ayah</p>
                                <p class="text-sm font-semibold text-gray-900 truncate">{{ $ortu->nama_ayah ?? '-' }}</p>
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider mb-0.5">Ibu</p>
                                <p class="text-sm font-semibold text-gray-900 truncate">{{ $ortu->nama_ibu ?? '-' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100 relative">
                        <a href="{{ route('pendaftaran.step3') }}" class="absolute top-6 right-6 text-xs font-bold text-amber-600 hover:text-amber-700 transition">Ubah</a>
                        <div class="flex items-center gap-3 mb-6">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path></svg>
                            <h3 class="font-bold text-gray-900 text-base">Pendidikan</h3>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider mb-1">Sekolah Asal</p>
                            <p class="text-sm font-semibold text-gray-900 mb-1">{{ $pendidikan->nama_sekolah ?? 'Belum/Tidak Mengisi' }}</p>
                            @if(isset($pendidikan->tahun_lulus))
                                <p class="text-xs text-gray-500">Tahun Keluar: {{ $pendidikan->tahun_lulus }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100 relative">
                        <a href="{{ route('pendaftaran.step4') }}" class="absolute top-6 right-6 text-xs font-bold text-amber-600 hover:text-amber-700 transition">Ubah</a>
                        <div class="flex items-center gap-3 mb-5">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            <h3 class="font-bold text-gray-900 text-base">Dokumen</h3>
                        </div>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 {{ isset($berkas_terunggah['kartu_keluarga']) ? 'text-emerald-500' : 'text-gray-300' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span class="text-xs {{ isset($berkas_terunggah['kartu_keluarga']) ? 'text-gray-700 font-medium' : 'text-gray-400' }}">Kartu Keluarga (KK)</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 {{ isset($berkas_terunggah['akta_kelahiran']) ? 'text-emerald-500' : 'text-gray-300' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span class="text-xs {{ isset($berkas_terunggah['akta_kelahiran']) ? 'text-gray-700 font-medium' : 'text-gray-400' }}">Akta Kelahiran</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 {{ isset($berkas_terunggah['ijazah']) ? 'text-emerald-500' : 'text-gray-300' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span class="text-xs {{ isset($berkas_terunggah['ijazah']) ? 'text-gray-700 font-medium' : 'text-gray-400' }}">Ijazah / SKL</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 {{ $santri->pas_foto ? 'text-emerald-500' : 'text-gray-300' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span class="text-xs {{ $santri->pas_foto ? 'text-gray-700 font-medium' : 'text-gray-400' }}">Pas Foto</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <form id="form-finalisasi" action="{{ route('pendaftaran.step5.store') }}" method="POST">
                    @csrf
                    
                    <div class="bg-gray-100 rounded-3xl p-6 md:p-8 flex items-start gap-4 mb-8">
                        <div class="pt-1">
                            <input type="checkbox" name="pernyataan" id="pernyataan" value="1" class="w-5 h-5 text-[#0B3B2C] bg-white border-gray-300 rounded focus:ring-[#0B3B2C] cursor-pointer">
                        </div>
                        <label for="pernyataan" class="text-sm text-gray-700 leading-relaxed cursor-pointer select-none">
                            Saya menyatakan bahwa seluruh data yang saya masukkan adalah benar dan dapat dipertanggungjawabkan sesuai dengan dokumen asli yang saya miliki. Saya bersedia menerima sanksi apabila di kemudian hari ditemukan ketidaksesuaian data.
                        </label>
                    </div>

                    <div class="flex flex-col sm:flex-row justify-between items-center gap-4 border-t border-gray-200 pt-6">
                        <a href="{{ route('pendaftaran.step4') }}" class="text-gray-700 font-bold text-sm flex items-center gap-2 bg-white border border-gray-200 px-6 py-3 rounded-xl shadow-sm hover:bg-gray-50 transition w-full sm:w-auto justify-center">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                            Kembali
                        </a>
                        
                        <button type="submit" id="btn-submit" disabled class="bg-[#0B3B2C] text-white px-8 py-3 rounded-xl font-bold text-sm hover:bg-[#082a20] transition shadow-md flex items-center gap-2 w-full sm:w-auto justify-center disabled:opacity-50 disabled:cursor-not-allowed">
                            Finalisasi & Kirim Pendaftaran
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </button>
                    </div>
                </form>

                <p class="text-center text-xs text-gray-400 mt-12 mb-6">
                    Jika Anda mengalami kendala teknis, silakan hubungi Sekretariat Admission kami di <span class="font-bold text-amber-600">0812-3456-7890</span>
                </p>

            </div>
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkbox = document.getElementById('pernyataan');
            const submitBtn = document.getElementById('btn-submit');

            checkbox.addEventListener('change', function() {
                if(this.checked) {
                    submitBtn.removeAttribute('disabled');
                } else {
                    submitBtn.setAttribute('disabled', 'disabled');
                }
            });
        });
    </script>

</body>
</html>