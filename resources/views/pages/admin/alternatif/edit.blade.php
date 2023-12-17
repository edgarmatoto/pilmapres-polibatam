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
                                    action="{{ route('admin.alternatif.update', ['alternatif' => $alternatif]) }}"
                                    method="POST"
                                    enctype="multipart/form-data"
                                >
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label
                                            for="nama"
                                            class="form-label"
                                        >Nama Lengkap</label>
                                        <input
                                            type="text"
                                            class="@error('nama') is-invalid @enderror form-control"
                                            id="nama"
                                            name="nama"
                                            value="{{ old('nama', $alternatif->mahasiswa?->nama) }}"
                                        >
                                        @error('nama')
                                            <div class="text-danger small">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label
                                            for="nim"
                                            class="form-label"
                                        >NIM</label>
                                        <input
                                            type="text"
                                            class="@error('nim') is-invalid @enderror form-control"
                                            id="nim"
                                            name="nim"
                                            value="{{ old('nim', $alternatif->mahasiswa?->nim) }}"
                                        >
                                        @error('nim')
                                            <div class="text-danger small">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label
                                            for="jenisPerlombaan"
                                            class="form-label"
                                        >Jenis Perlombaan</label>
                                        <input
                                            type="text"
                                            class="@error('jenis_perlombaan') is-invalid @enderror form-control"
                                            id="jenisPerlombaan"
                                            name="jenis_perlombaan"
                                            value="{{ old('jenis_perlombaan', $alternatif->jenis_perlombaan) }}"
                                        >
                                        @error('jenis_perlombaan')
                                            <div class="text-danger small">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label
                                            for="tingkatPerlombaan"
                                            class="form-label"
                                        >Tingkat Perlombaan</label>
                                        <select
                                            id="tingkatPerlombaan"
                                            class="@error('tingkat_perlombaan') is-invalid @enderror form-select"
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
                                        @error('tingkat_perlombaan')
                                            <div class="text-danger small">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label
                                            for="capaianPrestasi"
                                            class="form-label"
                                        >Capaian Prestasi</label>
                                        <input
                                            type="text"
                                            class="@error('capaian_prestasi') is-invalid @enderror form-control"
                                            id="capaianPrestasi"
                                            name="capaian_prestasi"
                                            value="{{ old('capaian_prestasi', $alternatif->capaian_prestasi) }}"
                                        >
                                        @error('capaian_prestasi')
                                            <div class="text-danger small">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label
                                            for="tmptPerlombaan"
                                            class="form-label"
                                        >Tempat Perlombaan</label>
                                        <input
                                            type="text"
                                            class="@error('tmpt_perlombaan') is-invalid @enderror form-control"
                                            id="tmptPerlombaan"
                                            name="tmpt_perlombaan"
                                            value="{{ old('tmpt_perlombaan', $alternatif->tmpt_perlombaan) }}"
                                        >
                                        @error('tmpt_perlombaan')
                                            <div class="text-danger small">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label
                                            for="tglPerlombaan"
                                            class="form-label"
                                        >Tanggal Perlombaan</label>
                                        <input
                                            type="date"
                                            class="@error('tgl_perlombaan') is-invalid @enderror form-control"
                                            id="tglPerlombaan"
                                            name="tgl_perlombaan"
                                            value="{{ old('tgl_perlombaan', $alternatif->tgl_perlombaan) }}"
                                        >
                                        @error('tgl_perlombaan')
                                            <div class="text-danger small">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div style="margin-bottom: 55px;">
                                        <label
                                            for="berkas"
                                            class="form-label"
                                        >Berkas</label>
                                        <input
                                            onchange="fileChosen.textContent = this.files[0].name; return false;"
                                            type="file"
                                            id="berkas"
                                            name="berkas"
                                            hidden
                                        >
                                        <label
                                            for="berkas"
                                            class="d-flex align-items-center gap-2 @error('berkas') border border-danger @enderror"
                                            style="
                                                border: 1px solid #dce7f1;
                                                border-radius: 5px;
                                                cursor: pointer;
                                            "
                                        >
                                            <span
                                                class="d-inline-block h-100 py-2 px-2 text-nowrap @error('berkas') bg-danger @enderror"
                                                style="background-color: #dce7f1;"
                                            >Choose File</span>
                                            <span
                                                id="fileChosen"
                                                class="d-inline-block text-truncate"
                                                style="max-width: 100%;"
                                            >{{ $alternatif->nama_berkas }}</span>
                                        </label>
                                        @error('berkas')
                                            <div class="text-danger small">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <button
                                            type="submit"
                                            class="btn btn-primary ml-1"
                                        >
                                            <i class="bx bx-check d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Simpan Perubahan</span>
                                        </button>
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
