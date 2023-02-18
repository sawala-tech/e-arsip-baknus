<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Export Surat Keluar</title>
</head>
<body>
    <a href="/export/surat-keluar" id='exportLink'>export Data</a>
    
    <form action="">
        <input type="text" name="search" placeholder="Search">
    </form>
    <table border="1">
        <tr>
            <th>Nomor Surat</th>
            <th>Judul Surat</th>
            <th>Kategori</th>
            <th>Tujuan Surat</th>
            <th>Tanggal Keluar</th>
            <th>Keterangan</th>
        </tr>

        @foreach ($suratKeluar as $surat)
            <tr>
                <td>{{ $surat->nomor_surat }}</td>
                <td>{{ $surat->judul_surat }}</td>
                <td>{{ $surat->kategori }}</td>
                <td>{{ $surat->tujuan_surat }}</td>
                <td>{{ $surat->tanggal_keluar }}</td>
                <td>{{ $surat->keterangan }}</td>
            </tr>
        @endforeach

    </table>

</body>
<script>
    document.querySelector('input[name="search"]').addEventListener('keyup', function(){
        let value = this.value;

        //get a href link with id exportLink and change href value with new value
        document.querySelector('#exportLink').setAttribute('href', '/export/surat-keluar?search='+value);
    });
</script>
</html>