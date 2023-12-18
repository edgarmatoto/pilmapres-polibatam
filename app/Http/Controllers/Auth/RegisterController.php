<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.auth.register');
    }

    public function store(Request $request)
    {
        try {
            $rules = [
                'nama'      => 'required|string|max:100|regex:/^[a-zA-Z\s]+$/',
                'nim'       => 'required|numeric|max_digits:15|unique:mahasiswa',
                'email'     => 'required|string|max:100|email|unique:mahasiswa',
                'no_hp'     => 'required|numeric|max_digits:15|unique:mahasiswa',
                'tanggal'   => 'required|numeric|between:1,31',
                'bulan'     => 'required|numeric|between:1,12',
                'tahun'     => 'required|date_format:Y',
                'password'  => 'required|string|min:5|max:20|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            ];
            $messages = [
                'nama.regex'        => 'Only accepts letters.',
                'password.regex'    => 'Passwords must contain at least 1 uppercase letter, lowercase letter, and numbers.'
            ];
            $attributes = [
                'nama'      => 'Nama Lengkap',
                'nim'       => 'NIM',
                'email'     => 'Email',
                'no_hp'     => 'No Hp',
                'tanggal'   => 'Tanggal',
                'bulan'     => 'Bulan',
                'tahun'     => 'Tahun',
                'password'  => 'Password',
            ];
            $validator = Validator::make($request->all(), $rules, $messages, $attributes);
            $validator->after(function ($validator) use ($request) {
                $day    = $request->input('tanggal');
                $month  = $request->input('bulan');
                $year   = $request->input('tahun');

                $date = checkdate($month, $day, $year);
                if (!$date) $validator->errors()->add('tanggal', 'Invalid date in the given month and year.');
            });
            if ($validator->fails()) return back()->withErrors($validator)->withInput();

            $data               = $request->except(['tanggal', 'bulan', 'tahun', 'password']);
            $data['tgl_lahir']  = date('Y-m-d', strtotime("$request->tahun-$request->bulan-$request->tanggal"));
            $data['password']   = Hash::make($request->password);
            Mahasiswa::create($data);

            return redirect()
                ->route('welcome')
                ->withSuccess('Selamat akun anda berhasil didaftarkan.');
        } catch (\Throwable $th) {
            return back()
                ->withError('Akun anda tidak dapat didaftarkan, silahkan coba lagi nanti.');
        }
    }
}
