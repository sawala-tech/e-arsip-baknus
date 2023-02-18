<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <p>Surat Masuk :{{$countSuratMasuk}}</p>
    <p>Surat Keluar :{{$countSuratKeluar}}</p>

    <table border="1">
        <tr>
            <th>No</th>
            <th>nomor surat</th>
            <th>judul surat</th>
            <th>kategori</th>
            <th>tanggal</th>
            <th>Jenis Surat</th>
        </tr>
        
        @foreach ($latest as $item)
            <tr>
                
                <td>{{$loop->iteration}}</td>
                <td>{{$item["nomor_surat"]}}</td>
                <td>{{$item["judul_surat"]}}</td>
                <td>{{$item["kategori"]}}</td>
                <td>{{$item["tanggal_surat"]}}</td>
                <td>{{$item["jenis_surat"]}}</td>
            </tr>
        @endforeach
    </table>

</body>
</html>