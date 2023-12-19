<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BantuanController extends Controller
{
    public function index()
    {
        return view('pages.bantuan.index');
    }
}
