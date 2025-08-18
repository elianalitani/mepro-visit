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
            $table->bigIncrements('id');
            $table->string('id_kunjungan', 12)->primary();
            $table->string('nama_tamu', 255);
            $table->string('no_identitas', 255);
            $table->string('instansi', 255);
            $table->string('keperluan', 255);
            $table->date('tanggal_kunjungan');
            $table->time('waktu_kedatangan');
            $table->time('waktu_kepulangan')->nullable();
            $table->string('status', 50);
            $table->string('deskripsi', 255)->nullable();
            $table->string('id_karyawan', 12);
            $table->string('id_user_satpam', 12)->nullable();
            $table->string('id_user_resepsionis', 12)->nullable();
            $table->boolean('is_deleted');
            $table->timestamps();
            $table->withUserAudit();

            $table->foreign('id_karyawan')->references('nip')->on('karyawan_mt')->onDelete('set null');
            $table->foreign('id_user_satpam')->references('id_user')->on('user_tr')->onDelete('set null');
            $table->foreign('id_user_resepsionis')->references('id_user')->on('user_tr')->onDelete('set null');
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