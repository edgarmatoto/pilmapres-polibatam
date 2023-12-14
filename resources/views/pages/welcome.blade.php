@extends('pages.layouts.guest.master')

@section('title')
    Sistem Rekomendasi Pemilihan Mahasiswa Berprestasi Politeknik Negeri Batam
@endsection

@section('content')
    <div class="container">
        <section class="pt-3 pt-md-4">
            <div class="row">
                <div
                    class="col-md-8"
                    style="border: 2px solid red"
                >
                    <div
                        class="d-flex justify-content-md-end"
                        style="min-height: calc(100vh - 195px);"
                    >
                        <h1
                            class="d-inline-block pe-md-5"
                            style="border: 2px solid red"
                        >
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
                <div
                    class="col-md"
                    style="border: 2px solid blue"
                ></div>
            </div>
        </section>
    </div>
@endsection
