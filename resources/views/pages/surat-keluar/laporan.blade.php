@extends('components.layout.main.app')
@section('title', 'E-Arsip || Laporan Surat Keluar')
@section('content')
    @if (session('message'))
        <div>
            {{ session('message') }}
        </div>
    @endif

    <h2 class="fs-3 fw-bolder">Laporan Surat Keluar</h2>
    <div class="container-fluid p-0 my-5">
        <div class="justify-content-between mb-3 d-flex">
            <a href="/export/surat-keluar"
                class="rounded-lg bg-sea p-2 text-white align-items-center d-flex border-0 text-decoration-none"
                id='exportLaporanKeluar'>
                <i class="fas fa-download"></i>
                <span class="px-2">
                    Export Data
                </span>
            </a>

            <form action="" class="w-auto position-relative">
                <i class="fas fa-search fa-sm position-absolute mt-2 pt-1 ml-3 text-secondary"></i>
                <input type="text" name="search" class="form-control pl-5 text-secondary"
                    id="search-input"placeholder="Cari Surat Keluar" />
        </div>
        <div class="bg-white rounded-lg shadow-sm border-0 px-2 pb-2">
            <table id="table_data" class="table w-100">
                <thead class='text-secondary'>
                    <tr>
                        <th class="fw-normal fs-6 text-uppercase">#</th>
                        <th class="fw-normal fs-6 text-uppercase">Nomor surat</th>
                        <th class="fw-normal fs-6 text-uppercase">judul surat</th>
                        <th class="fw-normal fs-6 text-uppercase">kategori</th>
                        <th class="fw-normal fs-6 text-uppercase">tujuan surat</th>
                        <th class="fw-normal fs-6 text-uppercase">Tanggal diterima</th>
                        <th class="fw-normal fs-6 text-uppercase">keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($suratKeluar as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nomor_surat }}</td>
                            <td>{{ $item->judul_surat }}</td>
                            <td>{{ $item->kategori }}</td>
                            <td>{{ $item->tujuan_surat }}</td>
                            <td>{{ $item->tanggal_keluar }}</td>
                            <td>{{ $item->keterangan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
