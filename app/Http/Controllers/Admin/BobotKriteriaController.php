<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class BobotKriteriaController extends Controller
{
    public function index()
    {
        $kriteria = Kriteria::orderBy('nama', 'ASC')->orderBy('bobot', 'ASC')->get();
        return view('pages.admin.bobot-kriteria.index', compact('kriteria'));
    }

    public function store(Request $request)
    {
        //
    }

    public function edit(Kriteria $kriteria)
    {
        return view('pages.admin.bobot-kriteria.edit', compact('kriteria'));
    }

    public function update(Request $request, Kriteria $kriteria)
    {
        $rules = [
            'bobot'     => 'required|numeric|min:1',
        ];
        $attributes = [
            'bobot'     => 'Bobot',
        ];
        $validator = $request->validate($rules, [], $attributes);

        try {
            $kriteria->update($validator);

            return redirect()
                ->route('admin.bobot-kriteria.index')
                ->withSuccess('Data bobot kriteria berhasil diperbaharui.');
        } catch (\Throwable $th) {
            return back()->withError('Data yang anda inputkan gagal diperbaharui, silahkan coba lagi nanti.');
        }
    }

    public function destroy(Kriteria $kriteria)
    {
        try {
            $kriteria->delete();
            $kriteria   = Kriteria::orderBy('nama', 'ASC')->orderBy('bobot', 'ASC')->get();
            $data       = view('pages.admin.bobot-kriteria.data', compact('kriteria'))->render();

            return response()->json([
                'success'   => 'Data bobot kriteria berhasil dihapus.',
                'data'      => $data
            ]);
        } catch (\Throwable $th) {
            return back()->withError('Data gagal dihapus, silahkan coba lagi nanti.');
        }
    }
}
