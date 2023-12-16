@extends('pages.layouts.admin.master')

@section('title')
    Nilai Preferensi - Sistem Rekomendasi Pemilihan Mahasiswa Berprestasi Politeknik Negeri Batam
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
            <h3>Nilai Preferensi (P)</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title">Tabel Nilai Preferensi (P)</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p class="card-text">
                                    Nilai preferensi (P) merupakan penjumlahan dari perkalian matriks ternormalisasi R dengan vektor bobot W.</p>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <caption>

                                        Nilai Preferensi (P)
                                    </caption>
                                    <tr>
                                        <th>No</th>
                                        <th>Alternatif</th>
                                        <th>Hasil</th>
                                    </tr>
                                    <tr class='center'>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
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
