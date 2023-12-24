@extends('pages.layouts.admin.master')

@section('title')
    Ulasan Mahasiswa - Sistem Rekomendasi Pemilihan Mahasiswa Berprestasi Politeknik Negeri Batam
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
            <h3>Ulasan Mahasiswa</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title">Tabel Ulasan Mahasiswa</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p class="card-text">
                                    Semua ulasan/umpan balik yang diberikan oleh mahasiwa akan ditampilkan pada table ini.
                                </p>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <caption>
                                        Jumlah Ulasan {{ number_format($ulasan->count(), 0, ',', '.') }}
                                    </caption>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Mahasiswa</th>
                                        <th>Ulasan</th>
                                    </tr>
                                    @forelse ($ulasan as $item)
                                        <tr class='center'>
                                            <td>{{ date('l, m Y', strtotime($item->created_at)) }}</td>
                                            <td>{{ ucwords($item->alternatif->mahasiswa->nama) }}</td>
                                            <td>{{ $item->isi }}</td>
                                        </tr>
                                    @empty
                                        <tr class='center'>
                                            <td
                                                colspan="3"
                                                class="text-center"
                                            >Tidak ada data ditemukan</td>
                                        </tr>
                                    @endforelse

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
