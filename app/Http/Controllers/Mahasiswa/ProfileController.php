<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
            'tgl_lahir'         => 'required|date',
            'jenkel'            => 'required|in:laki-laki,perempuan',
            'agama'             => 'required|string|max:100',
            'alamat'            => 'required|string|max:100',
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
            'tgl_lahir'         => 'Tanggal Lahir',
            'jenkel'            => 'Jenis Kelamin',
            'agama'             => 'Agama',
            'alamat'            => 'Alamat',
            'email'             => 'Email',
            'no_hp'             => 'No Telepon',
            'password'          => 'Password'
        ];
        $messages = [
            'nama.regex'        => 'Only accepts letters.',
            'password.regex'    => 'Passwords must contain at least 1 uppercase letter, lowercase letter, and numbers.'
        ];
        $request->validate($rules, $messages, $attributes);

        try {
            $mahasiswa  = Mahasiswa::findOrFail(auth()->user()->id);
            $data       = $request->except(['password']);
            if ($request->password) {
                $data['password'] = Hash::make($request->password);
            }
            $mahasiswa->update($data);

            return redirect()
                ->route('mhs.profile.index')
                ->withSuccess('Selamat profil anda berhasil diperbaharui.');
        } catch (\Throwable $th) {
            return back()
                ->withError('Terjadi kegagalan saat memperbaharui data profil anda, silahkan coba lagi nanti.');
        }
    }
}
