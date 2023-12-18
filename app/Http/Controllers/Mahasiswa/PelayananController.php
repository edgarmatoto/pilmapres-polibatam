<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class PelayananController extends Controller
{
    public function index()
    {
        return view('pages.mahasiswa.pelayanan.index');
    }

    public function store(Request $request)
    {
        $rules = [
            'jenis_perlombaan'      => 'required|string|max:100',
            'tingkat_perlombaan'    => 'required|in:internasional,nasional,kabupaten/kota',
            'capaian_prestasi'      => 'required|string|max:100',
            'tmpt_perlombaan'       => 'required|string|max:100',
            'tgl_perlombaan'        => 'required|date',
            'berkas'                => 'required|file|mimes:pdf,jpeg,png|max:5120',
        ];
        $attributes = [
            'jenis_perlombaan'      => 'Jenis Perlombaan',
            'tingkat_perlombaan'    => 'Tingkat Perlombaan',
            'capaian_prestasi'      => 'Capaian Prestasi',
            'tmpt_perlombaan'       => 'Tempat Perlombaan',
            'tgl_perlombaan'        => 'Tanggal Perlombaan',
            'berkas'                => 'Berkas',
        ];
        $request->validate($rules, [], $attributes);

        try {
            $mahasiswa              = Mahasiswa::findOrFail(auth()->user()->id);
            $data                   = $request->except(['nama', 'nim', 'berkas']);
            $data['lokasi_berkas']  = $request->file('berkas')->store('alternatif');
            $data['nama_berkas']    = $request->file('berkas')->getClientOriginalName();
            $mahasiswa->alternatif()->create($data);

            return redirect()
                ->route('mhs.pelayanan.index')
                ->withSuccess('Data pengajuan prestasi anda berhasil dikirimkan.');
        } catch (\Throwable $th) {
            return back()
                ->withError('Data yang anda inputkan gagal dikirimkan, silahkan coba lagi nanti.');
        }
    }
}
