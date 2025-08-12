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
        Schema::create('notifikasi_tr', function (Blueprint $table) {
            $table->string('id', 12)->primary();
            $table->boolean('dibaca');
            $table->date('waktu_notifikasi');
            $table->string('ttd_status', 50)->nullable();
            $table->string('create_by', 12);
            $table->string('id_kunjungan', 12)->nullable();
            $table->timestamps();

            $table->foreign('id_kunjungan')->references('id_kunjungan')->on('kunjungan_tr')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifikasi_tabel');
    }
};