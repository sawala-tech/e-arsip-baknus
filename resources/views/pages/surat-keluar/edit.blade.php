
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
                                <input type="text" name="nomor_surat" class="form-control @error('nomor_surat') is-invalid @enderror" id="nomor_surat"
                                    value="{{ (old('nomor_surat'))?old('nomor_surat'):$nomor_surat }}" placeholder="Nomor Surat...">
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
                                    value="{{ (old('judul_surat'))?old('judul_surat'):$judul_surat }}" placeholder="Judul Surat...">
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
                                    @foreach ($datakategory as $category)
                                        <option value="{{ $category }}" {{ ($category == $kategori && old('kategori')=='' || old('kategori')==$category)? 'selected' : '' }}>
                                            {{ $category }}</option>
                                    @endforeach
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
                                    value="{{ (old('tujuan_surat'))?old('tujuan_surat'):$tujuan_surat }}" placeholder="Tujuan Surat...">
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
                                <input type="date" name="tanggal_keluar" class="form-control @error('tanggal_keluar') is-invalid @enderror" id="tanggal_keluar"
                                    value="{{ (old('tanggal_keluar'))?old('tanggal_keluar'):$tanggal_keluar }}">
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
                                    placeholder="Keterangan...">{{ (old('keterangan'))?old('keterangan'):$keterangan }}</textarea>
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
                                    <label class="custom-file-label" for="customFile" value="{{ $file_surat }}">Choose
                                        file</label>
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
