<?php

use App\Models\Alternatif;
use App\Models\Ulasan;

if (!function_exists('alternatifDoesntHaveUlasan')) {
    function alternatifDoesntHaveUlasan()
    {
        $ulasan = Alternatif::select('alternatif.*')
            ->whereDoesntHave('ulasan', fn ($query) => $query->whereNotNull('ulasan.isi')->orWhere('ditolak', true))
            ->where('alternatif.mahasiswa_id', auth()->user()->id)
            ->first();

        return $ulasan;
    }
}
