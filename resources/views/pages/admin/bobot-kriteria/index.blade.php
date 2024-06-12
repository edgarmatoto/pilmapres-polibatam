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
            @if (session()->has('errors'))
                <div
                    class="alert alert-danger alert-dismissible fade show"
                    role="alert"
                >
                    <div>
                        <h1 class="fw-bold h6">Take a look at the following error warnings:</h1>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{!! $error !!}</li>
                            @endforeach
                        </ul>
                    </div>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close"
                    ></button>
                </div>
            @endif
            <section class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tabel Bobot Kriteria</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p class="card-text">Pengambil keputusan memberi bobot preferensi dari setiap kriteria dengan
                                    masing-masing jenisnya:</p>
                            </div>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <caption>
                                        Bobot Capaian Prestasi
                                    </caption>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kriteria</th>
                                            <th>Bobot (100%)</th>
                                        </tr>
                                    </thead>
                                    <tbody id="data">
                                        @include('pages.admin.bobot-kriteria.data')
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
                    >Tabel Bobot Kriteria</h4>
                    <button
                        type="button"
                        class="close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    >
                        <i data-feather="x"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function hapusData(url) {
            Swal.fire({
                title: "Anda Yakin?",
                text: "Mengahapus data ini bersifat permanen dan tidak dapat diurungkan.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#045464",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        data: {
                            '_token': '{{ csrf_token() }}'
                        },
                        beforeSend: () => {
                            Swal.fire({
                                allowOutsideClick: false,
                                showConfirmButton: false,
                                willOpen: () => Swal.showLoading(),
                            });
                        },
                        success: (response) => {
                            if (response.success) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success!',
                                    text: response.success,
                                    confirmButtonColor: "#045464"
                                }).then(() => $('#data').html(response.data));
                            } else if (response.error) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops!',
                                    text: response.error,
                                    confirmButtonColor: "#045464"
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops!',
                                    text: 'Data gagal dihapus, silahkan coba lagi atau hubungi administrator untuk permasalahan ini.',
                                    confirmButtonColor: "#045464"
                                });
                            }
                        },
                        error: () => {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops!',
                                text: 'Data gagal dieksekusi, silahkan coba lagi atau hubungi administrator untuk permasalahan ini.',
                                confirmButtonColor: "#045464"
                            });
                        }
                    });
                }
            });
        }
    </script>
@endpush
