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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prodi_id')->nullable()->constrained('prodi')->onDelete('set null')->onUpdate('cascade');
            $table->string('nim')->unique();
            $table->string('email')->nullable()->unique();
            $table->string('no_hp')->nullable()->unique();
            $table->string('nik')->nullable()->unique();
            $table->string('nama');
            $table->date('tgl_lahir')->nullable();
            $table->string('kelas')->nullable();
            $table->year('angkatan')->nullable();
            $table->string('dosen_wali')->nullable();
            $table->date('tgl_masuk')->nullable();
            $table->enum('status', ['aktif', 'cuti'])->default('aktif');
            $table->enum('jenkel', ['laki-laki', 'perempuan'])->nullable();
            $table->enum('status_martial', ['lajang', 'sudah menikah'])->nullable();
            $table->string('tmpt_lahir')->nullable();
            $table->string('kewarganegaraan')->nullable();
            $table->string('agama')->nullable();
            $table->string('gol_darah')->nullable();
            $table->string('kode_pos')->nullable();
            $table->text('alamat')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
