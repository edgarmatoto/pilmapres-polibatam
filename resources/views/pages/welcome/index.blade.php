@extends('pages.layouts.guest.master')

@section('title')
    Sistem Rekomendasi Pemilihan Mahasiswa Berprestasi Politeknik Negeri Batam
@endsection

@push('styles')
    <style>
        /* Medium devices (tablets, 768px and up) */
        @media (min-width: 768px) {
            .bg-header {
                width: 60%;
            }
        }
    </style>
@endpush

@include('pages.layouts.guest.components.navbar')

@section('content')
    <section
        class="pt-3 py-md-4 position-relative"
        style="min-height: calc(100vh - 170px);"
    >
        <div class="container">
            <div class="row gy-3">
                <div class="col-xl-8">
                    <div class="d-flex justify-content-center justify-content-xl-end">
                        <h1 class="d-inline-block text-center text-xl-start pe-xl-5">
                            <span class="h2 d-block">
                                Sistem Rekomendasi Pemilihan
                            </span>
                            <span
                                style="font-family: 'Poetsen One', sans-serif;"
                                class="fw-medium"
                            >
                                MAHASISWA BERPRESTASI
                            </span>
                            <span class="h2 d-block">
                                Politeknik Negeri Batam
                            </span>
                        </h1>
                    </div>
                </div>
                <div class="col-xl">
                    <div class="d-flex justify-content-center justify-content-xl-start">
                        <div
                            class="card mb-5"
                            style="width: 18rem;"
                        >
                            <div class="py-4 px-2">
                                <div class="text-center">
                                    <img
                                        style="width: 100px;"
                                        src="{{ asset('assets/images/logo_poltek.png') }}"
                                        class="card-img-top img-fluid"
                                        alt="logo poltek"
                                    >
                                    <p class="mt-3 fw-bold">Masuk ke Akun Anda</p>
                                </div>
                                <div class="card-body">
                                    <form
                                        action="{{ route('authentication') }}"
                                        method="post"
                                    >
                                        @csrf
                                        <div class="mb-3">
                                            <label
                                                style="color: #00000087;"
                                                for="nim"
                                                class="form-label mb-0"
                                            >NIM</label>
                                            <input
                                                type="text"
                                                class="@error('nim') is-invalid @enderror form-control rounded-0 shadow-none px-0 border-0"
                                                name="nim"
                                                id="nim"
                                                style="border-bottom: 1px solid #00000040 !important;"
                                            >
                                            @error('nim')
                                                <div class="text-danger small">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                style="color: #00000087;"
                                                for="password"
                                                class="form-label mb-0"
                                            >Password</label>
                                            <input
                                                type="password"
                                                class="@error('password') is-invalid @enderror form-control rounded-0 shadow-none px-0 border-0"
                                                name="password"
                                                id="password"
                                                style="border-bottom: 1px solid #00000040 !important;"
                                            >
                                            @error('password')
                                                <div class="text-danger small">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-4 text-center">
                                            <button
                                                type="submit"
                                                class="rounded-3 border-0 text-white px-5 py-1"
                                                style="background-color: #36CE00;"
                                            >
                                                Masuk
                                            </button>
                                        </div>
                                        <div class="mb-3 text-center">
                                            <a
                                                href="{{ route('register.index') }}"
                                                role="button"
                                                class="rounded-3 px-5 py-1 bg-transparent fw-bold text-decoration-none"
                                                style="color: #009DCE; border: 1px solid #009DCE;"
                                            >
                                                Daftar
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-absolute bottom-0 start-0 z-n1">
            <img
                class="img-fluid bg-header"
                src="{{ asset('assets/images/bg_poltek.png') }}"
                alt="bg_poltek"
            >
        </div>
    </section>
    <section>
        <div
            class="text-center py-3 text-white"
            style="background: linear-gradient(to bottom, #5080B9, #1F68BD);"
        >
            <a
                href="{{ route('ketentuan-privasi') }}"
                class="text-white text-decoration-none"
            >
                Ketentuan
                <span class="mx-1">|</span>
                Privasi
            </a>
        </div>
    </section>
@endsection
