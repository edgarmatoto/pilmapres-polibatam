<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alternatif', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id')->constrained('mahasiswa')->onDelete('cascade')->onUpdate('cascade');
            $table->string('jenis_perlombaan');
            $table->enum('tingkat_perlombaan', ['internasional', 'nasional', 'kabupaten/kota']);
            $table->string('capaian_prestasi');
            $table->string('tmpt_perlombaan');
            $table->string('tgl_perlombaan');
            $table->string('lokasi_berkas');
            $table->string('nama_berkas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alternatif');
    }
};
