<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Masuk</title>
</head>
<body>
    @if (session('message'))
        <div>
            {{ session('message') }}
        </div>
        
    @endif
    <form action="{{ route('surat-masuk.update', $id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label>nomor surat</label>
        <input type="text" name="nomor_surat" value="{{ $nomor_surat }}">
        <br>
        <label>judul surat</label>
        <input type="text" name="judul_surat" value="{{ $judul_surat }}">
        <br>
        <label>kategori</label>
        <select name="kategori" id="kategori">
            <option value="permohonan">Permohonan</option>
            <option value="undangan">Undangan</option>
            <option value="pemberitahuan">Pemberitahuan</option>
            <option value="permintaan">Permintaan</option>
            <option value="tugas">Tugas</option>
            <option value="rekomendasi">Rekomendasi</option>
            <option value="pengantar">Pengantar</option>
        </select>
        <br>
        <label>tanggal masuk</label>
        <input type="date" name="tanggal_masuk" value="{{ $tanggal_masuk }}">
        <br>
        <label>tujuan surat</label>
        <input type="text" name="asal_surat" value="{{ $asal_surat }}">
        <br>
        <label>keterangan</label>
        <input type="text" name="keterangan" value="{{ $keterangan }}">
        <br>
        <label>file surat</label>
        <input type="file" name="lampiran" value="{{ $file_surat }}">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>