<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PendaftaranController;
use App\Models\Santri;
use App\Http\Controllers\WaliSantriController;


Route::get('/', function () {
    // Tentukan total kuota (Sesuai dengan desainmu yaitu 150, atau ubah jadi 1500 jika mengikuti data admin)
    $kuotaTotal = 100; 
    
    // Hitung berapa santri yang sudah mendaftar
    $pendaftarMasuk = Santri::count(); 
    
    // Hitung sisa kursi
    $sisaKursi = $kuotaTotal - $pendaftarMasuk;
    if ($sisaKursi < 0) $sisaKursi = 0; // Memastikan sisa kursi tidak minus
    
    // Hitung persentase untuk progress bar (baris warna kuning)
    $persentase = ($pendaftarMasuk / $kuotaTotal) * 100;
    if ($persentase > 100) $persentase = 100;

    return view('welcome', compact('kuotaTotal', 'pendaftarMasuk', 'sisaKursi', 'persentase'));
})->name('welcome');

// ----------------------------------------------------
// Rute untuk Tamu (Belum Login)
// Rute untuk halaman Panduan Pendaftaran (Publik)
Route::get('/panduan', function () {
    return view('panduan');
})->name('panduan');

Route::get('/tentang-kami', function () {
    return view('tentangkami');
})->name('tentang');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');
// ----------------------------------------------------
require __DIR__.'/auth.php';

// Menampilkan halaman login Admin
Route::get('/admin/login', function () {
    return view('auth.admin-login');
})->middleware('guest')->name('admin.login');

// MEMPROSES login Admin
Route::post('/admin/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');


// ----------------------------------------------------
// Rute untuk yang SUDAH Login (Middleware Auth)
// ----------------------------------------------------
Route::middleware(['auth', 'verified'])->group(function () {
    
    // Profile bawaan Breeze
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rute Pendaftaran (Langkah 1 - 5)
    Route::get('/pendaftaran/step-1', [PendaftaranController::class, 'createStepOne'])->name('pendaftaran.step1');
    Route::post('/pendaftaran/step-1', [PendaftaranController::class, 'storeStepOne'])->name('pendaftaran.step1.store');
    Route::get('/pendaftaran/step-2', [PendaftaranController::class, 'createStepTwo'])->name('pendaftaran.step2');
    Route::post('/pendaftaran/step-2', [PendaftaranController::class, 'storeStepTwo'])->name('pendaftaran.step2.store');
    Route::get('/pendaftaran/step3', [PendaftaranController::class, 'createStepThree'])->name('pendaftaran.step3');
    Route::post('/pendaftaran/step3', [PendaftaranController::class, 'storeStepThree'])->name('pendaftaran.step3.store');
    Route::get('/pendaftaran/step-4', [PendaftaranController::class, 'createStepFour'])->name('pendaftaran.step4');
    Route::post('/pendaftaran/step-4', [PendaftaranController::class, 'storeStepFour'])->name('pendaftaran.step4.store');
    Route::get('/pendaftaran/step-5', [PendaftaranController::class, 'createStepFive'])->name('pendaftaran.step5');
    Route::post('/pendaftaran/step-5', [PendaftaranController::class, 'storeStepFive'])->name('pendaftaran.step5.store');

    // Dashboard standar untuk Wali Santri
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/wali-santri/bantuan', [WaliSantriController::class, 'bantuan'])->name('wali.bantuan');

    // -------------------------------------------------------------------------------------------------
    // RUTE ADMIN (Dikelompokkan agar lebih aman dan rapi sesuai perancangan skripsi)
    // -------------------------------------------------------------------------------------------------
    // PERHATIKAN: Saya menambahkan ->middleware('admin') di sini
    Route::prefix('admin')->middleware('admin')->group(function () {
        // Dashboard Utama Admin
        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
        
        // Manajemen Pendaftar
        Route::get('/applicants', [AdminController::class, 'applicants'])->name('admin.applicants');
        Route::delete('/applicants/{id}', [AdminController::class, 'destroy'])->name('admin.applicants.destroy'); // Rute Hapus Data
        Route::get('/applicants/{id}/download', [AdminController::class, 'downloadDetail'])->name('admin.applicants.download');
           Route::get('/admin/applicants/{id}/edit', [AdminController::class, 'edit'])->name('admin.applicants.edit');
Route::put('/admin/applicants/{id}', [AdminController::class, 'update'])->name('admin.applicants.update');
        
        // Laporan & Ekspor Data
        Route::get('/export', [AdminController::class, 'exportData'])->name('admin.export');
        Route::get('/print', [AdminController::class, 'cetakLaporan'])->name('admin.print'); 
        Route::get('/reports', [AdminController::class, 'reports'])->name('admin.reports');
        
        // Fitur Tambahan & Bantuan
        Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings');
        Route::get('/notifications', [AdminController::class, 'notifications'])->name('admin.notifications');
        Route::get('/help', [AdminController::class, 'help'])->name('admin.help');
        Route::get('/register-student', [AdminController::class, 'registerStudent'])->name('admin.register.student');
        
        // Verifikasi Berkas
        Route::get('/verification/{id?}', [AdminController::class, 'verification'])->name('admin.verification');
        Route::post('/verification/{id}/approve', [AdminController::class, 'approveBerkas'])->name('admin.verification.approve');
        Route::post('/verification/{id}/reject', [AdminController::class, 'rejectBerkas'])->name('admin.verification.reject');
        
        // Seleksi, Penentuan Status, & Notifikasi
        Route::get('/selection', [AdminController::class, 'selection'])->name('admin.selection');
        Route::post('/selection/{id}/update-status', [AdminController::class, 'updateSelectionStatus'])->name('admin.selection.update');
        Route::post('/selection/report', [AdminController::class, 'generateSelectionReport'])->name('admin.selection.report');
        Route::post('/selection/blast-wa', [AdminController::class, 'blastWa'])->name('admin.selection.blast');
        Route::post('/selection/schedule', [AdminController::class, 'setSchedule'])->name('admin.selection.schedule');
     
    });

});