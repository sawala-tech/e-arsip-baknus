@extends('components.layout.main.app')
@section('title', 'E-Arsip || Tambah Surat Masuk')
@section('content')
    <div class="container-fluid p-0">
        <div>
            <a href="/surat-masuk" class="text-decoration-none text-body align-items-center mb-4 d-inline-flex">
                <i class="fas fa-chevron-left fa-lg"></i>
                <h3 class="fw-bolder mb-0 ml-3">Tambah Surat Masuk</h3>
            </a>
        </div>
        <div class="card border-0 rounded-lg p-4 shadow-sm">
            <form action="{{ route('surat-masuk.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group row">
                            <label for="nomor_surat" class="col-sm-2 col-form-label">Nomor Surat</label>
                            <div class="col-sm-10">
                                <input type="text" name="nomor_surat" class="form-control" id="nomor_surat"
                                    placeholder="Nomor Surat...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="judul_surat" class="col-sm-2 col-form-label">Judul Surat</label>
                            <div class="col-sm-10">
                                <input type="text" name="judul_surat" class="form-control" id="judul_surat"
                                    placeholder="Judul Surat...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="judul_surat" class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10">
                                <select class="custom-select" name="kategori">
                                    <option selected>Pilih</option>
                                    <option value="permohonan">Permohonan</option>
                                    <option value="undangan">Undangan</option>
                                    <option value="pemberitahuan">Pemberitahuan</option>
                                    <option value="permintaan">Permintaan</option>
                                    <option value="tugas">Tugas</option>
                                    <option value="rekomendasi">Rekomendasi</option>
                                    <option value="pengantar">Pengantar</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="asal_surat" class="col-sm-2 col-form-label">Asal Surat</label>
                            <div class="col-sm-10">
                                <input type="text" name="asal_surat" class="form-control" id="asal_surat"
                                    placeholder="Asal Surat...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal_masuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                            <div class="col-sm-10">
                                <input type="date" name="tanggal_masuk" class="form-control" id="tanggal_masuk">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-10">
                                <textarea name="keterangan" class="form-control" id="keterangan" id="exampleFormControlTextarea1" rows="3"
                                    placeholder="Keterangan..."></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="customFile" class="col-sm-2 col-form-label">File</label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="lampiran">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-3">
                        
                    </div> --}}
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <a href="/surat-masuk" class="btn btn-outline-gray">Cancel</a>
                    <button type="submit" class="btn bg-sea text-white">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
