@extends('pages.layouts.admin.master')

@section('title')
    Home Page - Sistem Rekomendasi Pemilihan Mahasiswa Berprestasi Politeknik Negeri Batam
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
            <h3>Dashboard</h3>
        </div>
        <div class="nav-content">
            <ul class="nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="pelayanan.php">Pelayanan</a></li>
                <li><a href="#">Bantuan</a></li>
            </ul>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Sistem Rekomendasi Pemilihan Mahasiswa Berprestasi Politeknik Negeri Batam</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p class="card-text">
                                    Aplikasi Sistem Rekomendasi pemilihan Mahasiswa Berprestasi adalah sebuah aplikasi yang dapat membantu pihak perguruan tinggi atau unit kemahasiswaan dalam menentukan mahasiswa yang berprestasi berdasarkan beberapa kriteria atau aspek. Aplikasi ini menggunakan metode analisis data untuk menghitung nilai atau bobot dari setiap kriteria dan alternatif mahasiswa, kemudian melakukan perbandingan dan pengurutan untuk mendapatkan rekomendasi terbaik.
                                </p>
                                <hr>
                                <p class="card-text">
                                    Langkah Penyelesaian Simple Additive Weighting (SAW) adalah sebagai berikut:
                                </p>
                                <ol type="1">
                                    <li>Menentukan kriteria-kriteria yang akan dijadikan acuan dalam pengambilan keputusan, yaitu Ci</li>
                                    <li>Menentukan rating kecocokan setiap alternatif pada setiap kriteria (X).</li>
                                    <li>Membuat matriks keputusan berdasarkan kriteria (Ci), kemudian melakukan normalisasi matriks berdasarkan persamaan yang disesuaikan dengan jenis atribut (atribut keuntungan ataupun atribut biaya) sehingga diperoleh matriks ternormalisasi R.</li>
                                    <li>Hasil akhir diperoleh dari proses perankingan yaitu penjumlahan dari perkalian matriks ternormalisasi R dengan vektor bobot sehingga diperoleh nilai terbesar yang dipilih sebagai alternatif terbaik (Ai) sebagai solusi.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @include('pages.layouts.admin.components.footer')
    </div>
@endsection
