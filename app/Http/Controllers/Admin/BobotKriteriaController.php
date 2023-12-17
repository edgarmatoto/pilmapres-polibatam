<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class BobotKriteriaController extends Controller
{
    public function index()
    {
        $kriteria = Kriteria::orderBy('simbol', 'ASC')->orderBy('nama', 'ASC')->orderBy('bobot', 'ASC')->get();
        return view('pages.admin.bobot-kriteria.index', compact('kriteria'));
    }

    public function store(Request $request)
    {
        $rules = [
            'simbol'    => 'required|string|max:5|unique:kriteria',
            'nama'      => 'required|string|max:100|unique:kriteria',
            'bobot'     => 'required|numeric|min:1|max_digits:20',
            'atribut'   => 'required|in:cost,benefit'
        ];
        $attributes = [
            'simbol'    => 'Simbol',
            'nama'      => 'Kriteria',
            'bobot'     => 'Bobot',
            'atribut'   => 'Atribut'
        ];
        $request->validate($rules, [], $attributes);

        try {
            $dataKriteria               = $request->except('simbol');
            $dataKriteria['simbol']     = strtoupper($request->simbol);
            Kriteria::create($dataKriteria);

            return redirect()
                ->route('admin.bobot-kriteria.index')
                ->withSuccess('Data bobot kriteria berhasil disimpan.');
        } catch (\Throwable $th) {
            return back()->withError('Data yang anda inputkan gagal disimpan, silahkan coba lagi nanti.');
        }
    }
}
