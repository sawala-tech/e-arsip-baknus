@extends('components.layout.main.app')
@section('title', 'E-Arsip || Dashboard')
@section('content')
    <h2 class="fs-3 fw-bolder">Dashboard</h2>
    <p>Senin, 26 September 2022</p>

    <div class="row mt-5">
        <div class="col-6 px-2">
            <div class="card border-0 p-3 flex-row d-flex align-items-center shadow-sm rounded-lg">
                <div class="bg-sea p-3 rounded">
                    <i class="fas fa-download fa-lg text-white"></i>
                </div>
                <div class="mx-2">
                    <h3 class="fs-6 text-secondary mb-0">Surat Masuk</h3>
                    <p class="m-0 fs-3 fw-bolder">19</p>
                </div>
            </div>
        </div>
        <div class="col-6 px-2">
            <div class="card border-0 p-3 flex-row d-flex align-items-center shadow-sm rounded-lg">
                <div class="bg-salmon p-3 rounded">
                    <i class="fas fa-paper-plane fa-lg text-white"></i>
                </div>
                <div class="mx-2">
                    <h3 class="fs-6 text-secondary mb-0">Surat Keluar</h3>
                    <p class="m-0 fs-3 fw-bolder">19</p>
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
                    <tr>
                        <td>1</td>
                        <td>R/01/KP01/VI/2023</td>
                        <td>Permohonan Narasumber Workshop</td>
                        <td>Undangan</td>
                        <td>13-02-2023</td>
                        <td>
                            <span class='rounded-pill bg-green px-2 py-1'>
                                surat masuk
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>R/01/KP01/VI/2023</td>
                        <td>Rapat Guru</td>
                        <td>Undangan</td>
                        <td>13-02-2023</td>
                        <td>
                            <span class='rounded-pill bg-yellow px-2 py-1'>
                                surat keluar
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>R/01/KP01/VI/2023</td>
                        <td>Rapat Guru</td>
                        <td>Undangan</td>
                        <td>13-02-2023</td>
                        <td>
                            <span class='rounded-pill bg-green px-2 py-1'>
                                surat masuk
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>R/01/KP01/VI/2023</td>
                        <td>Rapat Guru</td>
                        <td>Undangan</td>
                        <td>13-02-2023</td>
                        <td>
                            <span class='rounded-pill bg-yellow px-2 py-1'>
                                surat keluar
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>R/01/KP01/VI/2023</td>
                        <td>Rapat Guru</td>
                        <td>Undangan</td>
                        <td>13-02-2023</td>
                        <td>
                            <span class='rounded-pill bg-green px-2 py-1'>
                                surat masuk
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
