<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class MatrikController extends Controller
{
    public function index()
    {
        $kriteria = Kriteria::orderBy('simbol', 'ASC')->orderBy('nama', 'ASC')->orderBy('bobot', 'ASC')->get();
        $alternatif = Alternatif::latest()->get();

        return view('pages.admin.matrik.index', compact('kriteria', 'alternatif'));
    }
}
