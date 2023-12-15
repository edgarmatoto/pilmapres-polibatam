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

@section('content')
    <div class="container px-0">
        <section
            class="pt-3 py-md-4 position-relative"
            style="min-height: calc(100vh - 280px); border: 2px solid;"
        >
            <div class="container">
                <div class="row gy-3">
                    <div
                        class="col-xl-8"
                        style="border: 2px solid red"
                    >
                        <div
                            class="d-flex justify-content-center justify-content-xl-end"
                            style="border: 2px solid red;"
                        >
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
                    <div class="col-xl mx-auto">
                        <div
                            class="d-flex justify-content-center justify-content-xl-start"
                            style="border: 2px solid blue"
                        >
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
                                        <p class="mt-3">Masuk ke Akun Anda</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label
                                                style="color: #00000087;"
                                                for="nim"
                                                class="form-label mb-0"
                                            >NIM</label>
                                            <input
                                                type="text"
                                                class="form-control rounded-0 shadow-none px-0 border-0"
                                                name="nim"
                                                id="nim"
                                                style="border-bottom: 1px solid #00000040 !important;"
                                            >
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                style="color: #00000087;"
                                                for="password"
                                                class="form-label mb-0"
                                            >Password</label>
                                            <input
                                                type="text"
                                                class="form-control rounded-0 shadow-none px-0 border-0"
                                                name="password"
                                                id="password"
                                                style="border-bottom: 1px solid #00000040 !important;"
                                            >
                                        </div>
                                        <div class="mb-3 text-center">
                                            <button
                                                type="submit"
                                                class="rounded-3 border-0 text-white px-5 py-1"
                                                style="background-color: #36CE00;"
                                            >
                                                Masuk
                                            </button>
                                        </div>
                                        <div class="mb-5 text-end">
                                            <a
                                                href="#"
                                                class="text-decoration-none"
                                                style="color: #009DCE;"
                                            >
                                                Lupa Password?
                                            </a>
                                        </div>
                                        <div class="mb-3 text-center">
                                            <button
                                                type="submit"
                                                class="rounded-3 px-5 py-1 bg-transparent fw-bold"
                                                style="color: #009DCE; border: 1px solid #009DCE;"
                                            >
                                                Daftar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="position-absolute bottom-0 start-0 z-n1"
                    style="border: 2px solid green;"
                >
                    <img
                        class="img-fluid bg-header"
                        src="{{ asset('assets/images/bg_poltek.png') }}"
                        alt="bg_poltek"
                    >
                </div>
            </div>
        </section>
    </div>
@endsection
