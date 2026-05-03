<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard - PPTQ Bustanul Wildan</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F8FAFC] text-gray-800 font-figtree flex h-screen overflow-hidden">

    <aside class="w-64 bg-white border-r border-gray-100 flex flex-col justify-between flex-shrink-0 h-full">
        <div>
            <div class="px-8 py-6 flex items-center gap-3 mb-4">
                <div class="w-8 h-8 bg-[#0B3B2C] rounded-lg flex items-center justify-center text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path></svg>
                </div>
                <div>
                    <h1 class="text-sm font-bold text-gray-900 leading-tight">Madrasah Admin</h1>
                    <p class="text-[10px] font-semibold text-gray-400 uppercase tracking-widest">Admission 2025/26</p>
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
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Register Student
            </a>
            <div class="space-y-1">
                <a href="{{ route('admin.help') }}" class="flex items-center gap-3 px-4 py-2 text-gray-400 hover:text-gray-700 rounded-lg text-sm font-medium transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Help Center
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center gap-3 px-4 py-2 text-gray-400 hover:text-red-600 rounded-lg text-sm font-medium transition text-left">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </aside>

    <main class="flex-1 flex flex-col h-screen overflow-hidden">
        
        <header class="h-20 bg-white border-b border-gray-100 flex items-center justify-between px-8 flex-shrink-0 z-10">
            <h2 class="text-lg font-bold text-gray-900">Dashboard Pemantauan</h2>
            
            <div class="flex items-center gap-6">
            <form action="{{ route('admin.applicants') }}" method="GET" class="relative w-72 hidden md:block">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input type="text" name="search" value="{{ request('search') }}" class="w-full pl-10 pr-4 py-2.5 bg-gray-50 border border-gray-100 rounded-xl focus:bg-white focus:border-emerald-200 focus:ring-0 text-sm transition" placeholder="Cari nama atau kota...">
            </form>

                <div class="flex items-center gap-3 text-gray-400 border-r border-gray-200 pr-6">
                   <a href="{{ route('admin.notifications') }}" class="hover:text-emerald-600 transition relative block p-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                        <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full border border-white"></span>
                    </a>

                    <a href="{{ route('admin.settings') }}" class="hover:text-emerald-600 transition block p-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </a>
                </div>

                <div class="flex items-center gap-3">
                    <div class="text-right hidden md:block">
                        <p class="text-xs font-bold text-gray-900">{{ Auth::user()->name ?? 'Admin Administrator' }}</p>
                        <p class="text-[10px] text-gray-400 font-medium">Super User</p>
                    </div>
                    <div class="w-9 h-9 rounded-full bg-[#0B3B2C] overflow-hidden border-2 border-emerald-100">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name ?? 'Admin') }}&background=0B3B2C&color=fff" alt="Profile">
                    </div>
                </div>
            </div>
        </header>

        <div class="flex-1 overflow-y-auto p-8 relative z-0">
            <div class="max-w-7xl mx-auto">
                
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
                    <div>
                        <p class="text-[10px] font-bold text-amber-600 tracking-widest uppercase mb-1">RINGKASAN PENDAFTARAN</p>
                        <h2 class="text-3xl font-bold text-gray-900">Selamat Datang, Admin PPTQ</h2>
                    </div>
                    <div class="flex gap-3">
                        <a href="{{ route('admin.export') }}" class="bg-white border border-gray-200 text-gray-700 px-4 py-2 rounded-xl text-sm font-bold shadow-sm hover:bg-gray-50 transition flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                            Export Data
                        </a>

                        <a href="{{ route('admin.print') }}" target="_blank" class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-xl text-sm font-bold shadow-sm transition flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
                            Cetak Laporan
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm flex flex-col justify-between">
                        <div class="w-10 h-10 rounded-xl bg-gray-50 flex items-center justify-center text-gray-500 mb-4 border border-gray-100">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 font-medium mb-1">Total Pendaftar</p>
                            <h3 class="text-3xl font-bold text-gray-900 mb-3">{{ number_format($totalPendaftar ?? 0) }}</h3>
                            <span class="inline-flex items-center gap-1 px-2 py-1 bg-emerald-50 text-emerald-700 text-[10px] font-bold rounded-md">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                                +12% Minggu ini
                            </span>
                        </div>
                    </div>

                    <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm flex flex-col justify-between">
                        <div class="w-10 h-10 rounded-xl bg-amber-50 flex items-center justify-center text-amber-600 mb-4 border border-amber-100">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 font-medium mb-1">Dokumen Terverifikasi</p>
                            <h3 class="text-3xl font-bold text-gray-900 mb-4">{{ number_format($terverifikasi ?? 0) }}</h3>
                            <div class="w-full bg-gray-100 h-1.5 rounded-full">
                                <div class="bg-amber-500 h-1.5 rounded-full" style="width: {{ ($totalPendaftar ?? 0) > 0 ? (($terverifikasi ?? 0) / $totalPendaftar) * 100 : 0 }}%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm flex flex-col justify-between">
                        <div class="w-10 h-10 rounded-xl bg-rose-50 flex items-center justify-center text-rose-500 mb-4 border border-rose-100">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 font-medium mb-1">Menunggu Verifikasi</p>
                            <h3 class="text-3xl font-bold text-gray-900 mb-2">{{ number_format($menunggu ?? 0) }}</h3>
                            <p class="text-[10px] text-rose-500 italic font-medium">*Segera periksa antrean</p>
                        </div>
                    </div>

                    <div class="bg-[#0B3B2C] rounded-3xl p-6 shadow-md flex flex-col justify-between relative overflow-hidden text-white">
                        <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-white/5 rounded-full flex items-center justify-center">
                            <div class="w-16 h-16 bg-white/5 rounded-full flex items-center justify-center">
                                <div class="w-8 h-8 bg-white/10 rounded-full"></div>
                            </div>
                        </div>
                        <div class="relative z-10">
                            <p class="text-xs text-emerald-100 font-medium mb-1">Sisa Kuota Santri</p>
                            <h3 class="text-4xl font-bold mb-2">{{ number_format($sisaKuota ?? 1500) }}</h3>
                            <p class="text-[10px] text-emerald-200/80">Target Total: {{ number_format($targetKuota ?? 1500) }} Santri</p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                    <div class="lg:col-span-2 bg-white rounded-3xl p-6 border border-gray-100 shadow-sm flex flex-col">
                        <div class="flex justify-between items-center mb-8">
                            <div>
                                <h3 class="font-bold text-gray-900 text-lg">Tren Registrasi Harian</h3>
                                <p class="text-xs text-gray-500">Statistik pendaftaran pendaftar</p>
                            </div>
                            
                            <form action="{{ route('admin.dashboard') }}" method="GET">
                                @if(request('status')) <input type="hidden" name="status" value="{{ request('status') }}"> @endif
                                <select name="timeframe" onchange="this.form.submit()" class="bg-gray-50 border-none text-xs font-bold text-gray-700 rounded-lg focus:ring-0 py-2 pl-3 pr-8 cursor-pointer">
                                    <option value="minggu" {{ request('timeframe', 'minggu') == 'minggu' ? 'selected' : '' }}>Minggu Ini</option>
                                    <option value="bulan" {{ request('timeframe') == 'bulan' ? 'selected' : '' }}>Bulan Ini</option>
                                </select>
                            </form>
                        </div>
                        
                        <div class="flex-1 flex items-end justify-between px-4 pb-2 relative min-h-[200px]">
                            <div class="absolute inset-0 flex flex-col justify-between pb-8 z-0">
                                <div class="border-b border-gray-100 w-full h-0"></div>
                                <div class="border-b border-gray-100 w-full h-0"></div>
                                <div class="border-b border-gray-100 w-full h-0"></div>
                                <div class="border-b border-gray-100 w-full h-0"></div>
                            </div>
                            
                            @if(isset($grafikData))
                                @foreach($grafikData as $data)
                                    <div class="w-full max-w-[32px] {{ $loop->last ? 'bg-[#0B3B2C] shadow-md' : 'bg-emerald-100' }} rounded-t-sm relative z-10 mx-auto transition-all duration-500" 
                                         style="height: {{ ($totalPendaftar ?? 0) > 0 ? ($data['jumlah'] / $totalPendaftar) * 100 + 10 : 10 }}%" 
                                         title="{{ $data['jumlah'] }} Pendaftar">
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="flex justify-between px-4 text-[10px] font-bold text-gray-400 mt-2 uppercase">
                            @if(isset($grafikData))
                                @foreach($grafikData as $data)
                                    <span class="w-full text-center {{ $loop->last ? 'text-gray-800' : '' }} truncate px-1">{{ $data['hari'] }}</span>
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm flex flex-col">
                        <h3 class="font-bold text-gray-900 text-lg mb-6">Aktivitas Terbaru</h3>
                        
                        <div class="flex-1 space-y-6">
                            @if(isset($aktivitasTerbaru) && $aktivitasTerbaru->count() > 0)
                                @foreach($aktivitasTerbaru as $santri)
                                <div class="flex gap-4">
                                    <div class="w-8 h-8 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center flex-shrink-0 mt-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                    </div>
                                    <div>
                                        <h4 class="text-sm font-bold text-gray-900">{{ $santri->nama_lengkap }}</h4>
                                        <p class="text-[10px] text-gray-500 mb-1">Mendaftar sebagai calon santri baru</p>
                                        <p class="text-[9px] text-gray-400 font-medium">{{ $santri->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                                @endforeach
                            @else
                                <p class="text-sm text-gray-500 text-center py-4">Belum ada aktivitas.</p>
                            @endif
                        </div>

                        <a href="{{ route('admin.applicants') }}" class="block text-center w-full mt-4 py-3 text-sm font-bold text-gray-900 border-t border-gray-100 hover:text-[#0B3B2C] transition">
                            Lihat Semua Aktivitas
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm mb-8 relative z-0">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="font-bold text-gray-900 text-lg">Daftar Antrean Pendaftar</h3>
                        
                        <form action="{{ route('admin.dashboard') }}" method="GET" class="relative z-10">
                            @if(request('timeframe')) <input type="hidden" name="timeframe" value="{{ request('timeframe') }}"> @endif
                            <select name="status" onchange="this.form.submit()" class="text-xs font-bold text-gray-500 bg-transparent border-none focus:ring-0 cursor-pointer hover:text-gray-900 pr-8">
                                <option value="">Semua Status</option>
                                <option value="menunggu" {{ request('status') == 'menunggu' ? 'selected' : '' }}>Proses Verifikasi</option>
                                <option value="diverifikasi" {{ request('status') == 'diverifikasi' ? 'selected' : '' }}>Lengkap / Terverifikasi</option>
                                <option value="lulus" {{ request('status') == 'lulus' ? 'selected' : '' }}>Lulus</option>
                                <option value="tidak lulus" {{ request('status') == 'tidak lulus' ? 'selected' : '' }}>Kurang / Ditolak</option>
                            </select>
                        </form>
                    </div>

                    <div class="overflow-x-auto overflow-y-visible">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="text-[10px] text-gray-400 uppercase tracking-widest border-b border-gray-100">
                                    <th class="pb-3 font-semibold w-1/3">Nama Lengkap</th>
                                    <th class="pb-3 font-semibold">Kota Asal</th>
                                    <th class="pb-3 font-semibold">Tanggal Daftar</th>
                                    <th class="pb-3 font-semibold">Status</th>
                                    <th class="pb-3 font-semibold text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-sm">
                                @if(isset($daftarPendaftar) && $daftarPendaftar->count() > 0)
                                    @foreach($daftarPendaftar as $santri)
                                    <tr class="border-b border-gray-50 hover:bg-gray-50/50 transition relative z-0">
                                        <td class="py-4 flex items-center gap-3">
                                            <div class="w-8 h-8 rounded-full bg-emerald-50 text-emerald-700 flex items-center justify-center text-xs font-bold">
                                                {{ strtoupper(substr($santri->nama_lengkap, 0, 2)) }}
                                            </div>
                                            <div>
                                                <p class="font-bold text-gray-900">{{ $santri->nama_lengkap }}</p>
                                                <p class="text-[10px] text-gray-400">#REG-2026-{{ str_pad($santri->id, 3, '0', STR_PAD_LEFT) }}</p>
                                            </div>
                                        </td>
                                        <td class="py-4 text-gray-600">{{ $santri->kabupaten ?? '-' }}</td>
                                        <td class="py-4 text-gray-600">{{ $santri->created_at->isoFormat('D MMM YYYY') }}</td>
                                        <td class="py-4">
                                            @if($santri->status_pendaftaran == 'menunggu')
                                                <span class="px-3 py-1 bg-amber-50 text-amber-700 text-[10px] font-bold rounded-full border border-amber-100">Proses Verifikasi</span>
                                            @elseif(in_array($santri->status_pendaftaran, ['diverifikasi', 'lulus']))
                                                <span class="px-3 py-1 bg-emerald-50 text-emerald-700 text-[10px] font-bold rounded-full border border-emerald-100">Lengkap</span>
                                            @else
                                                <span class="px-3 py-1 bg-rose-50 text-rose-700 text-[10px] font-bold rounded-full border border-rose-100">Kurang / Ditolak</span>
                                            @endif
                                        </td>
                                        <td class="py-4 text-right">
                                            
                                            <div class="relative group inline-block text-left z-10" tabindex="0">
                                                <button class="text-gray-400 hover:text-[#0B3B2C] focus:outline-none p-2 rounded-lg hover:bg-gray-100 transition">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path></svg>
                                                </button>
                                                
                                                <div class="absolute right-8 top-0 w-36 bg-white rounded-xl shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible focus-within:opacity-100 focus-within:visible transition-all z-50 text-left overflow-hidden">
                                                    <a href="{{ route('admin.verification', $santri->id) }}" class="block px-4 py-2.5 text-xs font-bold text-gray-700 hover:bg-emerald-50 hover:text-emerald-700">Verifikasi Berkas</a>
                                                    <a href="{{ route('admin.selection') }}?search={{ $santri->id }}" class="block px-4 py-2.5 text-xs font-bold text-gray-700 hover:bg-amber-50 hover:text-amber-700">Ubah Status</a>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5" class="py-8 text-center text-gray-500">Belum ada data pendaftar.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>

                <footer class="text-center text-[10px] text-gray-400 font-medium pb-8 uppercase tracking-widest">
                    © 2026 PPTQ Bustanul Wildan. Sistem Informasi Pendaftaran Santri Modern.
                </footer>

            </div>
        </div>
    </main>

</body>
</html>