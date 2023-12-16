@extends('pages.layouts.admin.master')

@section('title')
    Bobot & Kriteria - Sistem Rekomendasi Pemilihan Mahasiswa Berprestasi Politeknik Negeri Batam
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
            <h3>Bobot Kriteria</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title">Tabel Bobot Kriteria</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p class="card-text">Pengambil keputusan memberi bobot preferensi dari setiap kriteria dengan
                                    masing-masing jenisnya (keuntungan/benefit atau biaya/cost):</p>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <caption>
                                        Tabel Kriteria C<sub>i</sub>
                                    </caption>
                                    <tr>
                                        <th>No</th>
                                        <th>Simbol</th>
                                        <th>Kriteria</th>
                                        <th>Bobot</th>
                                        <th colspan="2">Atribut</th>
                                    </tr>
                                    <tr>
                                        <td class='right'>...</td>
                                        <td class='center'>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>
                                            <a
                                                href='bobot-edit.php?id={$row->id_criteria}'
                                                class='btn btn-info btn-sm'
                                            >Edit</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @include('pages.layouts.admin.components.footer')
    </div>
@endsection
