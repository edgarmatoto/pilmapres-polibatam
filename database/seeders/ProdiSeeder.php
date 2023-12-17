<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataProdi = [
            [
                'nama'          => 'Akuntansi',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'nama'          => 'Akuntansi Manajerial',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'nama'          => 'Administrasi Bisnis Terapan',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'nama'          => 'Logistik Perdagangan Internasional',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'nama'          => 'Administrasi Bisnis Terapan (International Class)',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'nama'          => 'Jalur Cepat Distribusi Barang',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'nama'          => 'Teknik Elektronika Manufaktur',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'nama'          => 'Teknologi Rekayasa Elektronika',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'nama'          => 'Teknik Instrumentasi',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'nama'          => 'Teknik Mekatronika',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'nama'          => 'Teknologi Rekayasa Pembangkit Energi',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'nama'          => 'Teknik Robotika',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'nama'          => 'Teknik Informatika',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'nama'          => 'Teknologi Geomatika',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'nama'          => 'Animasi',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'nama'          => 'Teknologi Rekayasa Multimedia',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'nama'          => 'Rekayasa Keamanan Siber',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'nama'          => 'Rekayasa Perangkat Lunak',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ]
        ];
        Prodi::insert($dataProdi);
    }
}
