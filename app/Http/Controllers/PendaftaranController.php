<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;
use Illuminate\Support\Facades\Auth;
use App\Models\Berkas;
use App\Models\OrangTua;
use Illuminate\Support\Facades\Storage;
use App\Models\Pendidikan; // Wajib ditambahkan untuk fitur hapus file lama

class PendaftaranController extends Controller
{
    // Menampilkan halaman langkah 1: Data Pribadi
    public function createStepOne()
    {
        // Cari data santri milik user yang sedang login
        $santri = Santri::where('user_id', Auth::id())->first();

        // Kirim variabel $santri ke view
        return view('pendaftaran.step1', compact('santri'));
    }

    // Menyimpan data langkah 1 dan lanjut ke langkah 2
    public function storeStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nik' => 'required|numeric|digits:16',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'alamat' => 'required|string',
            'provinsi' => 'required|string',
            'kabupaten' => 'required|string',
            'pas_foto' => 'image|mimes:jpeg,png,jpg|max:2048' // Max 2MB
        ]);

        // Proses Upload Foto (Jika ada)
        if ($request->hasFile('pas_foto')) {
            // Cek apakah user sudah punya data & foto lama
            $santriLama = Santri::where('user_id', Auth::id())->first();
            
            // Hapus foto lama dari local storage jika ada, untuk menghemat ruang
            if ($santriLama && $santriLama->pas_foto && Storage::disk('public')->exists($santriLama->pas_foto)) {
                Storage::disk('public')->delete($santriLama->pas_foto);
            }

            // Simpan foto baru ke folder storage/app/public/pas_foto_santri
            $path = $request->file('pas_foto')->store('pas_foto_santri', 'public');
            $validatedData['pas_foto'] = $path;
        }

        // Simpan atau Update data santri milik user yang sedang login
        $validatedData['user_id'] = Auth::id();
        $validatedData['tahap_pendaftaran'] = 2; // Tandai sudah ke tahap 2

        Santri::updateOrCreate(
            ['user_id' => Auth::id()], // Cari berdasarkan user
            $validatedData // Update datanya
        );

        // Nanti ini diarahkan ke Step 2 (Data Orang Tua)
        return redirect()->route('pendaftaran.step2')->with('success', 'Data Pribadi berhasil disimpan!');
    }
    
    // Halaman placeholder untuk Step 2 agar tidak error
    public function createStepTwo()
    {
        $santri = Santri::where('user_id', Auth::id())->first();
        if (!$santri) return redirect()->route('pendaftaran.step1');
        
        $ortu = OrangTua::where('santri_id', $santri->id)->first();
        return view('pendaftaran.step2', compact('ortu'));
    }

    // Tambah fungsi storeStepTwo
    public function storeStepTwo(Request $request)
    {
        $validated = $request->validate([
            'nama_ayah' => 'required', 'nik_ayah' => 'required|digits:16', 'pendidikan_ayah' => 'required',
            'pekerjaan_ayah' => 'required', 'penghasilan_ayah' => 'required',
            'nama_ibu' => 'required', 'nik_ibu' => 'required|digits:16', 'pendidikan_ibu' => 'required',
            'pekerjaan_ibu' => 'required', 'penghasilan_ibu' => 'required',
            'no_wa_darurat' => 'required|numeric',
        ]);

        $santri = Santri::where('user_id', Auth::id())->firstOrFail();
        
        OrangTua::updateOrCreate(['santri_id' => $santri->id], $validated);

        // Update tahap pendaftaran ke step 3 (nanti kita buat step 3)
        $santri->update(['tahap_pendaftaran' => 3]);

        return redirect()->route('pendaftaran.step3')->with('success', 'Data Orang Tua berhasil disimpan!');
    }

// 2. PERBAIKI FUNGSI TAMPILAN (createStepThree)
public function createStepThree()
{
    $santri = Santri::where('user_id', Auth::id())->first();
    
    if (!$santri) {
        return redirect()->route('pendaftaran.step1');
    }

    // Ambil data pendidikan lama agar bisa muncul di form
    $pendidikan = Pendidikan::where('santri_id', $santri->id)->first();

    // PASTIKAN INI step3, bukan step4
    return view('pendaftaran.step3', compact('pendidikan')); 
}

