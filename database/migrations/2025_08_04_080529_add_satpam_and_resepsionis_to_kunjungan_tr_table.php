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
            // Hapus foreign key id_user lama jika ada
            $table->dropForeign(['id_user']);
            
            // Hapus kolom id_user lama
            $table->dropColumn('id_user');

            // Tambah kolom baru
            $table->string('id_user_satpam', 12)->nullable()->after('id_karyawan');
            $table->string('id_user_resepsionis', 12)->nullable()->after('id_user_satpam');

            // Tambahkan foreign key baru
            $table->foreign('id_user_satpam')->references('id')->on('user_tr')->onDelete('set null');
            $table->foreign('id_user_resepsionis')->references('id')->on('user_tr')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kunjungan_tr', function (Blueprint $table) {
            // Drop foreign key & kolom baru
            $table->dropForeign(['id_user_satpam']);
            $table->dropForeign(['id_user_resepsionis']);
            $table->dropColumn(['id_user_satpam', 'id_user_resepsionis']);

            // Tambah kolom id_user kembali
            $table->string('id_user', 12)->nullable()->after('id_karyawan');
            $table->foreign('id_user')->references('id')->on('user_tr')->onDelete('set null');
        });
    }
};
