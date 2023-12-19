<?php

namespace Database\Seeders;

use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataAdmin = [
            [
                'username'      => 'admin',
                'password'      => bcrypt('admin'),
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ]
        ];
        Admin::insert($dataAdmin);
    }
}
