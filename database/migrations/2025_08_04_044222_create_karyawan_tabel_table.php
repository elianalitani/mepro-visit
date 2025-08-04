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
        Schema::create('karyawan_mt', function (Blueprint $table) {
            $table->string('nip', 12)->primary();
            $table->string('nik', 16);
            $table->string('nama', 255);
            $table->string('email', 100);
            $table->string('no_hp', 20);
            $table->string('alamat', 255);
            $table->string('id_divisi', 12);
            $table->string('jabatan', 255);
            $table->date('tanggal_lahir');
            $table->string('status_kepegawaian', 255);
            $table->timestamps();

            $table->foreign('id_divisi')->references('id_divisi')->on('divisi_mt')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawan_tabel');
    }
};
