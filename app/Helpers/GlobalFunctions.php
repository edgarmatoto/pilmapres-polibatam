<?php

use App\Models\Alternatif;
use App\Models\Ulasan;

if (!function_exists('ulasan')) {
    function ulasan()
    {
        $ulasan = Alternatif::select('alternatif.*')
            ->whereDoesntHave('ulasan', fn ($query) => $query->whereNotNull('ulasan.isi'))
            ->where('alternatif.mahasiswa_id', auth()->user()->id)
            ->first();

        return $ulasan;
    }
}
