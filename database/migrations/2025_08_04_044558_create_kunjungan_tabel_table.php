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
        Schema::create('kunjungan_tr', function (Blueprint $table) {
            $table->string('id_Kunjungan', 12)->primary();
            $table->string('nama_tamu', 255);
            $table->string('no_Identitas', 255);
            $table->string('instansi', 255);
            $table->string('keperluan', 255);
            $table->date('waktu_kedatangan');
            $table->date('waktu_kepulangan')->nullable();
            $table->string('status', 50);
            $table->boolean('show_is');
            $table->string('id_karyawan', 12);
            $table->string('id_user', 12);
            $table->timestamps();

            $table->foreign('id_karyawan')->references('nip')->on('karyawan_mt')->onDelete('set null');
            $table->foreign('id_user')->references('id')->on('user_tr')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kunjungan_tabel');
    }
};
