<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\Prodi;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $prodi = Prodi::orderBy('nama', 'ASC')->get();
        return view('pages.mahasiswa.profile.index', compact('prodi'));
    }
}
