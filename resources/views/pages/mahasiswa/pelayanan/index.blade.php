@extends('pages.layouts.mahasiswa.master')

@section('title')
    Pengajuan Prestasi - Sistem Rekomendasi Pemilihan Mahasiswa Berprestasi Politeknik Negeri Batam
@endsection

@section('content')
    <section
        class="pt-3 py-4"
        style="min-height: calc(100vh - 100px); background-color: #EDEDED;"
    >
        <div class="container">
            <div class="d-flex justify-content-center">
                <div
                    id="card"
                    class="card mt-3 d-none"
                    style="width: 25rem;"
                >
                    <div class="pt-4 px-2">
                        <p class="mt-3 text-center fw-bold h5">Ajukan Prestasi</p>
                        <div class="card-body mt-5">
                            <div class="mb-3">
                                <label
                                    style="color: #00000087;"
                                    for="jenisPerlombaan"
                                    class="form-label mb-0"
                                >Jenis Perlombaan</label>
                                <input
                                    type="text"
                                    class="form-control rounded-0 shadow-none px-0 border-0"
                                    name="jenis_perlombaan"
                                    id="jenisPerlombaan"
                                    style="border-bottom: 1px solid #00000040 !important;"
                                >
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
                                    class="form-select rounded-0 shadow-none px-0 border-0"
                                    name="tingkat_perlombaan"
                                >
                                    <option
                                        disabled
                                        selected
                                    >---Pilih---</option>
                                    <option value="internasional">Internasional</option>
                                    <option value="nasional">Nasional</option>
                                    <option value="kabupaten/kota">Kabupaten/Kota</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label
                                    style="color: #00000087;"
                                    for="capaianPrestasi"
                                    class="form-label mb-0"
                                >Capaian Prestasi</label>
                                <input
                                    type="text"
                                    class="form-control rounded-0 shadow-none px-0 border-0"
                                    name="capaian_prestasi"
                                    id="capaianPrestasi"
                                    style="border-bottom: 1px solid #00000040 !important;"
                                >
                            </div>
                            <div class="mb-3">
                                <label
                                    style="color: #00000087;"
                                    for="tmptPerlombaan"
                                    class="form-label mb-0"
                                >Tempat Perlombaan</label>
                                <input
                                    type="text"
                                    class="form-control rounded-0 shadow-none px-0 border-0"
                                    name="tmpt_perlombaan"
                                    id="tmptPerlombaan"
                                    style="border-bottom: 1px solid #00000040 !important;"
                                >
                            </div>
                            <div class="mb-3">
                                <label
                                    style="color: #00000087;"
                                    for="tglPerlombaan"
                                    class="form-label mb-0"
                                >Tanggal Perlombaan</label>
                                <input
                                    type="text"
                                    class="form-control rounded-0 shadow-none px-0 border-0"
                                    name="tgl_perlombaan"
                                    id="tglPerlombaan"
                                    style="border-bottom: 1px solid #00000040 !important;"
                                >
                            </div>
                            <div class="mb-3 d-flex align-items-center gap-1">
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
                            <div class="mb-3 pt-5 text-center">
                                <button
                                    type="submit"
                                    class="rounded-3 border-0 text-white px-5 py-1 fw-bold"
                                    style="background-color: #0094FF;"
                                >
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    onclick="card.classList.remove('d-none'); this.classList.add('d-none'); return false;"
                    class="mt-5 text-center"
                >
                    <h1
                        class="fw-bold"
                        style="color: #707070D4;"
                    >Pengajuan Prestasi</h1>
                    <button
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
                </div>
            </div>
        </div>
    </section>
@endsection