// 3. PERBAIKI FUNGSI SIMPAN (storeStepThree)
public function storeStepThree(Request $request)
{
    // Ubah validasi menjadi 'nullable' agar tidak wajib diisi (cocok untuk SD)
    // Hapus 'nilai_rata_rata' dari sini agar tidak menyebabkan reload terus-menerus
    $validated = $request->validate([
        'nama_sekolah'   => 'nullable|string|max:255',
        'tahun_lulus'    => 'nullable|numeric',
        'alamat_sekolah' => 'nullable|string',
        'prestasi'       => 'nullable|string',
    ]);

    $santri = Santri::where('user_id', Auth::id())->firstOrFail();
    
    // Simpan data ke database
    Pendidikan::updateOrCreate(
        ['santri_id' => $santri->id], 
        $validated
    );

    // Update status pendaftaran pendaftar
    $santri->update(['tahap_pendaftaran' => 4]);

    // Berlanjut ke Step 4
    return redirect()->route('pendaftaran.step4')->with('success', 'Riwayat Pendidikan berhasil disimpan!');
}
    // Menampilkan halaman Langkah 4: Dokumen
    public function createStepFour()
    {
        $santri = Santri::where('user_id', Auth::id())->first();
        
        // Cek apakah data santri sudah ada (mencegah user lompat ke step 4 tanpa isi step 1)
        if (!$santri) {
            return redirect()->route('pendaftaran.step1')->withErrors('Silakan isi data pribadi terlebih dahulu.');
        }

        // Ambil data berkas yang sudah pernah diunggah (jika ada)
        $berkas_terunggah = $santri->berkas->pluck('file_path', 'jenis_berkas')->toArray();

        return view('pendaftaran.step4', compact('santri', 'berkas_terunggah'));
    }

    // Menyimpan dokumen Langkah 4
    public function storeStepFour(Request $request)
    {
        $request->validate([
            'akta_kelahiran' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'kartu_keluarga' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'ijazah' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'pas_foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Untuk fitur Unggah Ulang
        ]);

        $santri = Santri::where('user_id', Auth::id())->firstOrFail();
        $jenis_dokumen = ['akta_kelahiran', 'kartu_keluarga', 'ijazah'];

        // Looping untuk menyimpan masing-masing berkas
        foreach ($jenis_dokumen as $jenis) {
            if ($request->hasFile($jenis)) {
                // Simpan ke storage/app/public/berkas_santri
                $path = $request->file($jenis)->store('berkas_santri', 'public');
                
                // Simpan atau update ke tabel berkas
                Berkas::updateOrCreate(
                    ['santri_id' => $santri->id, 'jenis_berkas' => $jenis],
                    ['file_path' => $path]
                );
            }
        }

        // Jika wali santri mengunggah ulang Pas Foto
        if ($request->hasFile('pas_foto')) {
            // Hapus foto lama jika ada
            if ($santri->pas_foto && Storage::disk('public')->exists($santri->pas_foto)) {
                Storage::disk('public')->delete($santri->pas_foto);
            }

            $path = $request->file('pas_foto')->store('pas_foto_santri', 'public');
            $santri->update(['pas_foto' => $path]);
        }

        // Update status tahap pendaftaran menjadi tahap 5 (Finalisasi)
        $santri->update(['tahap_pendaftaran' => 5]);

        return redirect()->route('pendaftaran.step5')->with('success', 'Dokumen berhasil diunggah!');
    }

    // --- STEP 5: FINALISASI ---
    public function createStepFive()
    {
        // Ambil semua data yang telah diisi
        $santri = Santri::with('berkas')->where('user_id', Auth::id())->first();
        
        if (!$santri) {
            return redirect()->route('pendaftaran.step1')->withErrors('Data tidak ditemukan, silakan mulai pendaftaran.');
        }

        $ortu = OrangTua::where('santri_id', $santri->id)->first();
        $pendidikan = Pendidikan::where('santri_id', $santri->id)->first();
        $berkas_terunggah = $santri->berkas->pluck('file_path', 'jenis_berkas')->toArray();

        // Menghitung persentase kesiapan berkas (KK, Akta, Ijazah, Pas Foto)
        $dokumenWajib = ['kartu_keluarga', 'akta_kelahiran', 'ijazah'];
        $jumlahTerunggah = 0;
        
        foreach ($dokumenWajib as $dokumen) {
            if (isset($berkas_terunggah[$dokumen])) $jumlahTerunggah++;
        }
        if ($santri->pas_foto) $jumlahTerunggah++;

        $persentaseBerkas = ($jumlahTerunggah / 4) * 100;

        return view('pendaftaran.step5', compact('santri', 'ortu', 'pendidikan', 'berkas_terunggah', 'persentaseBerkas'));
    }

    // Proses Submit Pendaftaran Final
    public function storeStepFive(Request $request)
    {
        // Validasi kotak centang pernyataan
        $request->validate([
            'pernyataan' => 'accepted'
        ], [
            'pernyataan.accepted' => 'Anda harus mencentang kotak pernyataan kebenaran data untuk mengirim pendaftaran.'
        ]);

        $santri = Santri::where('user_id', Auth::id())->firstOrFail();

        // Ubah status pendaftaran menjadi 'menunggu' agar masuk ke antrean Admin Verification
        $santri->update([
            'tahap_pendaftaran' => 6, // Menandakan selesai semua tahap
            'status_pendaftaran' => 'menunggu'
        ]);

        // Redirect ke dashboard siswa dengan pesan sukses
        return redirect()->route('dashboard')->with('success', 'Alhamdulillah! Pendaftaran berhasil dikirim. Silakan tunggu proses verifikasi dari panitia.');
    }
}