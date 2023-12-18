<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alternatif;
use App\Models\Evaluasi;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MatrikController extends Controller
{
    public function index()
    {
        $kriteria   = Kriteria::orderBy('nama', 'ASC')->orderBy('bobot', 'ASC')->get();
        $alternatif = Alternatif::latest()->get();

        return view('pages.admin.matrik.index', compact('kriteria', 'alternatif'));
    }

    public function store(Request $request)
    {
        try {
            $rules = [
                'alternatif_id' => 'required|exists:alternatif,id',
                'kriteria_id'   => 'required|exists:kriteria,id',
                'nilai'         => 'required|numeric|min:1|max_digits:20'
            ];
            $attributes = [
                'alternatif_id' => 'Nama',
                'kriteria_id'   => 'Kriteria',
                'nilai'         => 'Nilai'
            ];
            $validator = Validator::make($request->all(), $rules, [], $attributes);
            $validator->after(function ($validator) use ($request) {
                $exists = Evaluasi::where(function ($query) use ($request) {
                    $query
                        ->where('alternatif_id', $request->alternatif_id)
                        ->where('kriteria_id', $request->kriteria_id);
                })->exists();
                if ($exists) $validator->errors()->add('alternatif_id', 'The data has already been registered');
            });
            if ($validator->fails()) return back()->withErrors($validator);

            $data = $validator->validate();
            Evaluasi::create($data);

            return redirect()
                ->route('admin.matrik.index')
                ->withSuccess('Data berhasil ditambahkan, silahkan tambah lagi.');
        } catch (\Throwable $th) {
            return back()->withError('Data yang anda inputkan gagal disimpan, silahkan coba lagi nanti.');
        }
    }

    public function destroy(Alternatif $alternatif)
    {
        try {
            $alternatif->evaluasi()->delete();
            $kriteria   = Kriteria::orderBy('nama', 'ASC')->orderBy('bobot', 'ASC')->get();
            $alternatif = Alternatif::latest()->get();
            $dataX      = view('pages.admin.matrik.data_x', compact('kriteria', 'alternatif'))->render();
            $dataR      = view('pages.admin.matrik.data_r', compact('kriteria', 'alternatif'))->render();

            return response()->json([
                'dataX'     => $dataX,
                'dataR'     => $dataR,
                'success'   => 'Data matrik berhasil dihapus.'
            ]);
        } catch (\Throwable $th) {
            return back()->withError('Data gagal dihapus, silahkan coba lagi nanti.');
        }
    }
}
