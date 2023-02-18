@extends('components.layout.main.app')
@section('title', 'E-Arsip || Dashboard')
@section('content')
    <h2 class="">Dashboard</h2>
    <p id="current_date"></p>

    <div class="row mt-5">
        <div class="col-6 px-2">
            <div class="card border-0 p-3 flex-row d-flex align-items-center shadow-sm rounded-lg">
                <div class="bg-sea p-3 rounded">
                    <i class="fas fa-download fa-lg text-white"></i>
                </div>
                <div class="mx-3">
                    <h5 class="text-secondary mb-0">Surat Masuk</h5>
                    <h4 class="m-0">{{ $countSuratMasuk }}</h4>
                </div>
            </div>
        </div>
        <div class="col-6 px-2">
            <div class="card border-0 p-3 flex-row d-flex align-items-center shadow-sm rounded-lg">
                <div class="bg-salmon p-3 rounded">
                    <i class="fas fa-paper-plane fa-lg text-white"></i>
                </div>
                <div class="mx-3">
                    <h5 class="text-secondary mb-0">Surat Keluar</h5>
                    <h4 class="m-0">{{ $countSuratKeluar }}</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0 my-5">
        <h5 class="pb-2">Daftar Surat Terbaru</h5>
        <div class="bg-white rounded-lg shadow-sm border-0 px-2 pb-2">
            <table id="dashboard_table" class="table w-100">
                <thead class='text-secondary'>
                    <tr>
                        <th class="text-uppercase">#</th>
                        <th class="text-uppercase">Nomor surat</th>
                        <th class="text-uppercase">judul surat</th>
                        <th class="text-uppercase">kategori</th>
                        <th class="text-uppercase">Tanggal</th>
                        <th class="text-uppercase">jenis surat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($latest as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item['nomor_surat'] }}</td>
                            <td>{{ $item['judul_surat'] }}</td>
                            <td>{{ $item['kategori'] }}</td>
                            <td>{{ $item['tanggal_surat'] }}</td>
                            <td>{{ $item['jenis_surat'] }}</td>
                            {{-- <td>
                            <span class='rounded-pill bg-green px-2 py-1'>
                                surat masuk
                            </span>
                        </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
