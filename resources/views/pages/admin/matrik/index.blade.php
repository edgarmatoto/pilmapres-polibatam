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
                                        <th colspan='{{ $kriteria->count() + 1 }}'>Kriteria</th>
                                    </tr>
                                    <tr>
                                        @forelse ($kriteria as $item)
                                            <th @if ($loop->last) colspan="2" @endif>{{ 'C' . $loop->iteration }}</th>
                                        @empty
                                            <th>...</th>
                                        @endforelse
                                    </tr>
                                    <tbody id="dataX">
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
                                            <th>{{ 'C' . $loop->iteration }}</th>
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
                    action="{{ route('admin.matrik.store') }}"
                    method="POST"
                >
                    @csrf
                    <div class="modal-body">
                        <label>Alternatif: </label>
                        <div class="form-group">
                            <select
                                class="form-control form-select"
                                name="alternatif_id"
                            >
                                @forelse ($kandidat as $item)
                                    <option
                                        value="{{ $item->mahasiswa->id }}"
                                        {{ old('alternatif') == $item->mahasiswa->id ? 'selected' : '' }}
                                    >{{ 'A' . $loop->iteration }} - {{ ucwords($item->mahasiswa->nama) }}</option>
                                @empty
                                    <option>...</option>
                                @endforelse

                            </select>
                        </div>
                    </div>
                    <div class="modal-body">
                        <label>Kriteria: </label>
                        <div class="form-group">
                            <select
                                class="form-control form-select"
                                name="kriteria_id"
                            >
                                @forelse ($kriteria as $item)
                                    <option
                                        value="{{ $item->id }}"
                                        {{ old('kriteria') == $item->id ? 'selected' : '' }}
                                    >{{ 'C' . $loop->iteration }} - {{ ucwords($item->nama) }}</option>
                                @empty
                                    <option>...</option>
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <div class="modal-body">
                        <label>Nilai: </label>
                        <div class="form-group">
                            <input
                                type="number"
                                name="nilai"
                                placeholder="Nilai..."
                                class="form-control"
                                value="{{ old('nilai') }}"
                            >
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button
                            type="reset"
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
                                }).then(() => {
                                    $('#dataX').html(response.dataX);
                                    $('#dataR').html(response.dataR);
                                })
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
