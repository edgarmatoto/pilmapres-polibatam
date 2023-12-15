@extends('pages.layouts.mahasiswa.master')

@section('title')
    Profile Page - Sistem Rekomendasi Pemilihan Mahasiswa Berprestasi Politeknik Negeri Batam
@endsection

@section('content')
    <div
        class="pt-3 py-4"
        style="min-height: calc(100vh - 100px); background-color: #EDEDED;"
    >
        <div class="container">
            <div class="row">
                <div class="col-lg-3 bg-white">
                    <div class="p-3">
                        <p
                            class="h5 fw-bold"
                            style="color: #9B9B9B;"
                        >Data diri pribadi</p>
                        <hr>
                        <div class="text-center">
                            <p style="color: #9B9B9B;">Lihat atau ubah data diri pribadi</p>
                            <img
                                class="img-fluid"
                                src="{{ asset('assets/icons/graduates.svg') }}"
                                alt="graduates"
                            >
                            <p
                                class="fw-bold mt-3"
                                style="color: #9B9B9B;"
                            >Muhammad Zaidan Bagaskara</p>
                        </div>
                    </div>
                </div>
                <div
                    class="col-lg p-3"
                    style="background-color: #E6E6E6;"
                >
                    <div class="row row-gap-2">
                        <div class="col-md-4">
                            <label
                                style="color: #A1A1A1;"
                                for="nama"
                                class="form-label fw-bold"
                            >Nama Lengkap</label>
                            <input
                                style="background-color: #D9D9D9;"
                                type="text"
                                class="form-control"
                                id="nama"
                                name="nama"
                            >
                        </div>
                        <div class="col-md-4">
                            <label
                                style="color: #A1A1A1;"
                                for="nim"
                                class="form-label fw-bold"
                            >NIM Mahasiswa</label>
                            <input
                                style="background-color: #D9D9D9;"
                                type="text"
                                class="form-control"
                                id="nim"
                                name="nim"
                            >
                        </div>
                        <div class="col-md-4">
                            <label
                                style="color: #A1A1A1;"
                                for="prodi"
                                class="form-label fw-bold"
                            >Program Studi</label>
                            <select
                                style="background-color: #D9D9D9;"
                                id="prodi"
                                class="form-select"
                            >
                                <option value="teknik informatika">Teknik Informatika</option>
                                <option value="manajemen bisnis">Manajemen Bisnis</option>
                            </select>
                        </div>
                        <div class="w-100 d-none d-md-block"></div>
                        <div class="col-md-4">
                            <label
                                style="color: #A1A1A1;"
                                for="kelas"
                                class="form-label fw-bold"
                            >Kelas</label>
                            <input
                                style="background-color: #D9D9D9;"
                                type="text"
                                class="form-control"
                                id="kelas"
                                name="kelas"
                            >
                        </div>
                        <div class="col-md-4">
                            <label
                                style="color: #A1A1A1;"
                                for="angkatan"
                                class="form-label fw-bold"
                            >Angkatan</label>
                            <input
                                style="background-color: #D9D9D9;"
                                type="text"
                                class="form-control"
                                id="angkatan"
                                name="angkatan"
                            >
                        </div>
                        <div class="col-md-4">
                            <label
                                style="color: #A1A1A1;"
                                for="waldos"
                                class="form-label fw-bold"
                            >Dosen Wali</label>
                            <input
                                style="background-color: #D9D9D9;"
                                type="text"
                                class="form-control"
                                id="waldos"
                                name="waldos"
                            >
                        </div>
                        <div class="w-100 d-none d-md-block"></div>
                        <div class="col-md-4">
                            <label
                                style="color: #A1A1A1;"
                                for="tglMasuk"
                                class="form-label fw-bold"
                            >Tanggal Masuk</label>
                            <input
                                style="background-color: #D9D9D9;"
                                type="date"
                                class="form-control"
                                id="tglMasuk"
                                name="tgl_masuk"
                            >
                        </div>
                        <div class="col-md-4">
                            <label
                                style="color: #A1A1A1;"
                                for="status"
                                class="form-label fw-bold"
                            >Status Kemahasiswaan</label>
                            <select
                                style="background-color: #D9D9D9;"
                                id="status"
                                class="form-select"
                            >
                                <option value="aktif">Aktif</option>
                                <option value="cuti">Cuti</option>
                            </select>
                        </div>
                    </div>
                    <hr class="my-5">
                    <div class="row row-gap-2">
                        <div class="col-md-4">
                            <label
                                style="color: #A1A1A1;"
                                for="nik"
                                class="form-label fw-bold"
                            >NIK / No KTP</label>
                            <input
                                style="background-color: #D9D9D9;"
                                type="text"
                                class="form-control"
                                id="nik"
                                name="nik"
                            >
                        </div>
                        <div class="col-md-4">
                            <label
                                style="color: #A1A1A1;"
                                for="tmptLahir"
                                class="form-label fw-bold"
                            >Tempat Lahir</label>
                            <input
                                style="background-color: #D9D9D9;"
                                type="text"
                                class="form-control"
                                id="tmptLahir"
                                name="tmpt_lahir"
                            >
                        </div>
                        <div class="col-md-4">
                            <label
                                style="color: #A1A1A1;"
                                for="tglLahir"
                                class="form-label fw-bold"
                            >Tanggal Lahir</label>
                            <input
                                style="background-color: #D9D9D9;"
                                type="date"
                                class="form-control"
                                id="tglLahir"
                                name="tgl_lahir"
                            >
                        </div>
                        <div class="w-100 d-none d-md-block"></div>
                        <div class="col-md-4">
                            <label
                                style="color: #A1A1A1;"
                                for="kewarganegaraan"
                                class="form-label fw-bold"
                            >Kewarganegaraan</label>
                            <input
                                style="background-color: #D9D9D9;"
                                type="text"
                                class="form-control"
                                id="kewarganegaraan"
                                name="kewarganegaraan"
                            >
                        </div>
                        <div class="col-md-4">
                            <label
                                style="color: #A1A1A1;"
                                for="kelamin"
                                class="form-label fw-bold"
                            >Jenis Kelamin</label>
                            <select
                                style="background-color: #D9D9D9;"
                                id="kelamin"
                                class="form-select"
                            >
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label
                                style="color: #A1A1A1;"
                                for="agama"
                                class="form-label fw-bold"
                            >Agama</label>
                            <input
                                style="background-color: #D9D9D9;"
                                type="text"
                                class="form-control"
                                id="agama"
                                name="agama"
                            >
                        </div>
                        <div class="w-100 d-none d-md-block"></div>
                        <div class="col-md-4">
                            <label
                                style="color: #A1A1A1;"
                                for="statusMartial"
                                class="form-label fw-bold"
                            >Status Martial</label>
                            <select
                                style="background-color: #D9D9D9;"
                                id="statusMartial"
                                class="form-select"
                            >
                                <option value="lajang">Lajang</option>
                                <option value="sudah menikah">sudah menikah</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label
                                style="color: #A1A1A1;"
                                for="golDarah"
                                class="form-label fw-bold"
                            >Golongan Darah</label>
                            <input
                                style="background-color: #D9D9D9;"
                                type="text"
                                class="form-control"
                                id="golDarah"
                                name="gol_darah"
                            >
                        </div>
                        <div class="col-md-4">
                            <label
                                style="color: #A1A1A1;"
                                for="kodePos"
                                class="form-label fw-bold"
                            >Kode Pos</label>
                            <input
                                style="background-color: #D9D9D9;"
                                type="text"
                                class="form-control"
                                id="kodePos"
                                name="kode_pos"
                            >
                        </div>
                        <div class="w-100 d-none d-md-block"></div>
                        <div class="col-md-8">
                            <label
                                style="color: #A1A1A1;"
                                for="alamat"
                                class="form-label fw-bold"
                            >Alamat Lengkap</label>
                            <textarea
                                style="background-color: #D9D9D9;"
                                class="form-control"
                                id="alamat"
                                rows="3"
                            ></textarea>
                        </div>
                        <div class="col-md-4">
                            <label
                                style="color: #A1A1A1;"
                                for="kelurahan"
                                class="form-label fw-bold"
                            >Kelurahan</label>
                            <input
                                style="background-color: #D9D9D9;"
                                type="text"
                                class="form-control"
                                id="kelurahan"
                                name="kelurahan"
                            >
                        </div>
                        <div class="w-100 d-none d-md-block"></div>
                        <div class="col-md-4">
                            <label
                                style="color: #A1A1A1;"
                                for="kecamatan"
                                class="form-label fw-bold"
                            >Kecamatan</label>
                            <input
                                style="background-color: #D9D9D9;"
                                type="text"
                                class="form-control"
                                id="kecamatan"
                                name="kecamatan"
                            >
                        </div>
                        <div class="col-md-4">
                            <label
                                style="color: #A1A1A1;"
                                for="email"
                                class="form-label fw-bold"
                            >email</label>
                            <input
                                style="background-color: #D9D9D9;"
                                type="email"
                                class="form-control"
                                id="email"
                                name="email"
                            >
                        </div>
                        <div class="col-md-4">
                            <label
                                style="color: #A1A1A1;"
                                for="noHp"
                                class="form-label fw-bold"
                            >No Telepon</label>
                            <input
                                style="background-color: #D9D9D9;"
                                type="text"
                                class="form-control"
                                id="noHp"
                                name="no_hp"
                            >
                        </div>
                    </div>
                    <div class="mb-3 pt-5 text-center">
                        <button
                            type="submit"
                            class="rounded-3 border-0 text-white px-5 py-1 fw-bold"
                            style="background-color: #0094FF;"
                        >
                            Update
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
