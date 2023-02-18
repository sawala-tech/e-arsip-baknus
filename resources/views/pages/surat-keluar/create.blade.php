<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keluar</title>
</head>
<body>
    <form action="{{route('surat-keluar.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>nomor surat</label>
        <input type="text" name="nomor_surat">
        <br>
        <label>judul surat</label>
        <input type="text" name="judul_surat">
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
        <label>tanggal keluar</label>
        <input type="date" name="tanggal_keluar">
        <br>
        <label>tujuan surat</label>
        <input type="text" name="tujuan_surat">
        <br>
        <label>keterangan</label>
        <input type="text" name="keterangan">
        <br>
        <label>file surat</label>
        <input type="file" name="lampiran">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>