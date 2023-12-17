<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AlternatifController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::orderBy('nim', 'ASC')->orderBy('nama', 'ASC')->latest()->get();
        return view('pages.admin.alternatif.index', compact('mahasiswa'));
    }

    public function store(Request $request)
    {
        $rules = [
            'nama'      => 'required|string|max:100',
            'nim'       => 'required|numeric|max_digits:15|unique:mahasiswa',
            'email'     => 'required|string|max:100|email|unique:mahasiswa',
            'no_hp'     => 'required|numeric|max_digits:15|unique:mahasiswa',
            'tgl_lahir' => 'required|date',
        ];
        $attributes = [
            'nama'      => 'Nama Lengkap',
            'nim'       => 'NIM',
            'email'     => 'Email',
            'no_hp'     => 'No Hp',
            'tgl_lahir' => 'Tanggal Lahir',
        ];
        $validator = $request->validate($rules, [], $attributes);

        try {
            $validator['password'] = Hash::make($request->nim);
            Mahasiswa::create($validator);

            return redirect()
                ->route('admin.alternatif.index')
                ->withSuccess('Data alternatif berhasil disimpan.');
        } catch (\Throwable $th) {
            return back()->withError('Data yang anda inputkan gagal disimpan, silahkan coba lagi nanti.');
        }
    }
}
