<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuratKeluar</title>
</head>
<body>
    <h1>Surat Keluar</h1>
    @if (session('message'))
        <div>
            {{ session('message') }}
        </div>
    
    @endif
    <a href="{{ route('surat-keluar.create') }}">Tambah Surat Keluar</a>
    <table border='1'>
        <tr>
            <th>NO</th>
            <th>Nomor Surat</th>
            <th>Judul Surat</th>
            <th>Kategori</th>
            <th>Tanggal Keluar</th>
            <th>Tujuan Surat</th>
            <th>Keterangan</th>
            <th>Action</th>
        </tr>
        @foreach ($suratKeluar as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nomor_surat }}</td>
            <td>{{ $item->judul_surat }}</td>
            <td>{{ $item->kategori }}</td>
            <td>{{ $item->tanggal_keluar }}</td>
            <td>{{ $item->tujuan_surat }}</td>
            <td>{{ $item->keterangan }}</td>
            <td>
                <a href="{{ route('surat-keluar.edit', $item->id) }}">Edit</a>
                <form action="{{ route('surat-keluar.destroy', $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        
    </table>
    <br>
    
    

    
</body>
</html>