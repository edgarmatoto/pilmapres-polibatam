@extends('pages.layouts.admin.master')

@section('title')
    Data Alternatif - Sistem Rekomendasi Pemilihan Mahasiswa Berprestasi Politeknik Negeri Batam
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
            <h3>Alternatif</h3>
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
                            <h4 class="card-title">Tabel Alternatif</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p class="card-text">
                                    Data-data mengenai kandidat yang akan dievaluasi di representasikan dalam
                                    tabel berikut:
                                </p>
                            </div>
                            <button
                                type="button"
                                class="btn btn-outline-success btn-sm m-2"
                                data-bs-toggle="modal"
                                data-bs-target="#inlineForm"
                            >
                                Tambah Alternatif
                            </button>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <caption>
                                        Tabel Alternatif A<sub>i</sub>
                                    </caption>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Jenis Perlombaan</th>
                                            <th>Tingkat Perlombaan</th>
                                            <th>Capaian Prestasi</th>
                                            <th>Tempat Perlombaan</th>
                                            <th>Tanggal Perlombaan</th>
                                            <th colspan="2">Berkas</th>
                                        </tr>
                                    </thead>
                                    <tbody id="data">
                                        @include('pages.admin.alternatif.data')
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
                    >Tabel Alternatif</h4>
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
                    action="{{ route('admin.alternatif.store') }}"
                    method="POST"
                    enctype="multipart/form-data"
                >
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label
                                for="nama"
                                class="form-label"
                            >Nama Lengkap</label>
                            <input
                                type="text"
                                class="form-control"
                                id="nama"
                                name="nama"
                                value="{{ old('nama') }}"
                            >
                        </div>
                        <div class="mb-3">
                            <label
                                for="nim"
                                class="form-label"
                            >NIM</label>
                            <input
                                type="text"
                                class="form-control"
                                id="nim"
                                name="nim"
                                value="{{ old('nim') }}"
                            >
                        </div>
                        <div class="mb-3">
                            <label
                                for="jenisPerlombaan"
                                class="form-label"
                            >Jenis Perlombaan</label>
                            <input
                                type="text"
                                class="form-control"
                                id="jenisPerlombaan"
                                name="jenis_perlombaan"
                                value="{{ old('jenis_perlombaan') }}"
                            >
                        </div>
                        <div class="mb-3">
                            <label
                                for="tingkatPerlombaan"
                                class="form-label"
                            >Tingkat Perlombaan</label>
                            <select
                                id="tingkatPerlombaan"
                                class="form-select"
                                aria-label="Default select example"
                                name="tingkat_perlombaan"
                            >
                                <option
                                    value="internasional"
                                    {{ old('tingkat_perlombaan') == 'internasional' ? 'selected' : '' }}
                                >Internasional</option>
                                <option
                                    value="nasional"
                                    {{ old('tingkat_perlombaan') == 'nasional' ? 'selected' : '' }}
                                >Nasional</option>
                                <option
                                    value="kabupaten/kota"
                                    {{ old('tingkat_perlombaan') == 'kabupaten/kota' ? 'selected' : '' }}
                                >Kabupaten/Kota</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label
                                for="capaianPrestasi"
                                class="form-label"
                            >Capaian Prestasi</label>
                            <input
                                type="text"
                                class="form-control"
                                id="capaianPrestasi"
                                name="capaian_prestasi"
                                value="{{ old('capaian_prestasi') }}"
                            >
                        </div>
                        <div class="mb-3">
                            <label
                                for="tmptPerlombaan"
                                class="form-label"
                            >Tempat Perlombaan</label>
                            <input
                                type="text"
                                class="form-control"
                                id="tmptPerlombaan"
                                name="tmpt_perlombaan"
                                value="{{ old('tmpt_perlombaan') }}"
                            >
                        </div>
                        <div class="mb-3">
                            <label
                                for="tglPerlombaan"
                                class="form-label"
                            >Tanggal Perlombaan</label>
                            <input
                                type="date"
                                class="form-control"
                                id="tglPerlombaan"
                                name="tgl_perlombaan"
                                value="{{ old('tgl_perlombaan') }}"
                            >
                        </div>
                        <div class="mb-3">
                            <label
                                for="berkas"
                                class="form-label"
                            >Berkas</label>
                            <input
                                type="file"
                                class="form-control"
                                id="berkas"
                                name="berkas"
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

@push('scripts')
    <script>
        function hapusData(url) {
            Swal.fire({
                title: "Anda Yakin?",
                text: "Dengan menghapus data alternatif maka data mahasiswa yang berkaitan dengan alternatif ini juga akan terhapus. mengahapus data ini bersifat permanen.",
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
