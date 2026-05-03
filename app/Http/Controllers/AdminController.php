<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http; // <-- DITAMBAHKAN UNTUK API FONNTE

class AdminController extends Controller
{
    public function index(Request $request)
    {
        // 1. Menghitung Statistik Utama
        $totalPendaftar = Santri::count();
        $terverifikasi = Santri::where('status_pendaftaran', 'diverifikasi')->count();
        $menunggu = Santri::where('status_pendaftaran', 'menunggu')->count();
        
        // Menghitung Sisa Kuota (Sasaran 1500)
        $targetKuota = 1500;
        $sisaKuota = $targetKuota - $totalPendaftar;

        // 2. Data untuk Grafik dengan Filter (Minggu Ini / Bulan Ini)
        $timeframe = $request->input('timeframe', 'minggu');
        $grafikData = [];
        $days = $timeframe == 'bulan' ? 30 : 7; // 30 hari untuk bulan, 7 hari untuk minggu
        
        for ($i = $days - 1; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i)->format('Y-m-d');
            $count = Santri::whereDate('created_at', $date)->count();
            $grafikData[] = [
                // Jika bulan, papar tarikh (contoh: 24/05). Jika minggu, papar hari (contoh: Isnin)
                'hari' => $timeframe == 'bulan' ? Carbon::parse($date)->format('d/m') : Carbon::parse($date)->isoFormat('ddd'), 
                'jumlah' => $count
            ];
        }

        // 3. Aktivitas Terbaru (4 Santri Terakhir mendaftar)
        $aktivitasTerbaru = Santri::with('user')->latest()->take(4)->get();

        // 4. Daftar Antrean Pendaftar dengan Filter Status
        $statusFilter = $request->input('status');
        $query = Santri::with('user')->latest();
        
        // Jika admin memilih filter status pada jadual
        if ($statusFilter) {
            $query->where('status_pendaftaran', $statusFilter);
        }
        
        // Hadkan 10 data sahaja untuk Dashboard
        $daftarPendaftar = $query->take(10)->get();

