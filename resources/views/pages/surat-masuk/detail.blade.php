<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Masuk</title>
</head>
<body>
    <p>{{ $suratMasuk->nomor_surat }}</p>
    <p>{{ $suratMasuk->judul_surat }}</p>
    <p>{{ $suratMasuk->kategori }}</p>
    <p>{{ $suratMasuk->tanggal_masuk }}</p>
    <p>{{ $suratMasuk->asal_surat }}</p>
    <p>{{ $suratMasuk->keterangan }}</p>
    <p>{{ asset("/storage/lampiran/".$suratMasuk->file_surat) }}</p>
    <a href="/surat-masuk">Kembali</a>
</body>
</html>