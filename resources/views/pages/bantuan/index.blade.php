@extends('pages.layouts.guest.master')

@section('title')
    Sistem Rekomendasi Pemilihan Mahasiswa Berprestasi Politeknik Negeri Batam
@endsection

@include('pages.layouts.guest.components.navbar_3')

@section('content')
    <section
        class="pt-3 py-md-4 position-relative"
        style="min-height: calc(100vh - 170px);"
    >
        <div class="container px-md-5">
            <h1 class="h3 fw-bold mt-5">Selamat datang di Halaman Bantuan Pengajuan Prestasi!</h1>
            <p class="fs-5 my-4">Terima kasih telah menggunakan layanan pemilihan mahasiswa berprestasi di Politeknik Negeri Batam. Berikut adalah panduan langkah demi langkah untuk mengajukan prestasi melalui website kami:</p>
            <div class="mb-5">
                <h1 class="h5 fw-bold mt-3">1. Login ke Akun Anda</h1>
                <p class="fs-5 ms-3">
                    Sebelum mengajukan prestasi, pastikan Anda sudah login ke akun Anda di website kami. Jika belum memiliki akun, Anda dapat mendaftar terlebih dahulu.
                </p>
                <h1 class="h5 fw-bold mt-3">2. Pilih Menu "Pengajuan Prestasi"</h1>
                <p class="fs-5 ms-3">
                    Setelah login, temukan menu "Pengajuan Prestasi" pada dashboard atau navigasi utama website.
                </p>
                <h1 class="h5 fw-bold mt-3">3. Isi Form Pengajuan</h1>
                <p class="fs-5 ms-3">
                    Pada halaman pengajuan, Anda akan menemui formulir yang perlu diisi. Berikut adalah kriteria yang harus Anda isi:
                </p>
                <h2 class="h5 ms-4">a. Jenis Perlombaan</h2>
                <p class="fs-5 ms-5">
                    Jenis perlombaan yang Anda ikuti, contohnya: "Perlombaan Kapal Canggih."
                </p>
                <h2 class="h5 ms-4">b. Tingkat Perlombaan</h2>
                <p class="fs-5 ms-5">
                    Pilih tingkat perlombaan yang sesuai: Kota, Provinsi, Nasional, atau Internasional.
                </p>
                <h2 class="h5 ms-4">c. Capaian Prestasi</h2>
                <p class="fs-5 ms-5">
                    Tentukan capaian prestasi Anda, apakah juara 1, 2, 3, harapan I, II, III, atau juara umum.
                </p>
                <h2 class="h5 ms-4">d. Tempat Perlombaan</h2>
                <p class="fs-5 ms-5">
                    Isi nama tempat perlombaan, seperti nama universitas atau lokasi lapangan (contoh: Universitas Indonesia, Lapangan Gelora Bung Karno).
                </p>
                <h2 class="h5 ms-4">e. Tanggal Perlombaan</h2>
                <p class="fs-5 ms-5">
                    Masukkan tanggal perlombaan sesuai dengan format yang tersedia.
                </p>
                <h1 class="h5 fw-bold mt-3">4. Unggah Bukti Prestasi</h1>
                <p class="fs-5 ms-3">
                    Pastikan untuk mengunggah bukti prestasi Anda, seperti sertifikat atau foto kegiatan perlombaan.
                </p>
                <h1 class="h5 fw-bold mt-3">5. Review dan Konfirmasi</h1>
                <p class="fs-5 ms-3">
                    Sebelum mengirimkan pengajuan, pastikan untuk meninjau kembali informasi yang telah Anda isi. Jika sudah benar, klik tombol "Kirim" atau "Ajukan Prestasi."
                </p>
                <h1 class="h5 fw-bold mt-3">6. Tunggu Konfirmasi</h1>
                <p class="fs-5 ms-3">
                    Setelah mengajukan prestasi, tunggu konfirmasi dari pihak administrator. Anda dapat melihat status pengajuan prestasi Anda pada akun Anda.
                </p>
                <h1 class="h5 fw-bold mt-3">7. Hubungi Kami</h1>
                <p class="fs-5 ms-3">
                    Jika Anda mengalami kesulitan atau memiliki pertanyaan lebih lanjut, jangan ragu untuk menghubungi tim dukungan kami melalui <span style="color: #3D55AB;">damaraqsa10@gmail.com</span>
                </p>
                <p class="fs-5 ms-3">
                    Semoga panduan ini membantu Anda dalam mengajukan prestasi melalui website kami. Terima kasih atas partisipasi Anda dalam pemilihan mahasiswa berprestasi di Politeknik Negeri Batam!
                </p>
            </div>
        </div>
    </section>
    <section>
        <div
            class="p-3 p-md-4 text-white"
            style="background-color: #009DCE;"
        >
            <div class="container">
                <p class="fw-bold fs-5 text-white m-0">2023 Mahasiswa Berprestasi Politeknik Negeri Batam</p>
            </div>
        </div>
    </section>
@endsection
