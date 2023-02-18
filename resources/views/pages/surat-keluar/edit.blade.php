{{-- 
@if (session('message'))
        <div>
            {{ session('message') }}
        </div>
        
@endif
    <form action="{{ route('surat-keluar.update', $id) }}" method="POST" enctype="multipart/form-data">
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
        <label>tanggal keluar</label>
        <input type="date" name="tanggal_keluar" value="{{ $tanggal_keluar }}">
        <br>
        <label>tujuan surat</label>
        <input type="text" name="tujuan_surat" value="{{ $tujuan_surat }}">
        <br>
        <label>keterangan</label>
        <input type="text" name="keterangan" value="{{ $keterangan }}">
        <br>
        <label>file surat</label>
        <input type="file" name="lampiran" value="{{ $file_surat }}">
        <br>
        <button type="submit">Submit</button>
    </form>
--}}

@extends('components.layout.main.app')
@section('title', 'E-Arsip || Edit Surat Keluar')
@section('content')
    <div class="container-fluid p-0">
        <div>
            <a href="/surat-keluar" class="text-decoration-none text-body align-items-center mb-4 d-inline-flex">
                <i class="fas fa-chevron-left fa-lg"></i>
                <h3 class="fw-bolder mb-0 ml-3">Edit Surat Keluar</h3>
            </a>
        </div>
        @if (session('message'))
            <div>
                {{ session('message') }}
            </div>
        @endif
        <div class="card border-0 rounded-lg p-4 shadow-sm">
            <form action="{{ route('surat-keluar.update', $id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-12">
                        <div class="form-group row">
                            <label for="nomor_surat" class="col-sm-2 col-form-label">Nomor Surat</label>
                            <div class="col-sm-10">
                                <input type="text" name="nomor_surat" class="form-control" id="nomor_surat"
                                    value="{{ $nomor_surat }}" placeholder="Nomor Surat...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="judul_surat" class="col-sm-2 col-form-label">Judul Surat</label>
                            <div class="col-sm-10">
                                <input type="text" name="judul_surat" class="form-control" id="judul_surat"
                                    value="{{ $judul_surat }}" placeholder="Judul Surat...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="judul_surat" class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10">
                                <select class="custom-select" name="kategori">
                                    @foreach ($datakategory as $category)
                                        <option value="{{ $category }}" {{ $category == $kategori ? 'selected' : '' }}>
                                            {{ $category }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tujuan_surat" class="col-sm-2 col-form-label">Tujuan Surat</label>
                            <div class="col-sm-10">
                                <input type="text" name="tujuan_surat" class="form-control" id="tujuan_surat"
                                    value="{{ $tujuan_surat }}" placeholder="Tujuan Surat...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal_keluar" class="col-sm-2 col-form-label">Tanggal Keluar</label>
                            <div class="col-sm-10">
                                <input type="date" name="tanggal_keluar" class="form-control" id="tanggal_keluar"
                                    value="{{ $tanggal_keluar }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-10">
                                <textarea name="keterangan" class="form-control" id="keterangan" id="exampleFormControlTextarea1" rows="3"
                                    placeholder="Keterangan...">{{ $keterangan }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="customFile" class="col-sm-2 col-form-label">File</label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="lampiran">
                                    <label class="custom-file-label" for="customFile" value="{{ $file_surat }}">Choose
                                        file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-3">
                        
                    </div> --}}
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <a href="/surat-keluar" class="btn btn-outline-gray">Cancel</a>
                    <button type="submit" class="btn bg-sea text-white">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
