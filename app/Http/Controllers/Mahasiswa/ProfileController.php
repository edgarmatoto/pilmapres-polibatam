<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $prodi = Prodi::orderBy('nama', 'ASC')->get();
        return view('pages.mahasiswa.profile.index', compact('prodi'));
    }

    public function update(Request $request)
    {
        $rules = [
            'nama'              => 'required|string|max:100|regex:/^[a-zA-Z\s]+$/',
            'nim'               => 'required|numeric|max_digits:15|unique:mahasiswa,nim,' . auth()->user()->id,
            'prodi_id'          => 'required|exists:prodi,id',
            'kelas'             => 'required|string|max:100',
            'angkatan'          => 'required|date_format:Y',
            'waldos'            => 'required|string|max:100',
            'tgl_masuk'         => 'required|date',
            'status'            => 'required|in:aktif,cuti',
            'nik'               => 'required|numeric|max_digits:18',
            'tmpt_lahir'        => 'required|string|max:100',
            'tgl_lahir'         => 'required|date',
            'kewarganegaraan'   => 'required|string|max:100',
            'jenkel'            => 'required|in:laki-laki,perempuan',
            'agama'             => 'required|string|max:100',
            'status_martial'    => 'required|in:lajang,sudah menikah',
            'gol_darah'         => 'required|string|max:5',
            'kode_pos'          => 'required|numeric|max_digits:10',
            'alamat'            => 'required|string|max:100',
            'kelurahan'         => 'required|string|max:100',
            'kecamatan'         => 'required|string|max:100',
            'email'             => 'required|string|max:100|email',
            'no_hp'             => 'required|numeric|max_digits:15',
            'password'          => 'nullable|string|min:5|max:20|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/|exclude',
        ];
        $attributes = [
            'nama'              => 'Nama Lengkap',
            'nim'               => 'NIM',
            'prodi_id'          => 'Program Studi',
            'kelas'             => 'Kelas',
            'angkatan'          => 'Angkatan',
            'waldos'            => 'Dosen Wali',
            'tgl_masuk'         => 'Tanggal Masuk',
            'status'            => 'Status',
            'nik'               => 'NIK / No KTP',
            'tmpt_lahir'        => 'Tempat Lahir',
            'tgl_lahir'         => 'Tanggal Lahir',
            'kewarganegaraan'   => 'Kewarganegaraan',
            'jenkel'            => 'Jenis Kelamin',
            'agama'             => 'Agama',
            'status_martial'    => 'Status Martial',
            'gol_darah'         => 'Golongan Darah',
            'kode_pos'          => 'Kode Pos',
            'alamat'            => 'Alamat',
            'kelurahan'         => 'Kelurahan',
            'kecamatan'         => 'Kecamatan',
            'email'             => 'Email',
            'no_hp'             => 'No Telepon',
            'password'          => 'Password'
        ];
        $messages = [
            'nama.regex'        => 'Only accepts letters.',
            'password.regex'    => 'Passwords must contain at least 1 uppercase letter, lowercase letter, and numbers.'
        ];
        $validator = $request->validate($rules, $messages, $attributes);

        try {
            $mahasiswa = Mahasiswa::findOrFail(auth()->user()->id);
            $mahasiswa->update($validator);

            return redirect()
                ->route('mhs.profile.index')
                ->withSuccess('Selamat profil anda berhasil diperbaharui.');
        } catch (\Throwable $th) {
            return back()
                ->withError('Terjadi kegagalan saat memperbaharui data profil anda, silahkan coba lagi nanti.');
        }
    }
}
