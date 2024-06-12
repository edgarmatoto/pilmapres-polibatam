<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Mahasiswa extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected
        $table      = 'mahasiswa',
        $guarded    = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function alternatif()
    {
        return $this->hasMany(Alternatif::class, 'mahasiswa_id', 'id');
    }

    public function evaluasi()
    {
        return $this->hasMany(Evaluasi::class, 'mahasiswa_id', 'id');
    }
}
