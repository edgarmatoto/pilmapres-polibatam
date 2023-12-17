<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected
        $table      = 'mahasiswa',
        $guarded    = ['id'];

    public function alternatif()
    {
        return $this->hasOne(Alternatif::class, 'mahasiswa_id', 'id');
    }
}
