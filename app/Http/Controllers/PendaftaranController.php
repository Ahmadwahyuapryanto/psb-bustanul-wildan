<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;
use Illuminate\Support\Facades\Auth;
use App\Models\Berkas;
use App\Models\OrangTua;
use Illuminate\Support\Facades\Storage;
use App\Models\Pendidikan; 

class PendaftaranController extends Controller
{
    /**
     * STEP 1: DATA PRIBADI
     */
    public function createStepOne()
    {
        // Ambil data santri berdasarkan user yang login
        $santri = Santri::where('user_id', Auth::id())->first();
        return view('pendaftaran.step1', compact('santri'));
    }

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
            'pas_foto' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Proses Unggah Pas Foto ke SUPABASE
        if ($request->hasFile('pas_foto')) {
            $santriLama = Santri::where('user_id', Auth::id())->first();
            
            // Hapus foto lama di Supabase jika sebelumnya sudah ada file
            if ($santriLama && $santriLama->pas_foto && Storage::disk('supabase')->exists($santriLama->pas_foto)) {
                Storage::disk('supabase')->delete($santriLama->pas_foto);
            }

            // Simpan file baru ke bucket Supabase menggunakan disk 'supabase'
            $path = $request->file('pas_foto')->store('pas_foto_santri', 'supabase');
            $validatedData['pas_foto'] = $path;
        }

        $validatedData['user_id'] = Auth::id();
        $validatedData['tahap_pendaftaran'] = 2; // Menuju tahap berikutnya

        Santri::updateOrCreate(
            ['user_id' => Auth::id()],
            $validatedData
        );

        return redirect()->route('pendaftaran.step2')->with('success', 'Data Pribadi berhasil disimpan!');
    }
    
    /**
     * STEP 2: DATA ORANG TUA
     */
    public function createStepTwo()
    {
        $santri = Santri::where('user_id', Auth::id())->first();
        if (!$santri) return redirect()->route('pendaftaran.step1');
        
        $ortu = OrangTua::where('santri_id', $santri->id)->first();
        return view('pendaftaran.step2', compact('ortu'));
    }

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
        $santri->update(['tahap_pendaftaran' => 3]);

        return redirect()->route('pendaftaran.step3')->with('success', 'Data Orang Tua berhasil disimpan!');
    }

    /**
     * STEP 3: RIWAYAT PENDIDIKAN
     */
    public function createStepThree()
    {
        $santri = Santri::where('user_id', Auth::id())->first();
        if (!$santri) return redirect()->route('pendaftaran.step1');

        $pendidikan = Pendidikan::where('santri_id', $santri->id)->first();
        return view('pendaftaran.step3', compact('pendidikan')); 
    }

    public function storeStepThree(Request $request)
    {
        $validated = $request->validate([
            'nama_sekolah'   => 'nullable|string|max:255',
            'tahun_lulus'    => 'nullable|numeric',
            'alamat_sekolah' => 'nullable|string',
            'prestasi'       => 'nullable|string',
        ]);

        $santri = Santri::where('user_id', Auth::id())->firstOrFail();
        Pendidikan::updateOrCreate(['santri_id' => $santri->id], $validated);
        $santri->update(['tahap_pendaftaran' => 4]);

        return redirect()->route('pendaftaran.step4')->with('success', 'Riwayat Pendidikan berhasil disimpan!');
    }

    /**
     * STEP 4: UNGGAH BERKAS (AKTA, KK, IJAZAH)
     */
    public function createStepFour()
    {
        $santri = Santri::where('user_id', Auth::id())->first();
        if (!$santri) {
            return redirect()->route('pendaftaran.step1')->withErrors('Silakan isi data pribadi terlebih dahulu.');
        }

        $berkas_terunggah = $santri->berkas->pluck('file_path', 'jenis_berkas')->toArray();
        return view('pendaftaran.step4', compact('santri', 'berkas_terunggah'));
    }

    public function storeStepFour(Request $request)
    {
        $request->validate([
            'akta_kelahiran' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'kartu_keluarga' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'ijazah' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'pas_foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', 
        ]);

        $santri = Santri::where('user_id', Auth::id())->firstOrFail();
        $jenis_dokumen = ['akta_kelahiran', 'kartu_keluarga', 'ijazah'];

        // Looping untuk menyimpan dokumen ke SUPABASE
        foreach ($jenis_dokumen as $jenis) {
            if ($request->hasFile($jenis)) {
                $path = $request->file($jenis)->store('berkas_santri', 'supabase');
                
                Berkas::updateOrCreate(
                    ['santri_id' => $santri->id, 'jenis_berkas' => $jenis],
                    ['file_path' => $path]
                );
            }
        }

        // Fitur Unggah Ulang Pas Foto di Tahap Berkas
        if ($request->hasFile('pas_foto')) {
            if ($santri->pas_foto && Storage::disk('supabase')->exists($santri->pas_foto)) {
                Storage::disk('supabase')->delete($santri->pas_foto);
            }
            $path = $request->file('pas_foto')->store('pas_foto_santri', 'supabase');
            $santri->update(['pas_foto' => $path]);
        }

        $santri->update(['tahap_pendaftaran' => 5]);
        return redirect()->route('pendaftaran.step5')->with('success', 'Dokumen berhasil diunggah!');
    }

    /**
     * STEP 5: FINALISASI
     */
    public function createStepFive()
    {
        $santri = Santri::with('berkas')->where('user_id', Auth::id())->first();
        if (!$santri) return redirect()->route('pendaftaran.step1')->withErrors('Data tidak ditemukan.');

        $ortu = OrangTua::where('santri_id', $santri->id)->first();
        $pendidikan = Pendidikan::where('santri_id', $santri->id)->first();
        $berkas_terunggah = $santri->berkas->pluck('file_path', 'jenis_berkas')->toArray();

        // Hitung progres kelengkapan berkas
        $dokumenWajib = ['kartu_keluarga', 'akta_kelahiran', 'ijazah'];
        $jumlahTerunggah = 0;
        foreach ($dokumenWajib as $dokumen) {
            if (isset($berkas_terunggah[$dokumen])) $jumlahTerunggah++;
        }
        if ($santri->pas_foto) $jumlahTerunggah++;

        $persentaseBerkas = ($jumlahTerunggah / 4) * 100;

        return view('pendaftaran.step5', compact('santri', 'ortu', 'pendidikan', 'berkas_terunggah', 'persentaseBerkas'));
    }

    public function storeStepFive(Request $request)
    {
        $request->validate([
            'pernyataan' => 'accepted'
        ], [
            'pernyataan.accepted' => 'Anda harus mencentang kotak pernyataan kebenaran data.'
        ]);

        $santri = Santri::where('user_id', Auth::id())->firstOrFail();

        // Tandai pendaftaran selesai dan menunggu verifikasi admin
        $santri->update([
            'tahap_pendaftaran' => 6, 
            'status_pendaftaran' => 'menunggu'
        ]);

        return redirect()->route('dashboard')->with('success', 'Pendaftaran Anda berhasil dikirim!');
    }
}