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
        Schema::table('kunjungan_tr', function (Blueprint $table) {
            $table->string('ttd_pihaktujuan', 255)->nullable()->after('id_karyawan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kunjungan_tr', function (Blueprint $table) {
            $table->string('ttd_pihaktujuan', 255)->nullable()->after('id_karyawan');
        });
    }
};
