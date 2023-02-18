<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Export Surat Masuk</title>
</head>
<body>
    <a href="/export/surat-masuk" id='exportLink'>export Data</a>
    
    <form action="">
        <input type="text" name="search" placeholder="Search">
    </form>
    <table border="1">
        <tr>
            <th>Nomor Surat</th>
            <th>Judul Surat</th>
            <th>Kategori</th>
            <th>Asal Surat</th>
            <th>Tanggal Masuk</th>
            <th>Keterangan</th>
        </tr>

        @foreach ($suratMasuk as $surat)
            <tr>
                <td>{{ $surat->nomor_surat }}</td>
                <td>{{ $surat->judul_surat }}</td>
                <td>{{ $surat->kategori }}</td>
                <td>{{ $surat->asal_surat }}</td>
                <td>{{ $surat->tanggal_masuk }}</td>
                <td>{{ $surat->keterangan }}</td>
            </tr>
        @endforeach

    </table>

</body>
<script>
    document.querySelector('input[name="search"]').addEventListener('keyup', function(){
        let value = this.value;

        //get a href link with id exportLink and change href value with new value
        document.querySelector('#exportLink').setAttribute('href', '/export/surat-masuk?search='+value);
    });
</script>
</html>