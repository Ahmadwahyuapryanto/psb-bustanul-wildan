<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seleksi Calon Santri - PPTQ Bustanul Wildan</title>
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F8FAFC] text-gray-800 font-figtree flex h-screen overflow-hidden">

    <!-- ... (Sidebar dan Header tetap sama seperti sebelumnya) ... -->
    <aside class="w-64 bg-white border-r border-gray-100 flex flex-col justify-between flex-shrink-0 h-full z-20">
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
            <a href="{{ route('admin.register.student') }}" class="w-full bg-[#0B3B2C] hover:bg-[#082a20] text-white text-sm font-bold py-3 rounded-xl transition shadow-md mb-6 flex justify-center items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M12 4v16m8-8H4"></path></svg> Register Student
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full flex items-center gap-3 px-4 py-2 text-gray-400 hover:text-red-600 rounded-lg text-sm font-medium transition text-left">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg> Logout
                </button>
            </form>
        </div>
    </aside>

    <main class="flex-1 flex flex-col h-screen overflow-hidden bg-[#F4F9F7]">
        
        <header class="h-20 bg-white/80 backdrop-blur-md border-b border-gray-100 flex items-center justify-between px-8 flex-shrink-0 z-10">
            <div class="flex items-center gap-8">
                <h2 class="text-xl font-bold text-[#0B3B2C]">Penentuan Status</h2>
                
                <nav class="hidden md:flex gap-6 pt-1">
                    <a href="{{ route('admin.selection', ['tab' => 'selection']) }}" class="{{ $tab == 'selection' ? 'text-[#0B3B2C] font-bold border-b-2 border-[#8C6B14]' : 'text-gray-400 hover:text-gray-600 font-medium' }} pb-1 text-sm transition">Selection</a>
                    <a href="{{ route('admin.selection', ['tab' => 'waitlist']) }}" class="{{ $tab == 'waitlist' ? 'text-[#0B3B2C] font-bold border-b-2 border-[#8C6B14]' : 'text-gray-400 hover:text-gray-600 font-medium' }} pb-1 text-sm transition">Waitlist</a>
                    <a href="{{ route('admin.selection', ['tab' => 'finalized']) }}" class="{{ $tab == 'finalized' ? 'text-[#0B3B2C] font-bold border-b-2 border-[#8C6B14]' : 'text-gray-400 hover:text-gray-600 font-medium' }} pb-1 text-sm transition">Finalized</a>
                </nav>
            </div>
            
            <div class="flex items-center gap-6">
                <form action="{{ route('admin.selection') }}" method="GET" class="relative w-64 hidden md:block">
                    <input type="hidden" name="tab" value="{{ $tab }}">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="text" name="search" value="{{ request('search') }}" class="w-full pl-10 pr-4 py-2 bg-gray-100 border-transparent rounded-full focus:bg-white focus:border-emerald-200 focus:ring-0 text-sm transition" placeholder="Search applicants...">
                </form>

                <div class="flex items-center gap-4 text-gray-400 border-r border-gray-200 pr-6">
                    <a href="{{ route('admin.notifications') }}" class="hover:text-[#0B3B2C] transition block p-2 relative">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                        <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full border border-white"></span>
                    </a>
                    <a href="{{ route('admin.settings') }}" class="hover:text-[#0B3B2C] transition block p-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </a>
                    <div class="w-8 h-8 rounded-full bg-[#0B3B2C] overflow-hidden ml-2">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=0B3B2C&color=fff" alt="Admin">
                    </div>
                </div>
            </div>
        </header>

        <div class="flex-1 overflow-y-auto p-8 relative">
            
            @if(session('success'))
                <div class="mb-6 bg-emerald-100 border border-emerald-200 text-emerald-800 px-6 py-4 rounded-xl shadow-sm text-sm font-bold flex items-center gap-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div class="mb-6 bg-rose-100 border border-rose-200 text-rose-800 px-6 py-4 rounded-xl shadow-sm text-sm font-bold flex items-center gap-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    {{ session('error') }}
                </div>
            @endif

            <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-8">
                
                <div class="flex-1">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
                        <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100">
                            <p class="text-[9px] font-bold text-gray-400 tracking-widest uppercase mb-2">Total Terverifikasi</p>
                            <div class="flex items-baseline gap-2">
                                <h3 class="text-2xl font-bold text-gray-900">{{ number_format($totalTerverifikasi ?? 0) }}</h3>
                                <span class="text-[10px] font-bold text-emerald-500">+12%</span>
                            </div>
                        </div>
                        <div class="bg-white rounded-2xl p-5 shadow-sm border-l-4 border-l-[#8C6B14]">
                            <p class="text-[9px] font-bold text-[#8C6B14] tracking-widest uppercase mb-2">Menunggu Keputusan</p>
                            <div class="flex items-baseline gap-2">
                                <h3 class="text-2xl font-bold text-gray-900">{{ number_format($menungguKeputusan ?? 0) }}</h3>
                                <span class="text-[10px] font-bold text-[#8C6B14]">Action Needed</span>
                            </div>
                        </div>
                        <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100">
                            <p class="text-[9px] font-bold text-gray-400 tracking-widest uppercase mb-2">Kuota Tersisa</p>
                            <div class="flex items-baseline gap-3">
                                <h3 class="text-2xl font-bold text-gray-900">{{ number_format($kuotaTersisa ?? 0) }}</h3>
                                <div class="w-12 h-1.5 bg-gray-200 rounded-full"><div class="w-2/3 h-full bg-[#0B3B2C] rounded-full"></div></div>
                            </div>
                        </div>
                        <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100">
                            <p class="text-[9px] font-bold text-gray-400 tracking-widest uppercase mb-2">Laporan Terkirim</p>
                            <div class="flex items-baseline gap-2">
                                <h3 class="text-2xl font-bold text-gray-900">892</h3>
                                <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                        </div>
                    </div>

                    <!-- FORMULIR MASSAL UNTUK JADWAL -->
                    <form id="scheduleForm" action="{{ route('admin.selection.schedule') }}" method="POST">
                        @csrf
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-lg font-bold text-[#0B3B2C]">
                                @if($tab == 'waitlist') Daftar Cadangan @elseif($tab == 'finalized') Daftar Final @else Daftar Seleksi Calon Santri @endif
                            </h3>
                            <div class="flex gap-2">
                                <div class="relative">
                                    <input type="hidden" name="tab" value="{{ $tab }}">
                                    <!-- Select Filter (Dipindahkan ke luar form massal) -->
                                </div>
                                
                                <!-- Tombol Atur Jadwal (Awalnya Disabled) -->
                                <button type="button" id="btnAturJadwal" disabled class="bg-blue-600 text-white px-4 py-2 rounded-lg text-xs font-bold flex items-center gap-2 hover:bg-blue-700 transition shadow-sm disabled:opacity-50 disabled:cursor-not-allowed">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg> Atur Jadwal
                                </button>
                                <!-- Tombol Blast WA yang sudah ditambah formnovalidate -->
                                <button type="submit" formnovalidate formaction="{{ route('admin.selection.blast') }}" class="bg-[#0B3B2C] text-white px-4 py-2 rounded-lg text-xs font-bold flex items-center gap-2 hover:bg-[#082a20] transition shadow-sm" onclick="return confirm('Anda yakin ingin mengirim pesan WhatsApp massal ke pendaftar yang Lulus?')">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg> Blast WA
                                </button>
                            </div>
                        </div>

                        <div class="space-y-4 mb-8">
                            <!-- CHECKBOX SELECT ALL (Opsional) -->
                            @if(count($pendaftars) > 0)
                            <div class="px-4 flex items-center gap-3">
                                <input type="checkbox" id="selectAll" class="w-4 h-4 text-[#0B3B2C] bg-white border-gray-300 rounded focus:ring-[#0B3B2C] cursor-pointer">
                                <label for="selectAll" class="text-xs font-bold text-gray-500 uppercase tracking-widest cursor-pointer">Pilih Semua</label>
                            </div>
                            @endif

                            @forelse($pendaftars as $santri)
                            <div class="bg-white rounded-2xl p-4 shadow-sm border border-gray-100 flex items-center justify-between hover:shadow-md transition relative z-0">
                                <div class="flex items-center gap-4">
                                    <!-- CHECKBOX SANTRI -->
                                    <input type="checkbox" name="selected_santri[]" value="{{ $santri->id }}" class="santri-checkbox w-4 h-4 text-[#0B3B2C] bg-white border-gray-300 rounded focus:ring-[#0B3B2C] cursor-pointer">
                                    
                                    <div class="w-12 h-12 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-sm">
                                        {{ strtoupper(substr($santri->nama_lengkap, 0, 2)) }}
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-900 text-sm">{{ $santri->nama_lengkap }}</h4>
                                        <p class="text-[10px] text-gray-500 mt-0.5">ID: BW26-{{ str_pad($santri->id, 3, '0', STR_PAD_LEFT) }} • Jalur: Reguler</p>
                                        <!-- Tampilkan jadwal jika ada (Anda perlu menyesuaikan ini dengan kolom database Anda) -->
                                        @if(isset($santri->jadwal_tes))
                                        <p class="text-[10px] text-blue-600 font-semibold mt-1">Jadwal: {{ \Carbon\Carbon::parse($santri->jadwal_tes)->translatedFormat('l, d F Y H:i') }}</p>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="flex items-center gap-2">
                                    <!-- Aksi Individual (Tidak Terpengaruh Form Massal) -->
                                    <button type="submit" formnovalidate formaction="{{ route('admin.selection.update', $santri->id) }}" name="status" value="lulus" 
                                            class="px-4 py-1.5 rounded-full text-[10px] font-bold tracking-wider uppercase transition border 
                                            {{ $santri->status_pendaftaran == 'lulus' ? 'bg-emerald-100 text-emerald-700 border-emerald-200' : 'bg-white text-gray-400 border-gray-200 hover:border-emerald-500 hover:text-emerald-600' }}">
                                        Lulus
                                    </button>

                                    <button type="submit" formnovalidate formaction="{{ route('admin.selection.update', $santri->id) }}" name="status" value="cadangan" 
                                            class="px-4 py-1.5 rounded-full text-[10px] font-bold tracking-wider uppercase transition border 
                                            {{ $santri->status_pendaftaran == 'cadangan' ? 'bg-amber-100 text-amber-700 border-amber-200' : 'bg-white text-gray-400 border-gray-200 hover:border-amber-500 hover:text-amber-600' }}">
                                        Cadangan
                                    </button>

                                    <button type="submit" formnovalidate formaction="{{ route('admin.selection.update', $santri->id) }}" name="status" value="tidak lulus" 
                                            class="px-4 py-1.5 rounded-full text-[10px] font-bold tracking-wider uppercase transition border 
                                            {{ $santri->status_pendaftaran == 'tidak lulus' ? 'bg-rose-100 text-rose-700 border-rose-200' : 'bg-white text-gray-400 border-gray-200 hover:border-rose-500 hover:text-rose-600' }}">
                                        Tidak Lulus
                                    </button>

                                    <div class="relative group inline-block text-left ml-2 z-10" tabindex="0">
                                        <button type="button" class="text-gray-400 hover:text-[#0B3B2C] focus:outline-none p-2 rounded-lg hover:bg-gray-100 transition">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 8a2 2 0 110-4 2 2 0 010 4zm0 6a2 2 0 110-4 2 2 0 010 4zm0 6a2 2 0 110-4 2 2 0 010 4z"></path></svg>
                                        </button>
                                        
                                        <div class="absolute right-0 top-full mt-1 w-44 bg-white rounded-xl shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible focus-within:opacity-100 focus-within:visible transition-all z-50 text-left overflow-hidden">
                                            <a href="{{ route('admin.verification', $santri->id) }}" class="block px-4 py-2.5 text-xs font-bold text-gray-700 hover:bg-emerald-50 hover:text-emerald-700">
                                                Verifikasi Berkas
                                            </a>
                                            <a href="{{ route('admin.applicants.download', $santri->id) }}" target="_blank" class="block px-4 py-2.5 text-xs font-bold text-gray-700 hover:bg-amber-50 hover:text-amber-700 flex justify-between items-center">
                                                Download Detail
                                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="bg-white p-8 text-center rounded-2xl shadow-sm border border-gray-100">
                                <p class="text-gray-500 text-sm">Belum ada data pendaftar pada tab ini.</p>
                            </div>
                            @endforelse

                            <div>
                                {{ $pendaftars->links('pagination::tailwind') }}
                            </div>
                        </div>

                        <!-- MODAL PENGATURAN JADWAL -->
                        <div id="jadwalModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center z-[100] hidden opacity-0 transition-opacity duration-300">
                            <div class="bg-white rounded-3xl shadow-xl w-full max-w-md mx-4 overflow-hidden transform scale-95 transition-transform duration-300">
                                <div class="bg-[#0B3B2C] p-6 text-white">
                                    <h3 class="text-lg font-bold">Atur Jadwal Tes/Wawancara</h3>
                                    <p class="text-xs text-emerald-100/80 mt-1">Pilih tanggal dan waktu untuk <span id="selectedCount" class="font-bold">0</span> santri terpilih.</p>
                                </div>
                                <div class="p-6">
                                    <div class="mb-4">
                                        <label class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-2">Tanggal & Waktu Tes</label>
                                        <input type="datetime-local" name="jadwal_tes" required 
                                            class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm">
                                    </div>
                                    <div class="mb-6">
                                        <label class="flex items-center gap-2 cursor-pointer">
                                            <input type="checkbox" name="kirim_wa" value="1" checked class="w-4 h-4 text-[#0B3B2C] bg-white border-gray-300 rounded focus:ring-[#0B3B2C]">
                                            <span class="text-sm font-medium text-gray-700">Kirim pemberitahuan via WhatsApp</span>
                                        </label>
                                    </div>
                                    <div class="flex justify-end gap-3">
                                        <button type="button" id="btnBatal" class="px-5 py-2.5 rounded-xl text-sm font-bold text-gray-600 hover:bg-gray-100 transition">Batal</button>
                                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-xl text-sm font-bold transition shadow-md">Simpan & Kirim</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>

                <!-- ... (Sidebar Kanan Laporan dan Aktivitas tetap sama) ... -->
                <div class="w-full lg:w-[320px] flex flex-col gap-6">
                    
                    <div class="bg-[#0B3B2C] rounded-3xl p-6 shadow-xl text-white">
                        <h3 class="text-lg font-bold mb-2">Generate Laporan</h3>
                        <p class="text-xs text-emerald-100/80 mb-6 leading-relaxed">Ekspor data santri yang telah ditentukan statusnya ke dalam format dokumen resmi.</p>

                        <form action="{{ route('admin.selection.report') }}" method="POST">
                            @csrf
                            <div class="mb-5">
                                <label class="block text-[10px] font-bold text-emerald-300 tracking-widest uppercase mb-2">Format File</label>
                                <div class="relative">
                                    <select class="w-full bg-white/10 border border-white/20 text-white text-sm rounded-xl py-3 pl-4 pr-8 appearance-none focus:ring-0 focus:border-amber-500 cursor-pointer">
                                        <option value="pdf" class="text-gray-900">Adobe PDF (.pdf)</option>
                                        <option value="csv" class="text-gray-900">Excel / CSV (.csv)</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none text-emerald-300">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-8">
                                <label class="block text-[10px] font-bold text-emerald-300 tracking-widest uppercase mb-3">Kategori Data</label>
                                <div class="space-y-3">
                                    <label class="flex items-center gap-3 cursor-pointer group">
                                        <input type="checkbox" name="kategori[]" value="lulus" checked class="rounded text-amber-500 focus:ring-amber-500 bg-white/10 border-white/30">
                                        <span class="text-sm font-medium text-emerald-50 group-hover:text-white transition">Lulus Seleksi</span>
                                    </label>
                                    <label class="flex items-center gap-3 cursor-pointer group">
                                        <input type="checkbox" name="kategori[]" value="cadangan" checked class="rounded text-amber-500 focus:ring-amber-500 bg-white/10 border-white/30">
                                        <span class="text-sm font-medium text-emerald-50 group-hover:text-white transition">Cadangan</span>
                                    </label>
                                    <label class="flex items-center gap-3 cursor-pointer group">
                                        <input type="checkbox" name="kategori[]" value="tidak lulus" class="rounded text-amber-500 focus:ring-amber-500 bg-white/10 border-white/30">
                                        <span class="text-sm font-medium text-emerald-50 group-hover:text-white transition">Tidak Lulus</span>
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="w-full bg-[#8C6B14] hover:bg-amber-600 text-white font-bold py-3.5 rounded-xl transition shadow-lg text-sm flex justify-center items-center gap-2">
                                Unduh Dokumen
                            </button>
                        </form>
                    </div>

                    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100 flex-1 relative overflow-hidden">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="font-bold text-gray-900 text-sm">Aktivitas Terakhir</h3>
                            <a href="{{ route('admin.dashboard') }}" class="text-gray-400 hover:text-gray-600"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></a>
                        </div>
                        
                        <div class="space-y-5 relative z-10">
                            @forelse($logNotifikasi as $log)
                            <div class="flex gap-3 items-start">
                                <div class="mt-1 w-2 h-2 rounded-full flex-shrink-0 {{ $log->status_pendaftaran == 'lulus' ? 'bg-emerald-500 shadow-[0_0_0_3px_rgba(16,185,129,0.1)]' : 'bg-amber-500 shadow-[0_0_0_3px_rgba(245,158,11,0.1)]' }}"></div>
                                <div>
                                    <p class="text-xs font-bold text-gray-900">Update - {{ $log->nama_lengkap }}</p>
                                    <p class="text-[9px] text-gray-400 mt-0.5">{{ $log->updated_at->diffForHumans() }}</p>
                                </div>
                            </div>
                            @empty
                            <p class="text-xs text-gray-400">Belum ada log tersedia.</p>
                            @endforelse
                        </div>

                        <div class="absolute -right-4 -bottom-4 w-16 h-16 bg-[#8C6B14] rounded-full z-0 opacity-90"></div>

                        <a href="{{ route('admin.dashboard') }}" class="block text-center w-full mt-6 pt-4 border-t border-gray-100 text-[10px] font-bold text-gray-500 uppercase tracking-widest hover:text-[#0B3B2C] transition relative z-10 bg-white">
                            Lihat Selengkapnya
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <!-- Script Interaktif untuk Checkbox dan Modal -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectAll = document.getElementById('selectAll');
            const checkboxes = document.querySelectorAll('.santri-checkbox');
            const btnAturJadwal = document.getElementById('btnAturJadwal');
            const modal = document.getElementById('jadwalModal');
            const modalInner = modal.querySelector('div');
            const btnBatal = document.getElementById('btnBatal');
            const selectedCountSpan = document.getElementById('selectedCount');

            // Fungsi untuk memeriksa status checkbox
            function checkStatus() {
                let checkedCount = 0;
                checkboxes.forEach(cb => {
                    if (cb.checked) checkedCount++;
                });

                // Update jumlah yang dipilih di modal
                selectedCountSpan.textContent = checkedCount;

                // Aktifkan/nonaktifkan tombol Atur Jadwal
                if (checkedCount > 0) {
                    btnAturJadwal.removeAttribute('disabled');
                } else {
                    btnAturJadwal.setAttribute('disabled', 'disabled');
                    if (selectAll) selectAll.checked = false; // Uncheck "Pilih Semua" jika tidak ada yang dipilih
                }
            }

            // Event listener untuk checkbox individual
            checkboxes.forEach(cb => {
                cb.addEventListener('change', checkStatus);
            });

            // Event listener untuk "Pilih Semua"
            if (selectAll) {
                selectAll.addEventListener('change', function() {
                    checkboxes.forEach(cb => {
                        cb.checked = this.checked;
                    });
                    checkStatus();
                });
            }

            // Tampilkan Modal
            btnAturJadwal.addEventListener('click', function() {
                modal.classList.remove('hidden');
                // Sedikit delay untuk memungkinkan display:block diterapkan sebelum opacity
                setTimeout(() => {
                    modal.classList.remove('opacity-0');
                    modalInner.classList.remove('scale-95');
                }, 10);
            });

            // Sembunyikan Modal (Fungsi Helper)
            function hideModal() {
                modal.classList.add('opacity-0');
                modalInner.classList.add('scale-95');
                // Tunggu transisi selesai sebelum menambahkan hidden
                setTimeout(() => {
                    modal.classList.add('hidden');
                }, 300);
            }

            // Batal dari dalam Modal
            btnBatal.addEventListener('click', hideModal);

            // Tutup modal jika klik di luar area konten modal
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    hideModal();
                }
            });
        });
    </script>
</body>
</html>