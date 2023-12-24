<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ulasan;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    public function index()
    {
        $ulasan = Ulasan::where('ditolak', '!=', true)->latest()->get();
        return view('pages.admin.ulasan.index', compact('ulasan'));
    }
}
