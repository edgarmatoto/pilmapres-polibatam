<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;

    protected
        $table      = 'alternatif',
        $guarded    = ['id'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id', 'id');
    }

    public function evaluasi()
    {
        return $this->hasMany(Evaluasi::class, 'alternatif_id', 'id');
    }
}
