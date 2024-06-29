<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alternatif;
use App\Models\Evaluasi;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class PreferensiController extends Controller
{
    public function index()
    {
        try {
            $evaluasi = Evaluasi::with('mahasiswa')
                ->select('mahasiswa_id', 'total_skor')
                ->orderBy('total_skor', 'desc')
                ->get();

            return view('pages.admin.preferensi.index', compact('evaluasi'));
        } catch (\Throwable $th) {
            return redirect()
                ->route('admin.home')
                ->withError('Maaf kami tidak dapat mengarahkan anda ke halaman ini, silahkan coba lagi nanti.');
        }
    }
}
