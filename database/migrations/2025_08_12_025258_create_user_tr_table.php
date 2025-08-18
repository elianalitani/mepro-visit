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
            $table->bigIncrements('id');
            $table->string('id_user', 12)->primary();
            $table->string('username', 12);
            $table->string('password', 255);
            $table->string('role', 50);
            $table->string('id_karyawan', 12);
            $table->string('status', 225);
            $table->boolean('is_deleted');
            $table->timestamps();
            $table->withUserAudit();

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