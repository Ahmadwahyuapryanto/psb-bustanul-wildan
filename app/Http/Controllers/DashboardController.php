<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil data santri milik user yang login
        $santri = Santri::where('user_id', Auth::id())->first();
        
        // Default status jika belum mengisi apa-apa
        $statusInfo = [
            'label' => 'Belum Mulai',
            'color' => 'gray',
            'message' => 'Anda belum memulai pengisian formulir pendaftaran. Silakan klik tombol di bawah untuk memulai.',
            'progress' => 0
        ];

        // Jika data santri sudah ada, sesuaikan statusnya
        if ($santri) {
            $tahap = $santri->tahap_pendaftaran ?? 1;
            $status = $santri->status_pendaftaran ?? 'proses';

            if ($status == 'lulus') {
                $statusInfo = ['label' => 'LULUS', 'color' => 'emerald', 'message' => 'Selamat! Ananda telah dinyatakan LULUS seleksi PPTQ Bustanul Wildan.', 'progress' => 100];
            } elseif ($status == 'tidak lulus') {
                $statusInfo = ['label' => 'TIDAK LULUS', 'color' => 'rose', 'message' => 'Mohon maaf, Ananda belum dapat bergabung pada periode ini.', 'progress' => 100];
            } elseif ($status == 'cadangan') {
                $statusInfo = ['label' => 'CADANGAN', 'color' => 'amber', 'message' => 'Ananda masuk dalam daftar cadangan. Kami akan menghubungi jika ada kuota kosong.', 'progress' => 100];
            } elseif ($status == 'menunggu' || $status == 'diverifikasi') {
                $statusInfo = ['label' => 'SEDANG SELEKSI', 'color' => 'amber', 'message' => 'Berkas pendaftaran sedang diverifikasi & diseleksi oleh tim admin.', 'progress' => 100];
            } elseif ($tahap < 6) {
                // Kalkulasi progress bar (tahap 1 = 20%, 2 = 40%, dst)
                $statusInfo = ['label' => 'PENGISIAN FORMULIR', 'color' => 'blue', 'message' => 'Silakan lanjutkan pengisian formulir dan unggah dokumen persyaratan.', 'progress' => ($tahap / 5) * 100];
            }
        }

        // Kirim variabel $santri dan $statusInfo ke halaman dashboard
        return view('dashboard', compact('santri', 'statusInfo'));
    }
}