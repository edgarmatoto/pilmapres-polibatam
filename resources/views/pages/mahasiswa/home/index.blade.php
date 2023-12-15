@extends('pages.layouts.mahasiswa.master')

@section('title')
    Home Page - Sistem Rekomendasi Pemilihan Mahasiswa Berprestasi Politeknik Negeri Batam
@endsection

@section('content')
    <div
        class="pt-3 py-4"
        style="min-height: calc(100vh - 100px); background-color: #EDEDED;"
    >
        <div
            class="container p-2 p-md-3"
            style="background-color: white;"
        >
            <section class="welcome mb-3">
                <div
                    class="p-3 p-md-5"
                    style="background-color: #7EA7E3;"
                >
                    <p class="h2 text-white lh-base">Selamat Datang di Sistem Rekomendasi Pemilihan Mahasiswa Berprestasi Politeknik Negeri Batam</p>
                </div>
            </section>
            <section class="mb-3">
                <div
                    class="px-3 py-2"
                    style="background-color: #F2EBA6;"
                >
                    <p class="m-0">Silahkan update data diri anda terlebih dahulu di menu <span class="fw-bold">PROFILE</span> sebelum melakukan pengajuan, sebagai pemutakhiran data untuk berbagai kebutuhan. Terima Kasih</p>
                </div>
            </section>
            <hr>
            <section class="mb-3">
                <p class="h2 fw-bold mb-3">Mahasiswa Berprestasi</p>
                <img
                    class="img-fluid"
                    src="{{ asset('assets/images/img_01.png') }}"
                    alt="img 01"
                >
            </section>
        </div>
    </div>
@endsection
