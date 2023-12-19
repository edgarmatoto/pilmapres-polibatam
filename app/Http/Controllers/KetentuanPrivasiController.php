<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KetentuanPrivasiController extends Controller
{
    public function index()
    {
        return view('pages.ketentuan-privasi.index');
    }
}
