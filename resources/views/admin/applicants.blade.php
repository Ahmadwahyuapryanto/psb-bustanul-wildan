<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kelola Data Pendaftar - PPTQ Bustanul Wildan</title>
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F8FAFC] text-gray-800 font-figtree flex h-screen overflow-hidden">
    
    <!-- SIDEBAR DEKSTOP -->
    <aside class="w-64 bg-white border-r border-gray-100 hidden md:flex flex-col justify-between flex-shrink-0 h-full z-20">
        <div>
            <div class="px-8 py-6 flex items-center gap-3 mb-4">
                <div class="w-8 h-8 bg-[#0B3B2C] rounded-lg flex items-center justify-center text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path></svg>
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
                
                <a href="{{ route('admin.applicants') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm transition {{ request()->routeIs('admin.applicants') || true ? 'bg-gray-50 text-[#0B3B2C] font-bold border border-gray-100 shadow-sm relative overflow-hidden' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-900 font-medium' }}">
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-[#0B3B2C]"></div>
                    <svg class="w-5 h-5 text-[#0B3B2C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg> Applicants
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
        <div class="p-6 hidden md:block">
            <a href="{{ route('admin.register.student') }}" class="w-full bg-[#0B3B2C] hover:bg-[#082a20] text-white text-sm font-bold py-3 rounded-xl transition shadow-md mb-6 flex justify-center items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M12 4v16m8-8H4"></path></svg> Register Student
            </a>
            <div class="space-y-1">
                <a href="{{ route('admin.help') }}" class="flex items-center gap-3 px-4 py-2 text-gray-400 hover:text-gray-700 rounded-lg text-sm font-medium transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> Help Center
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center gap-3 px-4 py-2 text-gray-400 hover:text-red-600 rounded-lg text-sm font-medium transition text-left">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg> Logout
                    </button>
                </form>
            </div>
        </div>
    </aside>

    <main class="flex-1 flex flex-col h-screen overflow-hidden relative">
        
        <!-- HEADER & MOBILE NAVBAR -->
        <header class="h-20 bg-white border-b border-gray-100 flex items-center justify-between px-4 md:px-8 flex-shrink-0 z-20 relative">
            <h2 class="text-lg font-bold text-gray-900 truncate">Kelola Data Pendaftar</h2>
            
            <div class="flex items-center gap-3 md:gap-6">
                <!-- Search bar (Hidden di Mobile, kita sediakan pencarian khusus di tabel bawah) -->
                <form action="{{ route('admin.applicants') }}" method="GET" class="relative w-72 hidden md:block">
                    @if(request('status')) <input type="hidden" name="status" value="{{ request('status') }}"> @endif
                    @if(request('sort_date')) <input type="hidden" name="sort_date" value="{{ request('sort_date') }}"> @endif
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="text" name="search" value="{{ request('search') }}" class="w-full pl-10 pr-4 py-2.5 bg-gray-50 border border-gray-100 rounded-xl focus:bg-white focus:border-emerald-200 focus:ring-0 text-sm transition" placeholder="Cari nama atau kota...">
                </form>
                
                <div class="flex items-center gap-3 text-gray-400 md:border-r md:border-gray-200 md:pr-6">
                    <a href="{{ route('admin.notifications') }}" class="hover:text-emerald-600 transition relative block p-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                        <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full border border-white"></span>
                    </a>
                    <a href="{{ route('admin.settings') }}" class="hover:text-emerald-600 transition hidden sm:block p-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </a>
                </div>
                
                <div class="flex items-center gap-2 md:gap-3">
                    <div class="text-right hidden md:block">
                        <p class="text-xs font-bold text-gray-900">{{ Auth::user()->name ?? 'Admin Administrator' }}</p>
                        <p class="text-[10px] text-gray-400 font-medium tracking-widest uppercase">Super Administrator</p>
                    </div>
                    <div class="w-8 h-8 md:w-9 md:h-9 rounded-full bg-[#0B3B2C] border-2 border-emerald-100 overflow-hidden">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name ?? 'Admin') }}&background=0B3B2C&color=fff" alt="Admin">
                    </div>
                    
                    <!-- Burger Button -->
                    <button id="mobile-menu-btn" class="md:hidden text-gray-600 focus:outline-none ml-1 p-1">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                    </button>
                </div>
            </div>
        </header>

        <!-- Mobile Menu Overlay -->
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
                <a href="{{ route('admin.applicants') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-bold bg-gray-100 text-[#0B3B2C] border border-gray-200">
                    <svg class="w-5 h-5 text-[#0B3B2C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg> Applicants
                </a>
                <a href="{{ route('admin.verification') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> Verification
                </a>
                <a href="{{ route('admin.selection') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg> Selection
                </a>
                <a href="{{ route('admin.reports') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10"></path></svg> Reports
                </a>

                <div class="my-4 border-t border-gray-100"></div>

                <a href="{{ route('admin.register.student') }}" class="flex items-center justify-center gap-2 w-full px-4 py-3 rounded-xl text-sm font-bold bg-[#0B3B2C] text-white shadow-md">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M12 4v16m8-8H4"></path></svg> Register Student
                </a>
                <a href="{{ route('admin.help') }}" class="flex items-center gap-3 px-4 py-3 mt-2 rounded-xl text-sm font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> Help Center
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium text-gray-500 hover:bg-red-50 hover:text-red-600 text-left">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg> Logout
                    </button>
                </form>
            </nav>
        </div>

        <div class="flex-1 overflow-y-auto p-4 md:p-8 relative z-0">
            <div class="max-w-7xl mx-auto">
                
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                    <div class="lg:col-span-2 bg-[#0B3B2C] rounded-3xl p-8 text-white relative overflow-hidden flex flex-col justify-between min-h-[220px] shadow-lg">
                        <div class="absolute right-0 bottom-0 opacity-20 pointer-events-none">
                            <svg width="250" height="200" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 2.38 1.19 4.47 3 5.74V17c0 1.1.9 2 2 2h4c1.1 0 2-.9 2-2v-2.26c1.81-1.27 3-3.36 3-5.74 0-3.87-3.13-7-7-7zm0 2c2.76 0 5 2.24 5 5s-2.24 5-5 5-5-2.24-5-5 2.24-5 5-5zm-2 15v3h4v-3h-4z"/></svg>
                        </div>
                        
                        <div class="relative z-10">
                            <span class="bg-amber-400 text-amber-900 text-[10px] font-bold px-3 py-1.5 rounded-full uppercase tracking-wider shadow-sm">ENROLLMENT REPORT</span>
                            <h2 class="text-4xl font-bold mt-4 mb-2">{{ number_format($totalBaru ?? 0) }} Pendaftar Baru Bulan Ini</h2>
                            <p class="text-emerald-100/80 text-sm max-w-md leading-relaxed mb-6">
                                Data pendaftar periode 2026/2027 dipantau secara real-time. Kelola antrean dokumen dengan cepat.
                            </p>
                            <div class="flex gap-3">
                                <a href="{{ route('admin.export') }}" class="bg-[#8C6B14] hover:bg-amber-600 text-white px-5 py-2.5 rounded-xl text-sm font-bold shadow-md transition text-center">
                                    Unduh Laporan CSV
                                </a>
                                <a href="{{ route('admin.reports') }}" class="bg-white/10 hover:bg-white/20 border border-white/20 text-white px-5 py-2.5 rounded-xl text-sm font-bold transition text-center">
                                    Lihat Ringkasan Akhir
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-6">
                        <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm flex items-center justify-between flex-1">
                            <div>
                                <p class="text-[11px] text-gray-400 font-bold tracking-widest uppercase mb-1">Diverifikasi</p>
                                <h3 class="text-3xl font-bold text-gray-900">{{ number_format($diverifikasi ?? 0) }}</h3>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center border border-emerald-100">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                        </div>
                        <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm flex items-center justify-between flex-1 relative overflow-hidden">
                            <div class="absolute left-0 top-0 bottom-0 w-1 bg-amber-500"></div>
                            <div class="pl-2">
                                <p class="text-[11px] text-gray-400 font-bold tracking-widest uppercase mb-1">Menunggu</p>
                                <h3 class="text-3xl font-bold text-gray-900">{{ number_format($menunggu ?? 0) }}</h3>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-amber-50 text-amber-600 flex items-center justify-center border border-amber-100">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl border border-gray-100 shadow-sm overflow-hidden mb-8 relative z-0">
                    <div class="p-6 border-b border-gray-100 flex flex-col lg:flex-row justify-between items-start lg:items-center gap-4">
                        
                        <!-- Form Pencarian & Filter Disatukan -->
                        <form action="{{ route('admin.applicants') }}" method="GET" class="flex flex-col sm:flex-row gap-3 relative z-10 w-full lg:w-auto">
                            <!-- Input Pencarian yang Ditambahkan -->
                            <div class="relative w-full sm:w-64">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                </div>
                                <input type="text" name="search" value="{{ request('search') }}" class="w-full pl-10 pr-4 py-2 bg-gray-50 border border-gray-200 text-gray-700 rounded-xl text-sm font-semibold hover:bg-gray-100 transition focus:bg-white focus:border-emerald-500 focus:ring-0" placeholder="Cari nama atau kota...">
                            </div>

                            <select name="status" onchange="this.form.submit()" class="w-full sm:w-auto px-4 py-2 bg-gray-50 border border-gray-200 text-gray-700 rounded-xl text-sm font-semibold hover:bg-gray-100 transition focus:ring-0 cursor-pointer">
                                <option value="">Semua Status</option>
                                <option value="menunggu" {{ request('status') == 'menunggu' ? 'selected' : '' }}>Pending (Menunggu)</option>
                                <option value="diverifikasi" {{ request('status') == 'diverifikasi' ? 'selected' : '' }}>Verified (Lengkap)</option>
                                <option value="lulus" {{ request('status') == 'lulus' ? 'selected' : '' }}>Lulus Seleksi</option>
                                <option value="tidak lulus" {{ request('status') == 'tidak lulus' ? 'selected' : '' }}>Tidak Lulus</option>
                            </select>
                            <select name="sort_date" onchange="this.form.submit()" class="w-full sm:w-auto px-4 py-2 bg-gray-50 border border-gray-200 text-gray-700 rounded-xl text-sm font-semibold hover:bg-gray-100 transition focus:ring-0 cursor-pointer">
                                <option value="desc" {{ request('sort_date') == 'desc' ? 'selected' : '' }}>Pendaftar Terbaru</option>
                                <option value="asc" {{ request('sort_date') == 'asc' ? 'selected' : '' }}>Pendaftar Terlama</option>
                            </select>

                            <button type="submit" class="w-full sm:w-auto px-4 py-2 bg-[#0B3B2C] text-white rounded-xl text-sm font-bold hover:bg-[#082a20] transition shadow-sm">
                                Cari
                            </button>
                        </form>

                        <div class="text-xs text-gray-500 font-medium">
                            Menampilkan <span class="font-bold text-gray-900">{{ $pendaftars->firstItem() ?? 0 }} - {{ $pendaftars->lastItem() ?? 0 }}</span> dari <span class="font-bold text-gray-900">{{ $totalData }}</span> pendaftar
                        </div>
                    </div>

                    <div class="overflow-x-auto overflow-y-visible">
                        <table class="w-full text-left border-collapse min-w-[800px]">
                            <thead class="bg-gray-50/50">
                                <tr class="text-[10px] text-gray-400 uppercase tracking-widest">
                                    <th class="py-4 px-6 font-semibold w-16 text-center">No</th>
                                    <th class="py-4 px-6 font-semibold w-1/3">Nama Lengkap</th>
                                    <th class="py-4 px-6 font-semibold">ID Registrasi</th>
                                    <th class="py-4 px-6 font-semibold">Tanggal Daftar</th>
                                    <th class="py-4 px-6 font-semibold text-center">Status</th>
                                    <th class="py-4 px-6 font-semibold text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-sm">
                                @forelse($pendaftars as $index => $santri)
                                <tr class="border-b border-gray-50 hover:bg-gray-50 transition relative z-0">
                                    <td class="py-4 px-6 text-center text-gray-400 font-medium">
                                        {{ str_pad($pendaftars->firstItem() + $index, 2, '0', STR_PAD_LEFT) }}
                                    </td>
                                    <td class="py-4 px-6 flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full bg-emerald-50 text-emerald-700 flex items-center justify-center text-xs font-bold border border-emerald-100">
                                            {{ strtoupper(substr($santri->nama_lengkap, 0, 2)) }}
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-900">{{ $santri->nama_lengkap }}</p>
                                            <p class="text-[10px] text-gray-400">{{ $santri->user->email ?? 'email@example.com' }}</p>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6 font-semibold text-gray-700">
                                        BW26-{{ str_pad($santri->id, 5, '0', STR_PAD_LEFT) }}
                                    </td>
                                    <td class="py-4 px-6 text-gray-600">
                                        {{ $santri->created_at->isoFormat('D MMM YYYY') }}
                                    </td>
                                    <td class="py-4 px-6 text-center">
                                        @if($santri->status_pendaftaran == 'diverifikasi')
                                            <span class="px-3 py-1 bg-emerald-50 text-emerald-600 text-[10px] font-bold rounded-full border border-emerald-200 uppercase tracking-wider">Verified</span>
                                        @elseif($santri->status_pendaftaran == 'menunggu')
                                            <span class="px-3 py-1 bg-amber-50 text-amber-600 text-[10px] font-bold rounded-full border border-amber-200 uppercase tracking-wider">Pending</span>
                                        @elseif($santri->status_pendaftaran == 'lulus')
                                            <span class="px-3 py-1 bg-blue-50 text-blue-600 text-[10px] font-bold rounded-full border border-blue-200 uppercase tracking-wider">Lulus</span>
                                        @else
                                            <span class="px-3 py-1 bg-rose-50 text-rose-600 text-[10px] font-bold rounded-full border border-rose-200 uppercase tracking-wider">Ditolak</span>
                                        @endif
                                    </td>
                                    <td class="py-4 px-6 text-right">
                                        <div class="relative group inline-block text-left z-10" tabindex="0">
                                            <button class="text-gray-400 hover:text-[#0B3B2C] focus:outline-none p-2 rounded-lg hover:bg-gray-100 transition">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path></svg>
                                            </button>
                                            
                                            <div class="absolute right-10 top-0 w-36 bg-white rounded-xl shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible focus-within:opacity-100 focus-within:visible transition-all z-50 text-left overflow-hidden">
                                                <a href="{{ route('admin.verification', $santri->id) }}" class="block px-4 py-2.5 text-xs font-bold text-gray-700 hover:bg-emerald-50 hover:text-emerald-700">Verifikasi Berkas</a>
                                                <a href="{{ route('admin.selection') }}?search={{ $santri->id }}" class="block px-4 py-2.5 text-xs font-bold text-gray-700 hover:bg-amber-50 hover:text-amber-700">Ubah Status</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="py-8 text-center text-gray-500">Belum ada data pendaftar sesuai filter.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="p-6 border-t border-gray-100">
                        {{ $pendaftars->links('pagination::tailwind') }}
                    </div>
                </div>

                <footer class="text-center text-[10px] text-gray-400 font-medium pb-8 uppercase tracking-widest">
                    Sistem Manajemen Terpadu PPTQ Bustanul Wildan © 2026
                </footer>
            </div>
        </div>
    </main>

    <!-- SCRIPT TOGGLE MENU MOBILE ADMIN -->
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