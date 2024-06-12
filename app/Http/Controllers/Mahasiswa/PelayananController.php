<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\Alternatif;
use App\Models\Evaluasi;
use App\Models\Kriteria;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class PelayananController extends Controller
{
    public function index()
    {
        try {
            $evaluasi = Evaluasi::with('mahasiswa')
                ->select('mahasiswa_id', 'total_skor')
                ->orderBy('total_skor')
                ->get();

            return view('pages.mahasiswa.pelayanan.index', compact('evaluasi'));
        } catch (\Throwable $th) {
            return redirect()
                ->route('mhs.home')
                ->withError('Maaf kami tidak dapat mengarahkan anda ke halaman ini, silahkan coba lagi nanti.');
        }
    }

    public function store(Request $request)
    {
        $rules = [
            'nama_perlombaan'      => 'required|string|max:255',
            'jenis_perlombaan'      => 'required|in:individu,kelompok',
            'tingkat_perlombaan'    => 'required|in:internasional,nasional,regional,provinsi',
            'capaian_prestasi'      => 'required|in:1,2,3',
            'tmpt_perlombaan'       => 'required|string|max:255',
            'tgl_perlombaan'        => 'required|date',
            'berkas'                => 'required|file|mimes:pdf,jpeg,png|max:5120',
        ];
        $attributes = [
            'nama_perlombaan'      => 'Nama Perlombaan',
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

            // score for each tingkat perlombaan
            $skorTingkat = [
                'internasional' => 4,
                'regional' => 3,
                'nasional' => 2,
                'provinsi' => 1
            ];

            // multiplier for each capaian
            $multiplierTingkat = [
                '1' => 3,
                '2' => 2,
                '3' => 1,
            ];

            $skor = $skorTingkat[$request->tingkat_perlombaan] * $multiplierTingkat[$request->capaian_prestasi];

            if ($request->jenis_perlombaan == "kelompok") {
                $skor = $skor / 2;
            }

            // normalize the score
            $skor = $skor / 12;

            // multiply the bobot by the skor
            $bobotPencapaian = Kriteria::select('bobot')
                ->where('id', 2)
                ->get()
                ->first()
                ->bobot;
            $skor = $bobotPencapaian * $skor;
            $data["skor"] = $skor;

            // store data
            $mahasiswa->alternatif()->create($data);

            // store total skor to evaluasi table
            // Check if the record with the same mahasiswa_id already exists
            $evaluasi = Evaluasi::where('mahasiswa_id', $mahasiswa->id)->first();

            if ($evaluasi) {
                // If record exists, update the total_skor
                $evaluasi->total_skor += $skor;
                $evaluasi->save();
            } else {
                // If record does not exist, create a new record
                $ipkScore = Mahasiswa::select('skor_ipk')
                    ->where('id', $mahasiswa->id)
                    ->first()
                    ->skor_ipk;
                $skor += $ipkScore;

                Evaluasi::create([
                    'mahasiswa_id' => $mahasiswa->id,
                    'total_skor' => $skor,
                ]);
            }

            return redirect()
                ->route('mhs.pelayanan.index')
                ->withSuccess('Data pengajuan prestasi anda berhasil dikirimkan.');
        } catch (\Throwable $th) {
            return back()
                ->withError('Data yang anda inputkan gagal dikirimkan, silahkan coba lagi nanti.');
        }
    }
}
