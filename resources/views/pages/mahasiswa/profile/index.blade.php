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
                    <form
                        action="{{ route('mhs.profile.update') }}"
                        method="post"
                    >
                        @method('PUT')
                        @csrf
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
                                    class="@error('nama') is-invalid @enderror form-control"
                                    id="nama"
                                    name="nama"
                                    value="{{ old('nama', auth()->user()->nama) }}"
                                >
                                @error('nama')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
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
                                    class="@error('nim') is-invalid @enderror form-control"
                                    id="nim"
                                    name="nim"
                                    value="{{ old('nim', auth()->user()->nim) }}"
                                >
                                @error('nim')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
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
                                    class="@error('nim') is-invalid @enderror form-select"
                                    name="prodi_id"
                                >
                                    @foreach ($prodi as $item)
                                        <option
                                            value="{{ $item->id }}"
                                            {{ old('prodi_id', auth()->user()->prodi_id) == $item->id ? 'selected' : '' }}
                                        >{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                                @error('nim')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
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
                                    class="@error('kelas') is-invalid @enderror form-control"
                                    id="kelas"
                                    name="kelas"
                                    value="{{ old('kelas', auth()->user()->kelas) }}"
                                >
                                @error('kelas')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
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
                                    class="@error('angkatan') is-invalid @enderror form-control"
                                    id="angkatan"
                                    name="angkatan"
                                    value="{{ old('angkatan', auth()->user()->angkatan) }}"
                                >
                                @error('angkatan')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
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
                                    class="@error('waldos') is-invalid @enderror form-control"
                                    id="waldos"
                                    name="waldos"
                                    value="{{ old('waldos', auth()->user()->waldos) }}"
                                >
                                @error('waldos')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
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
                                    class="@error('tgl_masuk') is-invalid @enderror form-control"
                                    id="tglMasuk"
                                    name="tgl_masuk"
                                    value="{{ old('tgl_masuk', auth()->user()->tgl_masuk) }}"
                                >
                                @error('tgl_masuk')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
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
                                    class="@error('status') is-invalid @enderror form-select"
                                    name="status"
                                >
                                    <option
                                        value="aktif"
                                        {{ old('status', auth()->user()->status) == 'aktif' ? 'selected' : '' }}
                                    >Aktif</option>
                                    <option
                                        value="cuti"
                                        {{ old('status', auth()->user()->status) == 'cuti' ? 'selected' : '' }}
                                    >Cuti</option>
                                </select>
                                @error('status')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
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
                                    class="@error('nik') is-invalid @enderror form-control"
                                    id="nik"
                                    name="nik"
                                    value="{{ old('nik', auth()->user()->nik) }}"
                                >
                                @error('nik')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
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
                                    class="@error('tmpt_lahir') is-invalid @enderror form-control"
                                    id="tmptLahir"
                                    name="tmpt_lahir"
                                    value="{{ old('tmpt_lahir', auth()->user()->tmpt_lahir) }}"
                                >
                                @error('tmpt_lahir')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
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
                                    class="@error('tgl_lahir') is-invalid @enderror form-control"
                                    id="tglLahir"
                                    name="tgl_lahir"
                                    value="{{ old('tgl_lahir', auth()->user()->tgl_lahir) }}"
                                >
                                @error('tgl_lahir')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
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
                                    class="@error('kewarganegaraan') is-invalid @enderror form-control"
                                    id="kewarganegaraan"
                                    name="kewarganegaraan"
                                    value="{{ old('kewarganegaraan', auth()->user()->kewarganegaraan) }}"
                                >
                                @error('kewarganegaraan')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label
                                    style="color: #A1A1A1;"
                                    for="jenkel"
                                    class="form-label fw-bold"
                                >Jenis Kelamin</label>
                                <select
                                    style="background-color: #D9D9D9;"
                                    id="jenkel"
                                    class="@error('jenkel') is-invalid @enderror form-select"
                                    name="jenkel"
                                >
                                    <option
                                        value="laki-laki"
                                        {{ old('jenkel', auth()->user()->jenkel) == 'laki-laki' ? 'selected' : '' }}
                                    >Laki-Laki</option>
                                    <option
                                        value="perempuan"
                                        {{ old('jenkel', auth()->user()->jenkel) == 'perempuan' ? 'selected' : '' }}
                                    >Perempuan</option>
                                </select>
                                @error('jenkel')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
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
                                    class="@error('agama') is-invalid @enderror form-control"
                                    id="agama"
                                    name="agama"
                                    value="{{ old('agama', auth()->user()->agama) }}"
                                >
                                @error('agama')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
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
                                    class="@error('status_martial') is-invalid @enderror form-select"
                                    name="status_martial"
                                >
                                    <option
                                        value="lajang"
                                        {{ old('status_martial', auth()->user()->status_martial) == 'lajang' ? 'selected' : '' }}
                                    >Lajang</option>
                                    <option
                                        value="sudah menikah"
                                        {{ old('status_martial', auth()->user()->status_martial) == 'sudah menikah' ? 'selected' : '' }}
                                    >sudah menikah</option>
                                </select>
                                @error('status_martial')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
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
                                    class="@error('gol_darah') is-invalid @enderror form-control"
                                    id="golDarah"
                                    name="gol_darah"
                                    value="{{ old('gol_darah', auth()->user()->gol_darah) }}"
                                >
                                @error('gol_darah')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
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
                                    class="@error('kode_pos') is-invalid @enderror form-control"
                                    id="kodePos"
                                    name="kode_pos"
                                    value="{{ old('kode_pos', auth()->user()->kode_pos) }}"
                                >
                                @error('kode_pos')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
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
                                    class="@error('alamat') is-invalid @enderror form-control"
                                    id="alamat"
                                    name="alamat"
                                    rows="3"
                                >{{ old('alamat', auth()->user()->alamat) }}</textarea>
                                @error('alamat')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
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
                                    class="@error('kelurahan') is-invalid @enderror form-control"
                                    id="kelurahan"
                                    name="kelurahan"
                                    value="{{ old('kelurahan', auth()->user()->kelurahan) }}"
                                >
                                @error('kelurahan')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
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
                                    class="@error('kecamatan') is-invalid @enderror form-control"
                                    id="kecamatan"
                                    name="kecamatan"
                                    value="{{ old('kecamatan', auth()->user()->kecamatan) }}"
                                >
                                @error('kecamatan')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
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
                                    class="@error('email') is-invalid @enderror form-control"
                                    id="email"
                                    name="email"
                                    value="{{ old('email', auth()->user()->email) }}"
                                >
                                @error('email')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
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
                                    class="@error('no_hp') is-invalid @enderror form-control"
                                    id="noHp"
                                    name="no_hp"
                                    value="{{ old('no_hp', auth()->user()->no_hp) }}"
                                >
                                @error('no_hp')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="w-100 d-none d-md-block"></div>
                            <div class="col-md-4">
                                <label
                                    style="color: #A1A1A1;"
                                    for="password"
                                    class="form-label fw-bold"
                                >Password</label>
                                <input
                                    style="background-color: #D9D9D9;"
                                    type="password"
                                    class="@error('password') is-invalid @enderror form-control"
                                    id="password"
                                    name="password"
                                >
                                @error('password')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
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
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
