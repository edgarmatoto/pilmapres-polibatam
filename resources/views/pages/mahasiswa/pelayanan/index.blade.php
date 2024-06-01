@extends('pages.layouts.mahasiswa.master')

@section('title')
    Pengajuan Prestasi - Sistem Rekomendasi Pemilihan Mahasiswa Berprestasi Politeknik Negeri Batam
@endsection

@push('styles')
    <style>
        .bg-gray-100 {
            background-color: #D9D9D9 !important;
        }

        .bg-pink-100 {
            background-color: #E6B1B1 !important;
        }

        .bg-blue-100 {
            background-color: #ACD1F3 !important;
        }

        .bg-green-100 {
            background-color: #C9F8C1 !important;
        }

        .bg-gray-50 {
            background-color: #EDEDED !important;
        }

        .bg-pink-50 {
            background-color: #FCF0F0 !important;
        }

        .bg-blue-50 {
            background-color: #EEF7FF !important;
        }

        .bg-green-50 {
            background-color: #F1FFEE !important;
        }
    </style>
@endpush

@section('content')
    <section
        class="pt-3 py-4"
        style="min-height: calc(100vh - 100px); background-color: #EDEDED;"
    >
        <div class="container">
            <div class="d-flex justify-content-center">
                @php
                    $hideCard = blank(old('jenis_perlombaan')) && blank(old('tingkat_perlombaan')) && blank(old('capaian_prestasi')) && blank(old('tmpt_perlombaan')) && blank(old('tgl_perlombaan')) && blank(old('ipk'));
                @endphp
                <div
                    id="card"
                    class="card mt-3 {{ $hideCard ? 'd-none' : '' }}"
                    style="width: 25rem;"
                >
                    <div class="pt-4 px-2">
                        <p class="mt-3 text-center fw-bold h5">Ajukan Prestasi</p>
                        <div class="card-body mt-5">
                            <form
                                action="{{ route('mhs.pelayanan.store') }}"
                                method="post"
                                enctype="multipart/form-data"
                            >
                                @csrf
                                <div class="mb-3">
                                    <label
                                        style="color: #00000087;"
                                        for="jenisPerlombaan"
                                        class="form-label mb-0"
                                    >Jenis Perlombaan</label>
                                    <input
                                        type="text"
                                        class="@error('jenis_perlombaan') is-invalid @enderror form-control rounded-0 shadow-none px-0 border-0"
                                        name="jenis_perlombaan"
                                        id="jenisPerlombaan"
                                        style="border-bottom: 1px solid #00000040 !important;"
                                        placeholder="Kontes Robot Indonesia"
                                        value="{{ old('jenis_perlombaan') }}"
                                    >
                                    @error('jenis_perlombaan')
                                        <div class="text-danger small">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label
                                        style="color: #00000087;"
                                        for="tingkatPerlombaan"
                                        class="form-label mb-0"
                                    >Tingkat Perlombaan</label>
                                    <select
                                        style="border-bottom: 1px solid #00000040 !important;"
                                        id="tingkatPerlombaan"
                                        class="@error('tingkat_perlombaan') is-invalid @enderror form-select rounded-0 shadow-none px-0 border-0"
                                        name="tingkat_perlombaan"
                                    >
                                        <option
                                            disabled
                                            selected
                                        >---Pilih---</option>
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
                                    @error('tingkat_perlombaan')
                                        <div class="text-danger small">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label
                                        style="color: #00000087;"
                                        for="capaianPrestasi"
                                        class="form-label mb-0"
                                    >Capaian Prestasi</label>
                                    <select
                                        style="border-bottom: 1px solid #00000040 !important;"
                                        id="capaianPrestasi"
                                        class="@error('capaian_prestasi') is-invalid @enderror form-select rounded-0 shadow-none px-0 border-0"
                                        name="capaian_prestasi"
                                    >
                                        <option
                                            disabled
                                            selected
                                        >---Pilih---</option>
                                        <option
                                            value="1"
                                            {{ old('capaian_prestasi') == '1' ? 'selected' : '' }}
                                        >Juara 1</option>
                                        <option
                                            value="2"
                                            {{ old('capaian_prestasi') == '2' ? 'selected' : '' }}
                                        >Juara 2</option>
                                        <option
                                            value="3"
                                            {{ old('capaian_prestasi') == '3' ? 'selected' : '' }}
                                        >Juara 3</option>
                                        <option
                                            value="4"
                                            {{ old('capaian_prestasi') == '4' ? 'selected' : '' }}
                                        >Juara Harapan 1</option>
                                        <option
                                            value="5"
                                            {{ old('capaian_prestasi') == '5' ? 'selected' : '' }}
                                        >Juara Harapan 2</option>
                                        <option
                                            value="6"
                                            {{ old('capaian_prestasi') == '6' ? 'selected' : '' }}
                                        >Juara Harapan 3</option>
                                    </select>
                                    @error('capaian_prestasi')
                                        <div class="text-danger small">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label
                                        style="color: #00000087;"
                                        for="ipk"
                                        class="form-label mb-0"
                                    >IPK</label>
                                    <input
                                        type="number"
                                        class="@error('ipk') is-invalid @enderror form-control rounded-0 shadow-none px-0 border-0"
                                        name="ipk"
                                        min="0"
                                        max="3"
                                        step="0.01"
                                        id="ipk"
                                        style="border-bottom: 1px solid #00000040 !important;"
                                        placeholder="3.00"
                                        value="{{ old('ipk') }}"
                                    >
                                    @error('ipk')
                                        <div class="text-danger small">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label
                                        style="color: #00000087;"
                                        for="tmptPerlombaan"
                                        class="form-label mb-0"
                                    >Tempat Perlombaan</label>
                                    <input
                                        type="text"
                                        class="@error('tmpt_perlombaan') is-invalid @enderror form-control rounded-0 shadow-none px-0 border-0"
                                        name="tmpt_perlombaan"
                                        id="tmptPerlombaan"
                                        style="border-bottom: 1px solid #00000040 !important;"
                                        placeholder="Online/Politeknik Negeri Batam"
                                        value="{{ old('tmpt_perlombaan') }}"
                                    >
                                    @error('tmpt_perlombaan')
                                        <div class="text-danger small">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label
                                        style="color: #00000087;"
                                        for="tglPerlombaan"
                                        class="form-label mb-0"
                                    >Tanggal Perlombaan</label>
                                    <input
                                        type="date"
                                        class="@error('tgl_perlombaan') is-invalid @enderror form-control rounded-0 shadow-none px-0 border-0"
                                        name="tgl_perlombaan"
                                        id="tglPerlombaan"
                                        style="border-bottom: 1px solid #00000040 !important;"
                                        value="{{ old('tgl_perlombaan') }}"
                                    >
                                    @error('tgl_perlombaan')
                                        <div class="text-danger small">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex align-items-center gap-1 mb-1">
                                        <label
                                            for="fileInput"
                                            class="rounded-3 border-0 text-white px-2 py-1 m-0"
                                            style="background-color: #5698E5; cursor: pointer;"
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="20"
                                                height="20"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="#ffffff"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            >
                                                <rect
                                                    x="3"
                                                    y="3"
                                                    width="18"
                                                    height="18"
                                                    rx="2"
                                                />
                                                <circle
                                                    cx="8.5"
                                                    cy="8.5"
                                                    r="1.5"
                                                />
                                                <path d="M20.4 14.5L16 10 4 20" />
                                            </svg>
                                            Unggah Berkas
                                        </label>
                                        <span
                                            id="fileChosen"
                                            class="d-inline-block text-truncate m-0"
                                            style="max-width: calc(25rem - 210px);"
                                        >No file chosen</span>
                                        <input
                                            onchange="fileChosen.textContent = this.files[0].name; return false;"
                                            id="fileInput"
                                            type="file"
                                            name="berkas"
                                            hidden
                                        >
                                    </div>
                                    @error('berkas')
                                        <div class="text-danger small">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 pt-5 text-center">
                                    <button
                                        type="submit"
                                        class="rounded-3 border-0 text-white px-5 py-1 fw-bold"
                                        style="background-color: #0094FF;"
                                    >
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div
                    id="pelayanan"
                    class="mt-5 text-center w-100 {{ !$hideCard ? 'd-none' : '' }}"
                >
                    <h1
                        class="fw-bold"
                        style="color: #707070D4;"
                    >Pengajuan Prestasi</h1>
                    <button
                        onclick="card.classList.remove('d-none'); pelayanan.classList.add('d-none'); return false;"
                        style="background-color: #6DA1D1;"
                        type="button"
                        class="text-white border-0 px-4 py-2 mt-3 rounded-2"
                    >
                        <img
                            class="me-2"
                            src="{{ asset('assets/icons/pencil.svg') }}"
                            alt="pencil icon"
                        >
                        Ajukan Prestasi
                    </button>
                    <div
                        class="table-responsive"
                        style="margin-top: 95px;"
                    >
                        <table class="table table-bordered border-dark">
                            <thead class="bg-transparent">
                                <tr>
                                    <th class="bg-gray-100 py-3">No</th>
                                    <th class="bg-pink-100 py-3">Nama</th>
                                    <th class="bg-blue-100 py-3">NIM</th>
                                    <th class="bg-green-100 py-3">Poin</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($preferensi as $item)
                                    <tr>
                                        <td class="bg-gray-50 py-3">{{ $loop->iteration }}</td>
                                        <td class="bg-pink-50 py-3">{{ $item['nama'] }}</td>
                                        <td class="bg-blue-50 py-3">{{ $item['nim'] }}</td>
                                        <td class="bg-green-50 py-3">{{ $item['poin'] }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td
                                            class="bg-transparent py-3"
                                            colspan="4"
                                        >Tidak ada data ditemukan</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
