@extends('pages.layouts.guest.master')

@section('title')
    Sistem Rekomendasi Pemilihan Mahasiswa Berprestasi Politeknik Negeri Batam
@endsection

@include('pages.layouts.guest.components.navbar_2')

@section('content')
    <section
        class="pt-3 py-md-4 position-relative"
        style="min-height: calc(100vh - 170px);"
    >
        <div class="container px-md-5">
            <h1 class="h3 fw-bold mt-5">Selamat datang di Halaman Ketentuan & Privasi Politeknik Negeri Batam.</h1>
            <p class="fs-5 my-4">Kami menghargai kepercayaan Anda dalam menggunakan layanan kami. Mohon untuk membaca dengan seksama ketentuan dan kebijakan privasi berikut:</p>
            <div class="mb-5">
                <h1 class="h4 fw-bold">Ketentuan Penggunaan</h1>
                <h1 class="h5 fw-bold mt-3">1. Tujuan Penggunaan Layanan</h1>
                <ul class="ms-3">
                    <li class="fs-5">Layanan ini disediakan untuk pemilihan mahasiswa berprestasi di Politeknik Negeri Batam.</li>
                    <li class="fs-5">Penggunaan layanan ini harus sesuai dengan aturan dan peraturan yang berlaku.</li>
                </ul>
                <h1 class="h5 fw-bold mt-3">2. Kewajiban Pengguna</h1>
                <ul class="ms-3">
                    <li class="fs-5">Pengguna diharapkan untuk memberikan informasi yang akurat dan lengkap saat mengajukan prestasi.</li>
                    <li class="fs-5">Tidak diperkenankan menggunakan layanan ini untuk tujuan yang melanggar hukum atau melanggar hak orang lain.</li>
                </ul>
                <h1 class="h5 fw-bold mt-3">3. Hak dan Tanggung Jawab Administrator</h1>
                <ul class="ms-3">
                    <li class="fs-5">Administrator berhak meninjau, mengubah, atau menghapus informasi pengguna yang dianggap melanggar ketentuan.</li>
                    <li class="fs-5">Administrator memiliki hak untuk membatalkan atau menolak pengajuan prestasi yang tidak sesuai dengan kriteria yang ditetapkan.</li>
                </ul>
            </div>
            <div class="mb-5">
                <h1 class="h4 fw-bold">Kebijakan Privasi</h1>
                <h1 class="h5 fw-bold mt-3">1. Informasi yang Kami Kumpulkan</h1>
                <ul class="ms-3">
                    <li class="fs-5">Kami hanya mengumpulkan informasi yang diperlukan untuk proses pemilihan mahasiswa berprestasi.</li>
                    <li class="fs-5">Informasi pribadi Anda akan disimpan dengan aman dan tidak akan disebarkan kepada pihak ketiga tanpa izin Anda.</li>
                </ul>
                <h1 class="h5 fw-bold mt-3">2. Penggunaan Informasi</h1>
                <ul class="ms-3">
                    <li class="fs-5">Informasi yang Anda berikan akan digunakan untuk keperluan pemilihan mahasiswa berprestasi dan administrasi terkait.</li>
                    <li class="fs-5">Kami dapat menggunakan informasi anonim untuk analisis statistik.</li>
                </ul>
                <h1 class="h5 fw-bold mt-3">3. Keamanan Data</h1>
                <ul class="ms-3">
                    <li class="fs-5">Kami berkomitmen untuk melindungi informasi pribadi Anda. Langkah-langkah keamanan yang ketat akan diambil untuk mencegah akses yang tidak sah.</li>
                </ul>
                <h1 class="h5 fw-bold mt-3">4. Cookie dan Teknologi Pelacakan</h1>
                <ul class="ms-3">
                    <li class="fs-5">Kami dapat menggunakan cookie dan teknologi pelacakan serupa untuk meningkatkan pengalaman pengguna dan mengumpulkan informasi tentang penggunaan layanan.</li>
                </ul>
                <h1 class="h5 fw-bold mt-3">4. Perubahan Kebijakan</h1>
                <ul class="ms-3">
                    <li class="fs-5">Kebijakan ini dapat diperbarui dari waktu ke waktu. Setiap perubahan akan diinformasikan pada halaman ini.</li>
                </ul>
            </div>
            <div class="mb-5">
                <h1 class="h4 fw-bold">Kontak Kami</h1>
                <p class="fs-5 my-4">
                    Jika Anda memiliki pertanyaan atau kekhawatiran terkait ketentuan atau kebijakan privasi, silakan hubungi kami melalui informasi kontak <span style="color: #3D55AB;">damaraqsa10@gmail.com</span>
                    Terima kasih atas pemahaman dan kepatuhan Anda terhadap ketentuan dan kebijakan privasi kami.
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
