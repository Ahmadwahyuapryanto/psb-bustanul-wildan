<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PendaftaranController;
use App\Models\Santri;

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
});

// ----------------------------------------------------
// Rute untuk Tamu (Belum Login)
// ----------------------------------------------------
require __DIR__.'/auth.php';

// Menampilkan halaman login Admin
Route::get('/admin/login', function () {
    return view('auth.admin-login');
})->middleware('guest')->name('admin.login');

// MEMPROSES login Admin (Pindahkan ke sini, di LUAR grup auth)
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
    // Pastikan diletakkan di DALAM grup Route::middleware(['auth', 'verified'])
Route::get('/pendaftaran/step-1', [PendaftaranController::class, 'createStepOne'])->name('pendaftaran.step1');
Route::post('/pendaftaran/step-1', [PendaftaranController::class, 'storeStepOne'])->name('pendaftaran.step1.store');
Route::get('/pendaftaran/step-2', [PendaftaranController::class, 'createStepTwo'])->name('pendaftaran.step2');
Route::post('/pendaftaran/step-2', [PendaftaranController::class, 'storeStepTwo'])->name('pendaftaran.step2.store');
// Rute Pendaftaran Step 3 (Riwayat Pendidikan)
Route::get('/pendaftaran/step3', [App\Http\Controllers\PendaftaranController::class, 'createStepThree'])->name('pendaftaran.step3');
Route::post('/pendaftaran/step3', [App\Http\Controllers\PendaftaranController::class, 'storeStepThree'])->name('pendaftaran.step3.store');
// Tambahkan di bawah rute step-1 dan step-2 yang sudah ada
Route::get('/pendaftaran/step-4', [PendaftaranController::class, 'createStepFour'])->name('pendaftaran.step4');
Route::post('/pendaftaran/step-4', [PendaftaranController::class, 'storeStepFour'])->name('pendaftaran.step4.store');
Route::get('/pendaftaran/step-5', [PendaftaranController::class, 'createStepFive'])->name('pendaftaran.step5');
Route::post('/pendaftaran/step-5', [PendaftaranController::class, 'storeStepFive'])->name('pendaftaran.step5.store');
    // Dashboard standar untuk Wali Santri
    // GANTI MENJADI INI
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

    // Dashboard khusus Admin (Pakai Controller yang sudah kita buat)
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/applicants', [App\Http\Controllers\AdminController::class, 'applicants'])->name('admin.applicants');
   // Tambahkan di bawah rute admin.dashboard dan admin.applicants
Route::get('/admin/export', [App\Http\Controllers\AdminController::class, 'exportData'])->name('admin.export');
Route::get('/admin/print', [App\Http\Controllers\AdminController::class, 'cetakLaporan'])->name('admin.print'); 
// Rute untuk fitur-fitur tambahan Admin
Route::get('/admin/settings', [App\Http\Controllers\AdminController::class, 'settings'])->name('admin.settings');
Route::get('/admin/notifications', [App\Http\Controllers\AdminController::class, 'notifications'])->name('admin.notifications');
Route::get('/admin/help', [App\Http\Controllers\AdminController::class, 'help'])->name('admin.help');
Route::get('/admin/register-student', [App\Http\Controllers\AdminController::class, 'registerStudent'])->name('admin.register.student');
// Rute untuk Halaman Verifikasi
Route::get('/admin/verification/{id?}', [App\Http\Controllers\AdminController::class, 'verification'])->name('admin.verification');
Route::post('/admin/verification/{id}/approve', [App\Http\Controllers\AdminController::class, 'approveBerkas'])->name('admin.verification.approve');
Route::post('/admin/verification/{id}/reject', [App\Http\Controllers\AdminController::class, 'rejectBerkas'])->name('admin.verification.reject');
// Rute untuk Halaman Seleksi & Penentuan Status
Route::get('/admin/selection', [App\Http\Controllers\AdminController::class, 'selection'])->name('admin.selection');
Route::post('/admin/selection/{id}/update-status', [App\Http\Controllers\AdminController::class, 'updateSelectionStatus'])->name('admin.selection.update');
Route::post('/admin/selection/report', [App\Http\Controllers\AdminController::class, 'generateSelectionReport'])->name('admin.selection.report');
Route::post('/admin/selection/blast-wa', [App\Http\Controllers\AdminController::class, 'blastWa'])->name('admin.selection.blast');

// Tambahkan rute ini di bawah rute admin.selection
Route::get('/admin/reports', [App\Http\Controllers\AdminController::class, 'reports'])->name('admin.reports');

// Rute untuk download detail santri dalam format PDF/Print
Route::get('/admin/applicants/{id}/download', [App\Http\Controllers\AdminController::class, 'downloadDetail'])->name('admin.applicants.download');
});