<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class PreferensiController extends Controller
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
                }

                $preferensi->push([
                    'alternatif'    => 'A' . ($index + 1),
                    'result'        => round($result, 2)
                ]);
            }

            $preferensi = $preferensi->sortByDesc('result');
            return view('pages.admin.preferensi.index', compact('preferensi'));
        } catch (\Throwable $th) {
            return redirect()
                ->route('admin.home')
                ->withError('Maaf kami tidak dapat mengarahkan anda ke halaman ini, silahkan coba lagi nanti.');
        }
    }
}
