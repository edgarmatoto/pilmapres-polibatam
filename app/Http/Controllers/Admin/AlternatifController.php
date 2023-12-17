<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alternatif;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AlternatifController extends Controller
{
    public function index()
    {
        $alternatif = Alternatif::latest()->get();
        return view('pages.admin.alternatif.index', compact('alternatif'));
    }

    public function edit(Alternatif $alternatif)
    {
        return view('pages.admin.alternatif.edit', compact('alternatif'));
    }

    public function store(Request $request)
    {
        $rules = [
            'nama'              => 'required|string|max:100',
            'nim'               => 'required|numeric|max_digits:15|unique:mahasiswa',
            'jenis_perlombaan'  => 'required|string|max:100',
            'tngkat_perlombaan' => 'required|in:internasional,nasional,kabupaten/kota',
            'capaian_prestasi'  => 'required|string|max:100',
            'tmpt_perlombaan'   => 'required|string|max:100',
            'tgl_perlombaan'    => 'required|date',
            'berkas'            => 'required|file|mimes:pdf,jpeg,png|max:5120',
        ];
        $attributes = [
            'nama'              => 'Nama Lengkap',
            'nim'               => 'NIM',
            'jenis_perlombaan'  => 'Jenis Perlombaan',
            'tngkat_perlombaan' => 'Tingkat Perlombaan',
            'capaian_prestasi'  => 'Capaian Prestasi',
            'tmpt_perlombaan'   => 'Tempat Perlombaan',
            'tgl_perlombaan'    => 'Tanggal Perlombaan',
            'berkas'            => 'Berkas',
        ];
        $request->validate($rules, [], $attributes);

        try {
            //== simpan data mahasiswa
            $dataMahasiswa              = $request->only(['nama', 'nim']);
            $dataMahasiswa['password']  = Hash::make($request->nim);
            $mahasiswa                  = Mahasiswa::create($dataMahasiswa);

            //== simpan data alternatif
            $dataAlternatif                     = $request->except(['nama', 'nim', 'berkas']);
            $dataAlternatif['lokasi_berkas']    = $request->file('berkas')->store('alternatif');
            $dataAlternatif['nama_berkas']      = $request->file('berkas')->getClientOriginalName();
            $mahasiswa->alternatif()->create($dataAlternatif);

            return redirect()
                ->route('admin.alternatif.index')
                ->withSuccess('Data alternatif berhasil disimpan.');
        } catch (\Throwable $th) {
            return back()->withError('Data yang anda inputkan gagal disimpan, silahkan coba lagi nanti.');
        }
    }

    public function unduhBerkas(Alternatif $alternatif)
    {
        $berkas = Storage::exists($alternatif->lokasi_berkas);
        if (!$berkas) return back()->withError('Berkas tidak dapat kami temukan, ini mungkin berkas yang anda cari telah rusak atau hilang dari system.');

        return Storage::download($alternatif->lokasi_berkas, $alternatif->nama_berkas);
    }
}
