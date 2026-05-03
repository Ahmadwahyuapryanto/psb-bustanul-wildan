<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Pendaftar - PPTQ Bustanul Wildan</title>
    <style>
        body { font-family: 'Arial', sans-serif; padding: 20px; color: #333; }
        .header { text-align: center; border-bottom: 2px solid #0B3B2C; padding-bottom: 15px; margin-bottom: 20px; }
        .header h1 { margin: 0; font-size: 24px; color: #0B3B2C; }
        .header p { margin: 5px 0 0 0; font-size: 14px; color: #666; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; font-size: 12px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f8fafc; color: #0B3B2C; }
        .footer { margin-top: 30px; text-align: right; font-size: 12px; }
        @media print {
            @page { margin: 1cm; }
            body { padding: 0; }
        }
    </style>
</head>
<body onload="window.print()">
    <div class="header">
        <h1>PPTQ Bustanul Wildan</h1>
        <p>Laporan Data Pendaftaran Santri Baru Tahun Ajaran 2026/2027</p>
        <p>Dicetak pada: {{ \Carbon\Carbon::now()->format('d M Y H:i') }}</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>ID Registrasi</th>
                <th>Nama Lengkap</th>
                <th>L/P</th>
                <th>Kota Asal</th>
                <th>Tgl Daftar</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pendaftars as $index => $santri)
            <tr>
                <td style="text-align: center;">{{ $index + 1 }}</td>
                <td>BW26-{{ str_pad($santri->id, 5, '0', STR_PAD_LEFT) }}</td>
                <td>{{ $santri->nama_lengkap }}</td>
                <td style="text-align: center;">{{ $santri->jenis_kelamin }}</td>
                <td>{{ $santri->kabupaten }}</td>
                <td>{{ $santri->created_at->format('d-m-Y') }}</td>
                <td>{{ strtoupper($santri->status_pendaftaran) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        <p>Mengetahui,</p>
        <br><br><br>
        <p><strong>Panitia Penerimaan Santri Baru</strong></p>
    </div>
</body>
</html>