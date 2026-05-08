<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Verifikasi Berkas - PPTQ Bustanul Wildan</title>
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />
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
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm transition {{ request()->routeIs('admin.dashboard') ? 'bg-gray-50 text-[#0B3B2C] font-bold border border-gray-100 shadow-sm relative overflow-hidden' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-900 font-medium' }}">
                    @if(request()->routeIs('admin.dashboard')) <div class="absolute left-0 top-0 bottom-0 w-1 bg-[#0B3B2C]"></div> @endif
                    <svg class="w-5 h-5 {{ request()->routeIs('admin.dashboard') ? 'text-[#0B3B2C]' : 'text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path></svg> Statistics
                </a>
                
                <a href="{{ route('admin.applicants') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm transition {{ request()->routeIs('admin.applicants') ? 'bg-gray-50 text-[#0B3B2C] font-bold border border-gray-100 shadow-sm relative overflow-hidden' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-900 font-medium' }}">
                    @if(request()->routeIs('admin.applicants')) <div class="absolute left-0 top-0 bottom-0 w-1 bg-[#0B3B2C]"></div> @endif
                    <svg class="w-5 h-5 {{ request()->routeIs('admin.applicants') ? 'text-[#0B3B2C]' : 'text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg> Applicants
                </a>
                
                <a href="{{ route('admin.verification') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm transition {{ request()->routeIs('admin.verification') || true ? 'bg-gray-50 text-[#0B3B2C] font-bold border border-gray-100 shadow-sm relative overflow-hidden' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-900 font-medium' }}">
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-[#0B3B2C]"></div>
                    <svg class="w-5 h-5 text-[#0B3B2C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> Verification
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
            <button class="w-full bg-[#0B3B2C] hover:bg-[#082a20] text-white text-sm font-bold py-3 rounded-xl transition shadow-md mb-6 flex justify-center items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M12 4v16m8-8H4"></path></svg> Register Student
            </button>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full flex items-center gap-3 px-4 py-2 text-gray-400 hover:text-red-600 rounded-lg text-sm font-medium transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg> Logout
                </button>
            </form>
        </div>
    </aside>

    <main class="flex-1 flex flex-col h-screen overflow-hidden relative">
        
        <header class="h-20 bg-white border-b border-gray-100 flex items-center justify-between px-4 md:px-8 flex-shrink-0 z-20 relative">
            <h2 class="text-lg font-bold text-gray-900 truncate">Verifikasi Berkas</h2>
            
            <div class="flex items-center gap-2 md:gap-3">
                <div class="text-right hidden md:block">
                    <p class="text-xs font-bold text-gray-900">{{ Auth::user()->name }}</p>
                    <p class="text-[10px] text-gray-400 font-medium tracking-widest uppercase">Kepala Panitia</p>
                </div>
                <div class="w-8 h-8 md:w-9 md:h-9 rounded-full bg-[#0B3B2C] border-2 border-emerald-100 overflow-hidden">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=0B3B2C&color=fff" alt="Admin">
                </div>

                <button id="mobile-menu-btn" class="md:hidden text-gray-600 focus:outline-none ml-1 p-1">
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
                <a href="{{ route('admin.applicants') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg> Applicants
                </a>
                <a href="{{ route('admin.verification') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-bold bg-gray-100 text-[#0B3B2C] border border-gray-200">
                    <svg class="w-5 h-5 text-[#0B3B2C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> Verification
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

        <div class="flex-1 overflow-hidden p-4 md:p-6 z-0 relative">
            <div class="max-w-7xl mx-auto h-full flex flex-col lg:flex-row gap-6">
                
                @if(session('success'))
                    <div class="absolute top-4 left-1/2 transform -translate-x-1/2 bg-emerald-500 text-white px-6 py-3 rounded-xl shadow-lg z-50 text-sm font-bold">
                        {{ session('success') }}
                    </div>
                @endif
                @if(session('error'))
                    <div class="absolute top-4 left-1/2 transform -translate-x-1/2 bg-rose-500 text-white px-6 py-3 rounded-xl shadow-lg z-50 text-sm font-bold">
                        {{ session('error') }}
                    </div>
                @endif

                @php
                    use Illuminate\Support\Facades\Storage;
                    
                    $urlFoto = $santri->pas_foto ? Storage::disk('supabase')->url($santri->pas_foto) : null;
                    
                    $urlKK = null;
                    $urlAkta = null;
                    $urlIjazah = null;

                    if(isset($santri->berkas)) {
                        $fileKK = $santri->berkas->where('jenis_berkas', 'kartu_keluarga')->first();
                        $urlKK = $fileKK ? Storage::disk('supabase')->url($fileKK->file_path) : null;

                        $fileAkta = $santri->berkas->where('jenis_berkas', 'akta_kelahiran')->first();
                        $urlAkta = $fileAkta ? Storage::disk('supabase')->url($fileAkta->file_path) : null;

                        $fileIjazah = $santri->berkas->where('jenis_berkas', 'ijazah')->first();
                        $urlIjazah = $fileIjazah ? Storage::disk('supabase')->url($fileIjazah->file_path) : null;
                    }

                    // Tentukan URL default yang muncul pertama kali (prioritas Foto)
                    $defaultUrl = $urlFoto ?? $urlKK ?? $urlAkta ?? $urlIjazah;
                @endphp

                <div class="flex-1 bg-white rounded-3xl border border-gray-100 shadow-sm flex flex-col overflow-hidden relative h-full min-h-[400px]">
                    
                    <div class="p-4 border-b border-gray-100 flex flex-col sm:flex-row justify-between items-start sm:items-center bg-white z-10 gap-4">
                        <div class="flex flex-col gap-2 w-full sm:w-auto">
                            <div class="flex items-center gap-3">
                                <div class="p-2 bg-amber-50 text-amber-600 rounded-lg flex-shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Pratinjau Berkas</p>
                                    <h3 class="text-sm font-bold text-gray-900" id="preview-title">Pas Foto</h3>
                                </div>
                            </div>
                            <div class="flex gap-2 mt-1 overflow-x-auto pb-1" id="document-tabs">
                                @if($urlFoto) 
                                    <button onclick="changePreview('{{ $urlFoto }}', 'Pas Foto', this)" class="doc-tab active px-3 py-1.5 bg-emerald-100 text-emerald-800 text-xs font-bold rounded-lg whitespace-nowrap transition">Pas Foto</button> 
                                @endif
                                @if($urlKK) 
                                    <button onclick="changePreview('{{ $urlKK }}', 'Kartu Keluarga', this)" class="doc-tab px-3 py-1.5 bg-gray-100 text-gray-600 hover:bg-gray-200 text-xs font-bold rounded-lg whitespace-nowrap transition">Kartu Keluarga</button> 
                                @endif
                                @if($urlAkta) 
                                    <button onclick="changePreview('{{ $urlAkta }}', 'Akta Kelahiran', this)" class="doc-tab px-3 py-1.5 bg-gray-100 text-gray-600 hover:bg-gray-200 text-xs font-bold rounded-lg whitespace-nowrap transition">Akta Kelahiran</button> 
                                @endif
                                @if($urlIjazah) 
                                    <button onclick="changePreview('{{ $urlIjazah }}', 'Ijazah', this)" class="doc-tab px-3 py-1.5 bg-gray-100 text-gray-600 hover:bg-gray-200 text-xs font-bold rounded-lg whitespace-nowrap transition">Ijazah</button> 
                                @endif
                            </div>
                        </div>

                        <div class="flex gap-2 flex-shrink-0 self-end sm:self-auto">
                            <button onclick="zoomIn()" class="p-2 bg-gray-50 hover:bg-gray-100 text-gray-600 rounded-lg transition border border-gray-200">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path></svg>
                            </button>
                            <button onclick="zoomOut()" class="p-2 bg-gray-50 hover:bg-gray-100 text-gray-600 rounded-lg transition border border-gray-200">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM7 10h6"></path></svg>
                            </button>
                            <a id="download-btn" href="{{ $defaultUrl }}" target="_blank" download="Berkas_{{ $santri->nama_lengkap }}" class="p-2 bg-gray-50 hover:bg-gray-100 text-gray-600 rounded-lg transition border border-gray-200">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                            </a>
                        </div>
                    </div>

                    <div class="flex-1 bg-gray-50 overflow-auto flex items-center justify-center p-8 relative" id="preview-container">
                        @if($defaultUrl)
                            <img id="doc-preview" src="{{ $defaultUrl }}" alt="Berkas" class="max-w-full shadow-lg rounded border border-gray-200 transition-transform duration-200" style="transform: scale(1);">
                        @else
                            <div class="text-center text-gray-400">
                                <svg class="w-16 h-16 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                                <p>Berkas belum diunggah.</p>
                            </div>
                        @endif
                    </div>

                    <div class="p-4 border-t border-gray-100 bg-white flex flex-col sm:flex-row justify-between items-center gap-4">
                        <div class="flex items-center gap-3 w-full sm:w-auto">
                            <p class="text-xs font-bold text-gray-600">Antrean Berkas: <span class="text-gray-900">{{ $posisiSekarang }} dari {{ $totalAntrean }}</span></p>
                            <div class="w-24 sm:w-32 bg-gray-200 h-1.5 rounded-full">
                                <div class="bg-amber-500 h-1.5 rounded-full" style="width: {{ $totalAntrean > 0 ? ($posisiSekarang / $totalAntrean) * 100 : 0 }}%"></div>
                            </div>
                        </div>
                        <div class="flex gap-2 w-full sm:w-auto justify-between sm:justify-end">
                            @if($prevSantri)
                                <a href="{{ route('admin.verification', $prevSantri->id) }}" class="px-4 py-2 bg-white border border-gray-200 text-gray-700 rounded-xl text-xs font-bold hover:bg-gray-50 transition flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M15 19l-7-7 7-7"></path></svg> Sebelumnya
                                </a>
                            @else
                                <button disabled class="px-4 py-2 bg-gray-100 text-gray-400 rounded-xl text-xs font-bold cursor-not-allowed flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M15 19l-7-7 7-7"></path></svg> Sebelumnya
                                </button>
                            @endif
                            @if($nextSantri)
                                <a href="{{ route('admin.verification', $nextSantri->id) }}" class="px-4 py-2 bg-[#0B3B2C] text-white rounded-xl text-xs font-bold hover:bg-[#082a20] transition flex items-center gap-2">
                                    Berikutnya <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                </a>
                            @else
                                <button disabled class="px-4 py-2 bg-gray-300 text-white rounded-xl text-xs font-bold cursor-not-allowed flex items-center gap-2">
                                    Berikutnya <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                </button>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-[350px] flex flex-col gap-6 overflow-y-auto">
                    
                    <div class="bg-[#0B3B2C] rounded-3xl p-6 text-white relative overflow-hidden shadow-md flex-shrink-0">
                        <div class="absolute right-0 bottom-0 opacity-10 pointer-events-none">
                            <svg width="150" height="150" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 2.38 1.19 4.47 3 5.74V17c0 1.1.9 2 2 2h4c1.1 0 2-.9 2-2v-2.26c1.81-1.27 3-3.36 3-5.74 0-3.87-3.13-7-7-7zm0 2c2.76 0 5 2.24 5 5s-2.24 5-5 5-5-2.24-5-5 2.24-5 5-5zm-2 15v3h4v-3h-4z"/></svg>
                        </div>
                        <div class="flex justify-between items-start mb-4 relative z-10">
                            <span class="bg-amber-400 text-amber-900 text-[10px] font-bold px-2.5 py-1 rounded-md uppercase">ID: BW26-{{ str_pad($santri->id, 3, '0', STR_PAD_LEFT) }}</span>
                            <span class="text-[10px] text-emerald-200">Daftar: {{ $santri->created_at->format('d M Y') }}</span>
                        </div>
                        <h2 class="text-xl font-bold mb-1 relative z-10">{{ $santri->nama_lengkap }}</h2>
                        <p class="text-xs text-emerald-100 relative z-10">Asal: {{ $santri->kabupaten ?? '-' }}</p>
                    </div>

                    <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm flex-1 flex flex-col flex-shrink-0">
                        <h3 class="font-bold text-gray-900 text-sm flex items-center gap-2 mb-4 border-b border-gray-100 pb-3">
                            <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg> Parameter Verifikasi Berkas
                        </h3>
                        
                        <div class="space-y-3 mb-6">
                            <label class="flex items-start gap-3 p-3 border border-gray-100 rounded-xl cursor-pointer hover:bg-gray-50 transition">
                                <input type="checkbox" class="verify-check mt-1 rounded text-emerald-600 focus:ring-emerald-500">
                                <div class="flex-1">
                                    <p class="text-xs font-bold text-gray-700">Kesesuaian Nama</p>
                                    <p class="text-[10px] text-gray-400">Sesuai dengan dokumen Ijazah/KK</p>
                                </div>
                            </label>
                            <label class="flex items-start gap-3 p-3 border border-gray-100 rounded-xl cursor-pointer hover:bg-gray-50 transition">
                                <input type="checkbox" class="verify-check mt-1 rounded text-emerald-600 focus:ring-emerald-500">
                                <div class="flex-1">
                                    <p class="text-xs font-bold text-gray-700">Validitas Dokumen</p>
                                    <p class="text-[10px] text-gray-400">File jelas terbaca dan tidak terpotong</p>
                                </div>
                            </label>
                        </div>

                        <form action="{{ route('admin.verification.reject', $santri->id) }}" method="POST" id="form-reject" class="mt-auto">
                            @csrf
                            <label class="block text-[10px] font-bold text-gray-500 uppercase tracking-widest mb-2">Catatan Penolakan (Wajib jika menolak)</label>
                            <textarea name="catatan" id="catatan" rows="3" required class="w-full text-xs p-3 bg-gray-50 border border-gray-200 rounded-xl focus:bg-white focus:border-rose-300 focus:ring-2 focus:ring-rose-100 transition mb-4" placeholder="Sebutkan alasan jika berkas tidak sesuai..."></textarea>
                            
                            <div class="flex gap-2">
                                <button type="submit" class="flex-1 flex justify-center items-center gap-2 bg-white border border-rose-200 text-rose-600 px-4 py-3 rounded-xl text-xs font-bold hover:bg-rose-50 transition shadow-sm">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> Tolak Berkas
                                </button>
                            </div>
                        </form>
                        <form action="{{ route('admin.verification.approve', $santri->id) }}" method="POST" id="form-approve" class="mt-2" onsubmit="return checkVerified()">
                            @csrf
                            <button type="submit" class="w-full flex justify-center items-center gap-2 bg-[#0B3B2C] text-white px-4 py-3 rounded-xl text-xs font-bold hover:bg-[#082a20] transition shadow-md">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> Setujui Berkas
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <script>
        // FUNGSI GANTI PREVIEW DOKUMEN (TAB SWITCHER)
        function changePreview(url, title, btnElement) {
            const previewImg = document.getElementById('doc-preview');
            const previewTitle = document.getElementById('preview-title');
            const downloadBtn = document.getElementById('download-btn');
            
            if (previewImg) {
                previewImg.src = url;
                previewTitle.innerText = title;
                downloadBtn.href = url;
                downloadBtn.setAttribute('download', 'Berkas_' + title.replace(/ /g, '_') + '_{{ $santri->nama_lengkap }}');
                
                // Reset Zoom
                currentScale = 1;
                previewImg.style.transform = `scale(1)`;
                
                // Styling active tab
                document.querySelectorAll('.doc-tab').forEach(el => {
                    el.classList.remove('bg-emerald-100', 'text-emerald-800');
                    el.classList.add('bg-gray-100', 'text-gray-600', 'hover:bg-gray-200');
                });
                
                btnElement.classList.remove('bg-gray-100', 'text-gray-600', 'hover:bg-gray-200');
                btnElement.classList.add('bg-emerald-100', 'text-emerald-800');
            }
        }

        // FUNGSI ZOOM IN / ZOOM OUT DOKUMEN
        let currentScale = 1;
        const img = document.getElementById('doc-preview');
        
        function zoomIn() {
            if(img && currentScale < 3) {
                currentScale += 0.25;
                img.style.transform = `scale(${currentScale})`;
            }
        }
        function zoomOut() {
            if(img && currentScale > 0.5) {
                currentScale -= 0.25;
                img.style.transform = `scale(${currentScale})`;
            }
        }

        // FUNGSI VALIDASI CEKLIS SEBELUM SETUJUI
        function checkVerified() {
            const checks = document.querySelectorAll('.verify-check');
            let allChecked = true;
            checks.forEach(check => {
                if(!check.checked) allChecked = false;
            });

            if(!allChecked) {
                alert("Mohon centang semua kotak parameter verifikasi sebelum menyetujui berkas!");
                return false;
            }
            return true;
        }

        // FUNGSI VALIDASI CATATAN SEBELUM TOLAK
        const formReject = document.getElementById('form-reject');
        if(formReject) {
            formReject.addEventListener('submit', function(e) {
                const catatan = document.getElementById('catatan').value;
                if(catatan.trim() === '') {
                    e.preventDefault();
                    alert("Catatan penolakan harus diisi!");
                } else {
                    if(!confirm("Apakah Anda yakin ingin MENOLAK berkas pendaftar ini?")) {
                        e.preventDefault();
                    }
                }
            });
        }

        // FUNGSI TOGGLE MENU MOBILE ADMIN
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
                        menuIcon.setAttribute('d', 'M6 18L18 6M6 6l12 12');
                    }
                });
            }
        });
    </script>
</body>
</html>