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
            $table->bigIncrements('id');
            $table->string('id_notifikasi', 12)->primary();
            $table->boolean('dibaca');
            $table->date('waktu_notifikasi');
            $table->string('id_kunjungan', 12)->nullable();
            $table->boolean('is_deleted');
            $table->timestamps();
            $table->withUserAudit();

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