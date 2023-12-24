<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class PelayananController extends Controller
{
    public function index()
    {
        try {
            $kriteria   = Kriteria::orderBy('nama', 'ASC')->orderBy('bobot', 'ASC')->get();
            $alternatif = Alternatif::has('evaluasi')->get();

            $preferensi = collect([]);
            foreach ($alternatif as $index => $alt) {
                $result = 0;

                foreach ($kriteria as $kri) {
                    $bobot = $kri
                        ->evaluasi()
                        ->orderByRaw('CAST(evaluasi.nilai AS INT) ' . ($kri->atribut == 'benefit' ? 'DESC' : 'ASC'))
                        ->value('evaluasi.nilai');

                    $matrikX = $alt
                        ->evaluasi()
                        ->where('evaluasi.kriteria_id', $kri->id)
                        ->first()?->nilai;

                    $result += ($bobot && $matrikX ? ($kri->atribut == 'benefit' ? $matrikX / $bobot : $bobot / $matrikX) : 0) * $kri->bobot;
                    $result = round($result, 2);
                }

                $existingNIM = $preferensi->search(fn ($item) => $item['nim'] == $alt->mahasiswa->nim);
                if ($existingNIM !== false) {

                    $preferensi->transform(function ($item) use ($result, $alt) {
                        if ($item['nim'] == $alt->mahasiswa->nim && $item['poin'] < $result) {
                            $item['poin'] = $result;
                        }

                        return $item;
                    });
                } else {

                    $preferensi->push([
                        'nim'   => $alt->mahasiswa->nim,
                        'nama'  => ucwords($alt->mahasiswa->nama),
                        'poin'  => $result
                    ]);
                }
            }

            $preferensi = $preferensi->sortByDesc('poin');
            return view('pages.mahasiswa.pelayanan.index', compact('preferensi'));
        } catch (\Throwable $th) {
            return redirect()
                ->route('mhs.home')
                ->withError('Maaf kami tidak dapat mengarahkan anda ke halaman ini, silahkan coba lagi nanti.');
        }
    }

    public function store(Request $request)
    {
        $rules = [
            'jenis_perlombaan'      => 'required|string|max:100',
            'tingkat_perlombaan'    => 'required|in:internasional,nasional,kabupaten/kota',
            'capaian_prestasi'      => 'required|string|max:100',
            'ipk'                   => 'required|numeric|min:1|max:4',
            'tmpt_perlombaan'       => 'required|string|max:100',
            'tgl_perlombaan'        => 'required|date',
            'berkas'                => 'required|file|mimes:pdf,jpeg,png|max:5120',
        ];
        $attributes = [
            'jenis_perlombaan'      => 'Jenis Perlombaan',
            'tingkat_perlombaan'    => 'Tingkat Perlombaan',
            'capaian_prestasi'      => 'Capaian Prestasi',
            'ipk'                   => 'IPK',
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
