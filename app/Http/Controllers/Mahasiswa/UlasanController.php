<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\Alternatif;
use App\Models\Ulasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UlasanController extends Controller
{
    public function store(Request $request, Alternatif $alternatif)
    {
        try {
            $rules      = ['ulasan' => 'required|string|max:500'];
            $validator  = Validator::make($request->all(), $rules);

            $validator->after(function ($validator) use ($alternatif) {
                $exists = Ulasan::where('alternatif_id', $alternatif->id)->exists();
                if ($exists) $validator->errors()->add('ulasan', 'This feedback has been inputted by you before.');
            });

            if ($validator->fails()) return response()->json(['error' => 'Pastikan kolom umpan balik telah anda isi & tidak melebihi dari 500 karakter.']);
            if ($alternatif->mahasiswa_id != auth()->user()->id) return response()->json(['error' => 'Anda tidak memiliki akses untuk tindakan ini, silahkan hubungi administrator jika memiliki pertanyaan.']);

            $alternatif->ulasan()->create(['isi' => $request->ulasan]);
            return response()->json(['success' => 'Selamat umpan balik anda berhasil kami kirimkan.']);
        } catch (\Throwable $th) {
            return response()
                ->json(['error' => 'Sepertinya kami tidak dapat mengirimkan umpan balik anda, silahkan coba lagi nanti.']);
        }
    }

    public function decline(Alternatif $alternatif)
    {
        try {
            $abort = Ulasan::where('alternatif_id', $alternatif->id)->exists() || $alternatif->mahasiswa_id != auth()->user()->id;
            if ($abort) return response()->json(['error' => 'Anda tidak memiliki akses untuk tindakan ini, silahkan hubungi administrator jika memiliki pertanyaan.']);

            $alternatif->ulasan()->create(['ditolak' => true]);
            return response()->json(['success' => 'Umpan balik berhasil ditolak.']);
        } catch (\Throwable $th) {
            return response()
                ->json(['error' => 'Sepertinya kami tidak dapat menyembunyikan umpan balik anda, silahkan coba lagi nanti.']);
        }
    }
}