        return view('admin.dashboard', compact(
            'totalPendaftar', 
            'terverifikasi', 
            'menunggu', 
            'sisaKuota', 
            'targetKuota',
            'grafikData',
            'aktivitasTerbaru',
            'daftarPendaftar',
            'timeframe',
            'statusFilter'
        ));
    }

    // 1. UPDATE FUNGSI APPLICANTS UNTUK FITUR SEARCH
    // 1. UPDATE FUNGSI APPLICANTS UNTUK FITUR SEARCH, FILTER & SORT
    public function applicants(Request $request)
    {
        // Data Statistik Atas
        $totalBaru = Santri::whereMonth('created_at', \Carbon\Carbon::now()->month)->count();
        $diverifikasi = Santri::where('status_pendaftaran', 'diverifikasi')->count();
        $menunggu = Santri::where('status_pendaftaran', 'menunggu')->count();
        
        // Menangkap Input dari Form UI
        $search = $request->input('search');
        $statusFilter = $request->input('status');
        $sortDate = $request->input('sort_date', 'desc'); // Default urutan terbaru

        // Query Dasar
        $query = Santri::with('user');

        // LOGIKA 1: Filter Status
        if ($statusFilter) {
            $query->where('status_pendaftaran', $statusFilter);
        }

        // LOGIKA 2: Fitur Pencarian (Nama, ID, atau Kota)
        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('nama_lengkap', 'like', "%{$search}%")
                  ->orWhere('id', 'like', "%{$search}%")
                  ->orWhere('kabupaten', 'like', "%{$search}%");
            });
        }

        // LOGIKA 3: Urutan Tanggal (Terbaru / Terlama)
        if ($sortDate == 'asc') {
            $query->orderBy('created_at', 'asc');
        } else {
            $query->orderBy('created_at', 'desc');
        }

        // Paginate dengan appends agar filter tidak hilang saat pindah halaman 2, 3, dst.
        $pendaftars = $query->paginate(10)->appends([
            'search' => $search, 
            'status' => $statusFilter, 
            'sort_date' => $sortDate
        ]);
        
        $totalData = $pendaftars->total();

        return view('admin.applicants', compact(
            'totalBaru', 'diverifikasi', 'menunggu', 'pendaftars', 'totalData', 
            'search', 'statusFilter', 'sortDate'
        ));
    }

    // 2. FUNGSI-FUNGSI PENDUKUNG SIDEBAR
    public function settings() {
        return "Ini Halaman Pengaturan Admin (Akan dikembangkan nanti)";
    }

    public function notifications() {
        return "Ini Halaman Notifikasi (Akan dikembangkan nanti)";
    }

    public function help() {
        return "Ini Pusat Bantuan Admin (Akan dikembangkan nanti)";
    }

    public function registerStudent() {
        // Bisa diarahkan ke form pendaftaran frontend, tapi dengan akses admin
        return redirect()->route('register')->with('message', 'Anda mendaftarkan siswa melalui jalur Admin.');
    }

    // Fungsi untuk Export Data ke CSV (Excel)
    public function exportData()
    {
        $pendaftars = Santri::with('user')->get();
        $fileName = 'Data_Pendaftar_PPTQ_' . date('Y-m-d') . '.csv';

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('No', 'ID Registrasi', 'Nama Lengkap', 'Jenis Kelamin', 'Asal Kota/Kab', 'Tanggal Daftar', 'Status');

        $callback = function() use($pendaftars, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            $no = 1;
            foreach ($pendaftars as $santri) {
                $row['No']  = $no++;
                $row['ID Registrasi']  = 'BW26-' . str_pad($santri->id, 5, '0', STR_PAD_LEFT);
                $row['Nama Lengkap']  = $santri->nama_lengkap;
                $row['Jenis Kelamin']  = $santri->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan';
                $row['Asal Kota/Kab']  = $santri->kabupaten;
                $row['Tanggal Daftar']  = $santri->created_at->format('Y-m-d');
                $row['Status']  = strtoupper($santri->status_pendaftaran);

                fputcsv($file, array($row['No'], $row['ID Registrasi'], $row['Nama Lengkap'], $row['Jenis Kelamin'], $row['Asal Kota/Kab'], $row['Tanggal Daftar'], $row['Status']));
            }
            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    // Fungsi untuk Cetak Laporan (Print)
    public function cetakLaporan()
    {
        $pendaftars = Santri::with('user')->latest()->get();
        return view('admin.print', compact('pendaftars'));
    }
// 1. Tambahkan fungsi downloadDetail
    public function downloadDetail($id)
    {
        // Ambil data santri lengkap dengan relasi user (untuk email/no_wa)
        $santri = Santri::with('user')->findOrFail($id);
        
        // Kita gunakan view khusus yang didesain rapi untuk dicetak/PDF
        return view('admin.download-detail', compact('santri'));
    }

    // 2. Pastikan fungsi verification mengirimkan data santri yang lengkap
    public function verification($id = null)
    {
        $antrean = Santri::where('status_pendaftaran', 'menunggu')->orderBy('created_at', 'asc')->get();
        $totalAntrean = $antrean->count();

        if ($totalAntrean == 0 && !$id) {
            return redirect()->route('admin.dashboard')->with('success', 'Semua berkas telah selesai diverifikasi.');
        }

        $santri = $id ? Santri::with(['user'])->findOrFail($id) : $antrean->first();

        // Navigasi antrean
        $nextSantri = Santri::where('status_pendaftaran', 'menunggu')->where('id', '>', $santri->id)->orderBy('id', 'asc')->first();
        $prevSantri = Santri::where('status_pendaftaran', 'menunggu')->where('id', '<', $santri->id)->orderBy('id', 'desc')->first();
        $posisiSekarang = Santri::where('status_pendaftaran', 'menunggu')->where('id', '<=', $santri->id)->count();

        return view('admin.verification', compact('santri', 'nextSantri', 'prevSantri', 'totalAntrean', 'posisiSekarang'));
    }
    // Menampilkan halaman verifikasi

    // Fungsi Setujui Berkas
    public function approveBerkas($id)
    {
        $santri = Santri::findOrFail($id);
        $santri->update(['status_pendaftaran' => 'diverifikasi']);

        return redirect()->route('admin.verification')->with('success', 'Berkas atas nama ' . $santri->nama_lengkap . ' berhasil disetujui.');
    }

    // Fungsi Tolak Berkas
    public function rejectBerkas(Request $request, $id)
    {
        $santri = Santri::findOrFail($id);
        $santri->update(['status_pendaftaran' => 'tidak lulus']);

        return redirect()->route('admin.verification')->with('error', 'Berkas atas nama ' . $santri->nama_lengkap . ' telah ditolak.');
    }

    // --- BAGIAN SELEKSI YANG SUDAH DIUPDATE ---
    
    // 1. Menampilkan Halaman Seleksi & Log Notifikasi
    public function selection(Request $request)
    {
        $search = $request->input('search');
        $tab = $request->input('tab', 'selection');

        $totalTerverifikasi = Santri::whereIn('status_pendaftaran', ['diverifikasi', 'lulus', 'tidak lulus', 'cadangan'])->count();
        $menungguKeputusan = Santri::where('status_pendaftaran', 'diverifikasi')->count();
        $totalLulus = Santri::where('status_pendaftaran', 'lulus')->count();
        $kuotaTersisa = 1500 - $totalLulus; // Target kuota 1500

        // Logika Filter Tab Menu
        $query = Santri::with('user')->latest();
        
        if ($tab == 'waitlist') {
            $query->where('status_pendaftaran', 'cadangan');
        } elseif ($tab == 'finalized') {
            $query->whereIn('status_pendaftaran', ['lulus', 'tidak lulus']);
        } else {
            $query->whereIn('status_pendaftaran', ['diverifikasi', 'lulus', 'tidak lulus', 'cadangan']);
        }

        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('nama_lengkap', 'like', "%{$search}%")
                  ->orWhere('id', 'like', "%{$search}%");
            });
        }

        $pendaftars = $query->paginate(10)->appends(['search' => $search, 'tab' => $tab]);

        // Mengambil Log Aktivitas (Santri yang datanya terakhir diupdate)
        $logNotifikasi = Santri::whereNotNull('updated_at')
                            ->orderBy('updated_at', 'desc')
                            ->take(3)
                            ->get();

        return view('admin.selection', compact('totalTerverifikasi', 'menungguKeputusan', 'kuotaTersisa', 'pendaftars', 'search', 'tab', 'logNotifikasi'));
    }

    // 2. Fungsi Update Status Kelulusan
    public function updateSelectionStatus(Request $request, $id)
    {
        $santri = Santri::findOrFail($id);
        $statusBaru = $request->input('status'); // Menerima 'lulus', 'cadangan', 'tidak lulus'
        
        $santri->update(['status_pendaftaran' => $statusBaru]);

        return redirect()->route('admin.selection')->with('success', 'Status ' . $santri->nama_lengkap . ' berhasil diubah menjadi: ' . strtoupper($statusBaru));
    }

    // 3. Fungsi Generate Laporan Berdasarkan Filter
    public function generateSelectionReport(Request $request)
    {
        $kategori = $request->input('kategori', []);
        
        if (empty($kategori)) {
            return redirect()->route('admin.selection')->with('error', 'Pilih minimal satu kategori data untuk dicetak!');
        }

        $pendaftars = Santri::with('user')->whereIn('status_pendaftaran', $kategori)->get();
        return view('admin.print', compact('pendaftars')); 
    }

    // 4. Fungsi Blast WhatsApp (Fonnte API dengan .env)
    public function blastWa()
    {
        $santriLulus = Santri::with('user')->where('status_pendaftaran', 'lulus')->get();
        
        if($santriLulus->isEmpty()) {
            return redirect()->route('admin.selection')->with('error', 'Tidak ada santri dengan status Lulus untuk dikirimi pesan.');
        }

        // AMBIL TOKEN DARI FILE .env
        $token = env('FONNTE_TOKEN'); 

        if (empty($token)) {
            return redirect()->route('admin.selection')->with('error', 'Token WhatsApp API belum dikonfigurasi di file .env!');
        }

        $berhasil = 0;

        foreach ($santriLulus as $santri) {
            $nomorWa = $santri->user->no_wa ?? ''; 
            
            if(!empty($nomorWa)) {
                $pesan = "Assalamualaikum Wr. Wb.\n\n"
                       . "Selamat! Ananda *{$santri->nama_lengkap}* dinyatakan *LULUS* seleksi di PPTQ Bustanul Wildan.\n\n"
                       . "Silakan login ke sistem untuk melihat tahapan selanjutnya.\n\n"
                       . "Wassalamualaikum Wr. Wb.";

                $response = Http::withHeaders([
                    'Authorization' => $token,
                ])->post('https://api.fonnte.com/send', [
                    'target' => $nomorWa,
                    'message' => $pesan,
                    'countryCode' => '62', 
                ]);

                if ($response->successful()) {
                    $berhasil++;
                }
            }
        }

        return redirect()->route('admin.selection')->with('success', "Blast WhatsApp selesai. Berhasil mengirim ke {$berhasil} nomor.");
    }

    // Menampilkan Halaman Reports (Laporan)
    public function reports()
    {
        $totalPendaftar = Santri::count();
        $totalLulus = Santri::where('status_pendaftaran', 'lulus')->count();
        $totalDitolak = Santri::whereIn('status_pendaftaran', ['tidak lulus', 'cadangan'])->count();
        $totalProses = Santri::whereIn('status_pendaftaran', ['menunggu', 'diverifikasi'])->count();

        $logPendaftar = Santri::latest()->take(5)->get();

        return view('admin.reports', compact('totalPendaftar', 'totalLulus', 'totalDitolak', 'totalProses', 'logPendaftar'));
    }
    
}