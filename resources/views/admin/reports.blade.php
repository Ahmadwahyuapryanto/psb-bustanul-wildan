<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan - PPTQ Bustanul Wildan</title>
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F8FAFC] text-gray-800 font-figtree flex h-screen overflow-hidden">

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
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm transition {{ request()->routeIs('admin.dashboard') ? 'bg-gray-50 text-[#0B3B2C] font-bold border border-gray-100 shadow-sm relative overflow-hidden' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-900 font-medium' }}">
                    @if(request()->routeIs('admin.dashboard')) <div class="absolute left-0 top-0 bottom-0 w-1 bg-[#0B3B2C]"></div> @endif
                    <svg class="w-5 h-5 {{ request()->routeIs('admin.dashboard') ? 'text-[#0B3B2C]' : 'text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path></svg> Statistics
                </a>
                
                <a href="{{ route('admin.applicants') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm transition {{ request()->routeIs('admin.applicants') ? 'bg-gray-50 text-[#0B3B2C] font-bold border border-gray-100 shadow-sm relative overflow-hidden' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-900 font-medium' }}">
                    @if(request()->routeIs('admin.applicants')) <div class="absolute left-0 top-0 bottom-0 w-1 bg-[#0B3B2C]"></div> @endif
                    <svg class="w-5 h-5 {{ request()->routeIs('admin.applicants') ? 'text-[#0B3B2C]' : 'text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg> Applicants
                </a>
                
                <a href="{{ route('admin.verification') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm transition {{ request()->routeIs('admin.verification') ? 'bg-gray-50 text-[#0B3B2C] font-bold border border-gray-100 shadow-sm relative overflow-hidden' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-900 font-medium' }}">
                    @if(request()->routeIs('admin.verification')) <div class="absolute left-0 top-0 bottom-0 w-1 bg-[#0B3B2C]"></div> @endif
                    <svg class="w-5 h-5 {{ request()->routeIs('admin.verification') ? 'text-[#0B3B2C]' : 'text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> Verification
                </a>
                
                <a href="{{ route('admin.selection') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm transition {{ request()->routeIs('admin.selection') ? 'bg-gray-50 text-[#0B3B2C] font-bold border border-gray-100 shadow-sm relative overflow-hidden' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-900 font-medium' }}">
                    @if(request()->routeIs('admin.selection')) <div class="absolute left-0 top-0 bottom-0 w-1 bg-[#0B3B2C]"></div> @endif
                    <svg class="w-5 h-5 {{ request()->routeIs('admin.selection') ? 'text-[#0B3B2C]' : 'text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg> Selection
                </a>
                
                <a href="{{ route('admin.reports') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm transition {{ request()->routeIs('admin.reports') ? 'bg-gray-50 text-[#0B3B2C] font-bold border border-gray-100 shadow-sm relative overflow-hidden' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-900 font-medium' }}">
                    @if(request()->routeIs('admin.reports')) <div class="absolute left-0 top-0 bottom-0 w-1 bg-[#0B3B2C]"></div> @endif
                    <svg class="w-5 h-5 {{ request()->routeIs('admin.reports') ? 'text-[#0B3B2C]' : 'text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10"></path></svg> Reports
                </a>
            </nav>
        </div>
        
        <div class="p-6">
            <a href="{{ route('admin.register.student') }}" class="w-full bg-[#0B3B2C] hover:bg-[#082a20] text-white text-sm font-bold py-3 rounded-xl transition shadow-md mb-6 flex justify-center items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M12 4v16m8-8H4"></path></svg> Register Student
            </a>
            
            <div class="space-y-1">
                <a href="{{ route('admin.help') }}" class="flex items-center gap-3 px-4 py-2 text-gray-400 hover:text-gray-700 rounded-lg text-sm font-medium transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> Help Center
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center gap-3 px-4 py-2 text-gray-400 hover:text-red-600 rounded-lg text-sm font-medium transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg> Logout
                    </button>
                </form>
            </div>
        </div>
    </aside>

    <main class="flex-1 flex flex-col h-screen overflow-hidden bg-[#F4F9F7]">
        
        <header class="h-20 bg-white/80 backdrop-blur-md border-b border-gray-100 flex items-center justify-between px-8 flex-shrink-0 z-10">
            <h2 class="text-xl font-bold text-[#0B3B2C]">Pusat Laporan & Ekspor Data</h2>
            <div class="flex items-center gap-4">
                <div class="w-8 h-8 rounded-full bg-[#0B3B2C] overflow-hidden">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=0B3B2C&color=fff" alt="Admin">
                </div>
            </div>
        </header>

        <div class="flex-1 overflow-y-auto p-8 relative">
            <div class="max-w-6xl mx-auto">
                
                <div class="mb-8">
                    <h2 class="text-3xl font-bold text-gray-900 mb-2">Rekapitulasi Penerimaan</h2>
                    <p class="text-gray-500 text-sm">Ringkasan status akhir seluruh calon santri tahun ajaran 2026/2027.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-10">
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                        <p class="text-xs text-gray-500 font-bold uppercase tracking-wider mb-2">Total Pendaftar</p>
                        <h3 class="text-4xl font-bold text-[#0B3B2C]">{{ number_format($totalPendaftar) }}</h3>
                    </div>
                    <div class="bg-emerald-50 p-6 rounded-2xl shadow-sm border border-emerald-100">
                        <p class="text-xs text-emerald-600 font-bold uppercase tracking-wider mb-2">Lulus Seleksi</p>
                        <h3 class="text-4xl font-bold text-emerald-700">{{ number_format($totalLulus) }}</h3>
                    </div>
                    <div class="bg-amber-50 p-6 rounded-2xl shadow-sm border border-amber-100">
                        <p class="text-xs text-amber-600 font-bold uppercase tracking-wider mb-2">Dalam Proses</p>
                        <h3 class="text-4xl font-bold text-amber-700">{{ number_format($totalProses) }}</h3>
                    </div>
                    <div class="bg-rose-50 p-6 rounded-2xl shadow-sm border border-rose-100">
                        <p class="text-xs text-rose-600 font-bold uppercase tracking-wider mb-2">Tidak Lulus/Cadangan</p>
                        <h3 class="text-4xl font-bold text-rose-700">{{ number_format($totalDitolak) }}</h3>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    
                    <div class="bg-[#0B3B2C] rounded-3xl p-8 text-white relative overflow-hidden shadow-lg">
                        <div class="absolute right-0 bottom-0 opacity-10 pointer-events-none">
                            <svg width="200" height="200" viewBox="0 0 24 24" fill="currentColor"><path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/></svg>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-2xl font-bold mb-3">Unduh Database Lengkap</h3>
                            <p class="text-emerald-100/80 text-sm mb-8 leading-relaxed">
                                Ekspor seluruh data pendaftar (termasuk data pribadi, data orang tua, dan status akhir) ke dalam format CSV untuk diolah menggunakan Microsoft Excel.
                            </p>
                            
                            <a href="{{ route('admin.export') }}" class="inline-flex justify-center items-center gap-2 bg-[#8C6B14] hover:bg-amber-600 text-white font-bold py-3 px-8 rounded-xl transition shadow-md">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                                Generate Full CSV
                            </a>
                        </div>
                    </div>

                    <div class="bg-white rounded-3xl p-8 border border-gray-100 shadow-sm flex flex-col justify-center">
                        <div class="w-12 h-12 bg-amber-50 text-amber-600 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Cetak Dokumen Laporan</h3>
                        <p class="text-sm text-gray-500 mb-6">Mencetak rekapitulasi data pendaftar dalam format dokumen formal yang siap ditandatangani oleh Kepala Panitia.</p>
                        
                        <a href="{{ route('admin.print') }}" target="_blank" class="w-fit inline-flex justify-center items-center gap-2 bg-gray-50 border border-gray-200 text-gray-700 hover:bg-gray-100 font-bold py-3 px-6 rounded-xl transition">
                            Buka Tampilan Cetak
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </main>

</body>
</html>