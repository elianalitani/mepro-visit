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
        Schema::create('user_tr', function (Blueprint $table) {
            $table->string('id', 12)->primary();
            $table->string('username', 12);
            $table->string('password', 255);
            $table->string('role', 50);
            $table->string('id_karyawan', 12);
            $table->boolean('show_is');
            $table->timestamps();

            $table->foreign('id_karyawan')->references('nip')->on('karyawan_mt')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_tabel');
    }
};
