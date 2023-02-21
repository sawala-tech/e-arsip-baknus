@extends('components.layout.main.app')
@section('title', 'E-Arsip || Surat Masuk')
@section('content')
    <div class="container-fluid p-0">
        <div class="d-print-none">
            <a href="/surat-masuk" class="text-decoration-none text-body align-items-center mb-4 d-inline-flex">
                <i class="fas fa-chevron-left fa-lg"></i>
                <h3 class="mb-0 ml-3">Detail Surat</h3>
            </a>
        </div>
        <div class="card border-0 rounded-lg p-4 shadow-sm" id="printableArea">
            <h4 class="text-capitalize mb-3">{{ $suratMasuk->judul_surat }}</h4>
            <div class="row w-100 border-bottom py-2 mt-2">
                <div class="col-2">Nomor Surat</div>
                <div class="col-10">{{ $suratMasuk->nomor_surat }}</div>
            </div>
            <div class="row w-100 border-bottom py-2 mt-2">
                <div class="col-2">Kategori</div>
                <div class="col-10">{{ $suratMasuk->kategori }}</div>
            </div>
            <div class="row w-100 border-bottom py-2 mt-2">
                <div class="col-2">Asal Surat</div>
                <div class="col-10">{{ $suratMasuk->asal_surat }}</div>
            </div>
            <div class="row w-100 border-bottom py-2 mt-2">
                <div class="col-2">Tanggal Diterima</div>
                <div class="col-10">{{ $suratMasuk->tanggal_masuk }}</div>
            </div>
            <div class="row w-100 border-bottom py-2 mt-2">
                <div class="col-2">Keterangan</div>
                <div class="col-10">{{ $suratMasuk->keterangan }}</div>
            </div>
            <div class="row w-100 border-bottom py-2 mt-2 d-print-none">
                <div class="col-2">File Surat</div>
                <div class="col-10">
                    <a href="{{ asset('/storage/lampiran/' . $suratMasuk->file_surat) }}" target="_blank">
                        {{ $suratMasuk->file_surat }}
                    </a>
                </div>
            </div>
            <div class="mt-4 d-print-none">
                <button class="bg-secondary p-2 text-white rounded-lg border-0 mr-1" onclick="window.print()">
                    <i class="fas fa-print"></i>
                    <span>Print</span>
                </button>
                <button onclick="window.location.href='{{ route('surat-masuk.edit', $suratMasuk->id) }}'"
                    class="bg-success p-2 text-white rounded-lg border-0 mr-1">
                    <i class="fas fa-edit"></i>
                    <span>Edit</span>
                </button>
                <form action="{{ route('surat-masuk.destroy', $suratMasuk->id) }}" method="POST" class="d-inline-flex">
                    @csrf
                    @method('DELETE')
                    <button class="bg-danger p-2 text-white rounded-lg border-0 mr-1" type="submit">
                        <i class="fas fa-trash-alt"></i>
                        <span>Hapus</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
