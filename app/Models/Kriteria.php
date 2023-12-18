<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;

    protected
        $table      = 'kriteria',
        $guarded    = ['id'];

    public function evaluasi()
    {
        return $this->hasMany(Evaluasi::class, 'kriteria_id', 'id');
    }
}
