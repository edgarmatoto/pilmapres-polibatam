@extends('pages.layouts.admin.master')

@section('title')
    Matrik - Sistem Rekomendasi Pemilihan Mahasiswa Berprestasi Politeknik Negeri Batam
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
            <h3>Matrik</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Matriks Keputusan (X) &amp; Ternormalisasi (R)</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p class="card-text">Melakukan perhitungan normalisasi untuk mendapatkan matriks nilai ternormalisasi (R), dengan ketentuan :
                                    Untuk normalisai nilai, jika faktor/attribute kriteria bertipe cost maka digunakan rumusan:
                                    Rij = ( min{Xij} / Xij)
                                    sedangkan jika faktor/attribute kriteria bertipe benefit maka digunakan rumusan:
                                    Rij = ( Xij/max{Xij} )</p>
                            </div>
                            <button
                                type="button"
                                class="btn btn-outline-success btn-sm m-2"
                                data-bs-toggle="modal"
                                data-bs-target="#inlineForm"
                            >
                                Isi Nilai Alternatif
                            </button>
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <caption>
                                        Matrik Keputusan(X)
                                    </caption>
                                    <tr>
                                        <th rowspan='{{ $alternatif->count() + 2 }}'>Alternatif</th>
                                        <th colspan='{{ $kriteria->count() }}'>Kriteria</th>
                                    </tr>
                                    <tr>
                                        @forelse ($kriteria as $item)
                                            <th {{ $loop->last ? 'colspan="2"' : '' }}>{{ $item->nama }}</th>
                                        @empty
                                            <th>...</th>
                                        @endforelse
                                    </tr>
                                    <tbody id="data">
                                        @include('pages.admin.matrik.data_x')
                                    </tbody>
                                </table>

                                <table class="table table-striped mb-0">
                                    <caption>
                                        Matrik Ternormalisasi (R)
                                    </caption>
                                    <tr>
                                        <th rowspan='{{ $alternatif->count() + 2 }}'>Alternatif</th>
                                        <th colspan='{{ $kriteria->count() }}'>Kriteria</th>
                                    </tr>
                                    <tr>
                                        @forelse ($kriteria as $item)
                                            <th>{{ $item->nama }}</th>
                                        @empty
                                            <th>...</th>
                                        @endforelse
                                    </tr>
                                    <tbody id="dataR">
                                        @include('pages.admin.matrik.data_r')
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @include('pages.layouts.admin.components.footer')
    </div>

    <div
        class="modal fade text-left"
        id="inlineForm"
        tabindex="-1"
        role="dialog"
        aria-labelledby="myModalLabel33"
        aria-hidden="true"
    >
        <div
            class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
            role="document"
        >
            <div class="modal-content">
                <div class="modal-header">
                    <h4
                        class="modal-title"
                        id="myModalLabel33"
                    >Isi Nilai Kandidat </h4>
                    <button
                        type="button"
                        class="close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    >
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form
                    action="matrik-simpan.php"
                    method="POST"
                >
                    <div class="modal-body">
                        <label>Name: </label>
                        <div class="form-group">
                            <select
                                class="form-control form-select"
                                name="id_alternative"
                            >
                                <option value="">...</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-body">
                        <label>Criteria: </label>
                        <div class="form-group">
                            <select
                                class="form-control form-select"
                                name="id_criteria"
                            >
                                <option value="">...</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-body">
                        <label>Value: </label>
                        <div class="form-group">
                            <input
                                type="text"
                                name="value"
                                placeholder="value..."
                                class="form-control"
                                required
                            >
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-light-secondary"
                            data-bs-dismiss="modal"
                        >
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button
                            type="submit"
                            name="submit"
                            class="btn btn-primary ml-1"
                        >
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Simpan</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
