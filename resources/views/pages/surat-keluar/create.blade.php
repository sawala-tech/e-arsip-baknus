@extends('components.layout.main.app')
@section('title', 'E-Arsip || Tambah Surat keluar')
@section('content')
    <div class="container-fluid p-0">
        <div>
            <a href="/surat-keluar" class="text-decoration-none text-body align-items-center mb-4 d-inline-flex">
                <i class="fas fa-chevron-left fa-lg"></i>
                <h3 class="fw-bolder mb-0 ml-3">Tambah Surat keluar</h3>
            </a>
        </div>
        <div class="card border-0 rounded-lg p-4 shadow-sm">
            <form action="{{ route('surat-keluar.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group row">
                            <label for="nomor_surat" class="col-sm-2 col-form-label">Nomor Surat</label>
                            <div class="col-sm-10">
                                <input type="text" name="nomor_surat" class="form-control @error('nomor_surat') is-invalid @enderror" id="nomor_surat"
                                    placeholder="Nomor Surat..." value="{{old('nomor_surat')}}">
                                @error('nomor_surat')
                                    <div class="invalid-feedback">
                                        {{ $errors->first('nomor_surat')  }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="judul_surat" class="col-sm-2 col-form-label">Judul Surat</label>
                            <div class="col-sm-10">
                                <input type="text" name="judul_surat" class="form-control @error('judul_surat') is-invalid @enderror" id="judul_surat"
                                    placeholder="Judul Surat..." value="{{old('judul_surat')}}">
                                @error('judul_surat')
                                    <div class="invalid-feedback">
                                        {{ $errors->first('judul_surat')  }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="judul_surat" class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10">
                                <select class="custom-select @error('kategori') is-invalid @enderror" name="kategori">
                                    <option @if (old('kategori')=='') selected @endif>Pilih</option>
                                    <option value="permohonan" @if (old('kategori')=='permohonan') selected @endif>Permohonan</option>
                                    <option value="undangan" @if (old('kategori')=='undangan') selected @endif>Undangan</option>
                                    <option value="pemberitahuan" @if (old('kategori')=='pemberitahuan') selected @endif>Pemberitahuan</option>
                                    <option value="permintaan" @if (old('kategori')=='permintaan') selected @endif>Permintaan</option>
                                    <option value="tugas" @if (old('kategori')=='tugas') selected @endif>Tugas</option>
                                    <option value="rekomendasi" @if (old('kategori')=='rekomendasi') selected @endif>Rekomendasi</option>
                                    <option value="pengantar" @if (old('kategori')=='pengantar') selected @endif>Pengantar</option>
                                </select>
                                @error('kategori')
                                    <div class="invalid-feedback">
                                        {{ $errors->first('kategori')  }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tujuan_surat" class="col-sm-2 col-form-label">Tujuan Surat</label>
                            <div class="col-sm-10">
                                <input type="text" name="tujuan_surat" class="form-control @error('tujuan_surat') is-invalid @enderror" id="tujuan_surat"
                                    placeholder="Tujuan Surat..." value="{{old('tujuan_surat')}}">
                                @error('tujuan_surat')
                                    <div class="invalid-feedback">
                                        {{ $errors->first('tujuan_surat')  }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal_keluar" class="col-sm-2 col-form-label">Tanggal Keluar</label>
                            <div class="col-sm-10">
                                <input type="date" name="tanggal_keluar" class="form-control @error('tanggal_keluar') is-invalid @enderror" id="tanggal_keluar" value="{{old('tanggal_keluar')}}">
                                @error('tanggal_keluar')
                                    <div class="invalid-feedback">
                                        {{ $errors->first('tanggal_keluar')  }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-10">
                                <textarea name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" id="exampleFormControlTextarea1" rows="3"
                                    placeholder="Keterangan...">{{old('keterangan')}}</textarea>
                                @error('keterangan')
                                    <div class="invalid-feedback">
                                        {{ $errors->first('keterangan')  }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="customFile" class="col-sm-2 col-form-label">File</label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('lampiran') is-invalid @enderror" id="customFile" name="lampiran">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                    @error('lampiran')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('lampiran')  }}
                                        </div>
                                    @enderror
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
