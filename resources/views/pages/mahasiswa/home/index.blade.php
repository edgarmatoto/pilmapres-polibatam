@extends('pages.layouts.mahasiswa.master')

@section('title')
    Home Page - Sistem Rekomendasi Pemilihan Mahasiswa Berprestasi Politeknik Negeri Batam
@endsection

@section('content')
    <section
        class="pt-3 py-4"
        style="min-height: calc(100vh - 280px); background-color: #EDEDED;"
    >
        <div class="container px-0">
            <div class="d-flex justify-content-center px-3">
                <div
                    class="card"
                    style="width: 25rem;"
                >
                    <div class="pt-4 px-2">
                        <p class="mt-3 text-center fw-bold h5">Ajukan Prestasi</p>
                        <div class="card-body">
                            <div class="mb-3">
                                <label
                                    style="color: #00000087;"
                                    for="nama"
                                    class="form-label mb-0"
                                >Nama Lengkap</label>
                                <input
                                    type="text"
                                    class="form-control rounded-0 shadow-none px-0 border-0"
                                    name="nama"
                                    id="nama"
                                    style="border-bottom: 1px solid #00000040 !important;"
                                >
                            </div>
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
                                    for="email"
                                    class="form-label mb-0"
                                >Email</label>
                                <input
                                    type="email"
                                    class="form-control rounded-0 shadow-none px-0 border-0"
                                    name="email"
                                    id="email"
                                    style="border-bottom: 1px solid #00000040 !important;"
                                >
                            </div>
                            <div class="mb-3">
                                <label
                                    style="color: #00000087;"
                                    for="noHp"
                                    class="form-label mb-0"
                                >No Hp</label>
                                <input
                                    type="text"
                                    class="form-control rounded-0 shadow-none px-0 border-0"
                                    name="no_hp"
                                    id="noHp"
                                    style="border-bottom: 1px solid #00000040 !important;"
                                >
                            </div>
                            <div class="mb-3">
                                <label class="form-label mb-1">Tanggal Lahir</label>
                                <div class="d-flex gap-3">
                                    <div>
                                        <label
                                            style="color: #00000087;"
                                            for="tgl"
                                            class="form-label mb-0"
                                        >Tanggal</label>
                                        <input
                                            type="text"
                                            class="form-control rounded-0 shadow-none px-0 border-0"
                                            name="tanggal"
                                            id="tgl"
                                            style="border-bottom: 1px solid #00000040 !important;"
                                        >
                                    </div>
                                    <div>
                                        <label
                                            style="color: #00000087;"
                                            for="bulan"
                                            class="form-label mb-0"
                                        >Bulan</label>
                                        <input
                                            type="text"
                                            class="form-control rounded-0 shadow-none px-0 border-0"
                                            name="bulan"
                                            id="bulan"
                                            style="border-bottom: 1px solid #00000040 !important;"
                                        >
                                    </div>
                                    <div>
                                        <label
                                            style="color: #00000087;"
                                            for="tahun"
                                            class="form-label mb-0"
                                        >Tahun</label>
                                        <input
                                            type="text"
                                            class="form-control rounded-0 shadow-none px-0 border-0"
                                            name="tahun"
                                            id="tahun"
                                            style="border-bottom: 1px solid #00000040 !important;"
                                        >
                                    </div>
                                </div>
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
                            <div class="mb-5 pt-3 text-center">
                                <button
                                    type="submit"
                                    class="rounded-3 border-0 text-white px-5 py-1 fw-bold"
                                    style="background-color: #0094FF;"
                                >
                                    Lanjutkan
                                </button>
                            </div>
                            <div class="mb-3 text-center">
                                Sudah Punya Akun?
                                <a
                                    href="{{ route('welcome') }}"
                                    class="text-decoration-none"
                                    style="color: #009DCE;"
                                >
                                    Masuk
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
