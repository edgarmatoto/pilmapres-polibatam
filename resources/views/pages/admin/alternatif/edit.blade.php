@extends('pages.layouts.admin.master')

@section('title')
    {{ $alternatif->mahasiswa->nama }} | Edit Alternatif - Sistem Rekomendasi Pemilihan Mahasiswa Berprestasi Politeknik Negeri Batam
@endsection

@section('content')
    <div id="main">
        <header class="mb-3">
            <a
                href="#"
                class="burger-btn d-block d-xl-none"
            >
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
        <div class="page-heading">
            <h3>Alternatif Edit</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Data</h4>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form
                                    action="alternatif-edit-act.php"
                                    method="POST"
                                >
                                    <div class="mb-3">
                                        <label
                                            for="nama"
                                            class="form-label"
                                        >Nama Lengkap</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="nama"
                                            name="nama"
                                            value="{{ old('nama', $alternatif->mahasiswa?->nama) }}"
                                        >
                                    </div>
                                    <div class="mb-3">
                                        <label
                                            for="nim"
                                            class="form-label"
                                        >NIM</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="nim"
                                            name="nim"
                                            value="{{ old('nim', $alternatif->mahasiswa?->nim) }}"
                                        >
                                    </div>
                                    <div class="mb-3">
                                        <label
                                            for="jenisPerlombaan"
                                            class="form-label"
                                        >Jenis Perlombaan</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="jenisPerlombaan"
                                            name="jenis_perlombaan"
                                            value="{{ old('jenis_perlombaan', $alternatif->jenis_perlombaan) }}"
                                        >
                                    </div>
                                    <div class="mb-3">
                                        <label
                                            for="tingkatPerlombaan"
                                            class="form-label"
                                        >Tingkat Perlombaan</label>
                                        <select
                                            id="tingkatPerlombaan"
                                            class="form-select"
                                            aria-label="Default select example"
                                            name="tingkat_perlombaan"
                                        >
                                            <option
                                                value="internasional"
                                                {{ old('tingkat_perlombaan', $alternatif->tingkat_perlombaan) == 'internasional' ? 'selected' : '' }}
                                            >Internasional</option>
                                            <option
                                                value="nasional"
                                                {{ old('tingkat_perlombaan', $alternatif->tingkat_perlombaan) == 'nasional' ? 'selected' : '' }}
                                            >Nasional</option>
                                            <option
                                                value="kabupaten/kota"
                                                {{ old('tingkat_perlombaan', $alternatif->tingkat_perlombaan) == 'kabupaten/kota' ? 'selected' : '' }}
                                            >Kabupaten/Kota</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label
                                            for="capaianPrestasi"
                                            class="form-label"
                                        >Capaian Prestasi</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="capaianPrestasi"
                                            name="capaian_prestasi"
                                            value="{{ old('capaian_prestasi', $alternatif->capaian_prestasi) }}"
                                        >
                                    </div>
                                    <div class="mb-3">
                                        <label
                                            for="tmptPerlombaan"
                                            class="form-label"
                                        >Tempat Perlombaan</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="tmptPerlombaan"
                                            name="tmpt_perlombaan"
                                            value="{{ old('tmpt_perlombaan', $alternatif->tmpt_perlombaan) }}"
                                        >
                                    </div>
                                    <div class="mb-3">
                                        <label
                                            for="tglPerlombaan"
                                            class="form-label"
                                        >Tanggal Perlombaan</label>
                                        <input
                                            type="date"
                                            class="form-control"
                                            id="tglPerlombaan"
                                            name="tgl_perlombaan"
                                            value="{{ old('tgl_perlombaan', $alternatif->tgl_perlombaan) }}"
                                        >
                                    </div>
                                    <div class="mb-3">
                                        <label
                                            for="berkas"
                                            class="form-label"
                                        >Berkas</label>
                                        <input
                                            type="file"
                                            class="form-control"
                                            id="berkas"
                                            name="berkas"
                                        >
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @include('pages.layouts.admin.components.footer')
    </div>
@endsection
