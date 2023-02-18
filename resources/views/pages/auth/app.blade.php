@extends('components.layout.auth.app')
@section('title', 'E-Arsip || Masuk')
@section('content')
    @if (session('error'))
        <div class="alert alert-success" role="alert">
            {{ session('error') }}
        </div>
    @endif
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="card shadow-lg border px-4 py-4 bg-white align-items-center" style="width: 393px;">
            <div class="d-flex align-items-center justify-content-center">
                <img src="{{ asset('images/logo.png') }}" class="card-img-top w-50 h-50" alt="...">
            </div>
            <h1 class="fs-5 fw-bolder text-body my-4 text-align-center">Masuk</h1>
            <form class="w-100" method="POST" action="/login">
                @csrf
                <div class="mb-3">
                    <input type="email" name="email" class="form-control rounded" placeholder="Email">
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control rounded" placeholder="Kata Sandi">
                </div>
                <a href="dashboard">
                    <button type="submit" class="btn bg-sea text-white w-100">Masuk</button>
                </a>
            </form>
        </div>
    </div>
@endsection
