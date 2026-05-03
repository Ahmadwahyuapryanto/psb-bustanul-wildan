<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Formulir_{{ $santri->nama_lengkap }}</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; color: #333; padding: 20px; }
        .header { text-align: center; border-bottom: 2px solid #0B3B2C; margin-bottom: 30px; padding-bottom: 10px; }
        .header h2 { margin: 0; color: #0B3B2C; }
        .section-title { background: #f4f4f4; padding: 5px 10px; font-weight: bold; margin-top: 20px; border-left: 4px solid #0B3B2C; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        td { padding: 8px; vertical-align: top; border-bottom: 1px solid #eee; }
        .label { width: 30%; font-weight: bold; color: #666; }
        .photo-box { width: 120px; height: 160px; border: 1px solid #ccc; float: right; text-align: center; line-height: 160px; color: #999; }
        @media print { .no-print { display: none; } }
    </style>
</head>
<body onload="window.print()">
    <div class="no-print" style="background: #fff3cd; padding: 15px; margin-bottom: 20px; border: 1px solid #ffeeba; text-align: center;">
        <button onclick="window.print()" style="padding: 10px 20px; background: #0B3B2C; color: white; border: none; border-radius: 5px; cursor: pointer; font-weight: bold;">Cetak / Simpan Sebagai PDF</button>
    </div>

    <div class="header">
        <h2>FORMULIR PENDAFTARAN SANTRI BARU</h2>
        <p>PPTQ BUSTANUL WILDAN - TAHUN AJARAN 2026/2027</p>
    </div>

    <div class="photo-box">
        @if($santri->pas_foto)
            <img src="{{ asset('storage/' . $santri->pas_foto) }}" style="width: 100%; height: 100%; object-cover: cover;">
        @else
            Foto 3x4
        @endif
    </div>

    <div class="section-title">DATA PRIBADI SANTRI</div>
    <table>
        <tr><td class="label">ID Registrasi</td><td>BW26-{{ str_pad($santri->id, 5, '0', STR_PAD_LEFT) }}</td></tr>
        <tr><td class="label">Nama Lengkap</td><td>{{ $santri->nama_lengkap }}</td></tr>
        <tr><td class="label">NIK</td><td>{{ $santri->nik }}</td></tr>
        <tr><td class="label">Tempat, Tgl Lahir</td><td>{{ $santri->tempat_lahir }}, {{ \Carbon\Carbon::parse($santri->tanggal_lahir)->isoFormat('D MMMM YYYY') }}</td></tr>
        <tr><td class="label">Jenis Kelamin</td><td>{{ $santri->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td></tr>
        <tr><td class="label">Alamat Lengkap</td><td>{{ $santri->alamat }}, {{ $santri->kabupaten }}, {{ $santri->provinsi }}</td></tr>
    </table>

    <div class="section-title">DATA ORANG TUA / WALI</div>
    <table>
        <tr><td class="label">Nama Ayah</td><td>{{ $santri->nama_ayah ?? 'Data belum diisi' }}</td></tr>
        <tr><td class="label">Nama Ibu</td><td>{{ $santri->nama_ibu ?? 'Data belum diisi' }}</td></tr>
        <tr><td class="label">No. WhatsApp</td><td>{{ $santri->user->no_wa }}</td></tr>
        <tr><td class="label">Email Akun</td><td>{{ $santri->user->email }}</td></tr>
    </table>

    <div class="section-title">STATUS PENDAFTARAN</div>
    <table>
        <tr><td class="label">Tanggal Daftar</td><td>{{ $santri->created_at->isoFormat('D MMMM YYYY HH:mm') }}</td></tr>
        <tr><td class="label">Status Saat Ini</td><td>{{ strtoupper($santri->status_pendaftaran) }}</td></tr>
    </table>

    <div style="margin-top: 50px; float: right; text-align: center; width: 200px;">
        <p>Cileunyi, {{ date('d M Y') }}</p>
        <br><br><br>
        <p><b>( ........................... )</b><br>Panitia PSB</p>
    </div>
</body>
</html>