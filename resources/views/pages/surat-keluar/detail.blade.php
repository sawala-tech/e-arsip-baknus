<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Keluan</title>
</head>
<body>
    <p>{{ $suratKeluar->nomor_surat }}</p>
    <p>{{ $suratKeluar->judul_surat }}</p>
    <p>{{ $suratKeluar->kategori }}</p>
    <p>{{ $suratKeluar->tanggal_keluar }}</p>
    <p>{{ $suratKeluar->tujuan_surat }}</p>
    <p>{{ $suratKeluar->keterangan }}</p>
    <p>{{ asset("/storage/lampiran/".$suratKeluar->file_surat) }}</p>
    <a href="/surat-keluar">Kembali</a>
</body>
</html>