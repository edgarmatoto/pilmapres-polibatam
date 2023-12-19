@extends('pages.layouts.admin.master')

@section('title')
    {{ $kriteria->nama }} | Edit Bobot & Kriteria - Sistem Rekomendasi Pemilihan Mahasiswa Berprestasi Politeknik Negeri Batam
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
            <h3>Bobot & Kriteria Edit</h3>
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
                                    action="{{ route('admin.bobot-kriteria.update', ['kriteria' => $kriteria]) }}"
                                    method="POST"
                                    enctype="multipart/form-data"
                                >
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label
                                            for="kriteria"
                                            class="form-label"
                                        >Kriteria</label>
                                        <input
                                            type="text"
                                            class="@error('nama') is-invalid @enderror form-control"
                                            id="kriteria"
                                            name="nama"
                                            value="{{ old('nama', $kriteria->nama) }}"
                                        >
                                        @error('nama')
                                            <div class="text-danger small">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label
                                            for="bobot"
                                            class="form-label"
                                        >Bobot</label>
                                        <input
                                            type="number"
                                            class="@error('bobot') is-invalid @enderror form-control"
                                            id="bobot"
                                            name="bobot"
                                            step="0.1"
                                            value="{{ old('bobot', $kriteria->bobot) }}"
                                        >
                                        @error('bobot')
                                            <div class="text-danger small">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div style="margin-bottom: 55px;">
                                        <label
                                            for="atribut"
                                            class="form-label"
                                        >Atribut</label>
                                        <select
                                            id="atribut"
                                            class="@error('atribut') is-invalid @enderror form-select"
                                            aria-label="Default select example"
                                            name="atribut"
                                        >
                                            <option
                                                value="cost"
                                                {{ old('atribut', $kriteria->atribut) == 'cost' ? 'selected' : '' }}
                                            >Cost</option>
                                            <option
                                                value="benefit"
                                                {{ old('atribut', $kriteria->atribut) == 'benefit' ? 'selected' : '' }}
                                            >Benefit</option>
                                        </select>
                                        @error('atribut')
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
