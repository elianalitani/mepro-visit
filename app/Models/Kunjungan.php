<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    protected $table = 'kunjungan_tr';
    protected $primaryKey = 'id_kunjungan';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = [
        'id_kunjungan',
        'nama_tamu',
        'no_identitas',
        'instansi',
        'keperluan',
        'waktu_kedatangan',
        'waktu_kepulangan',
        'status',
        'show_is',
        'id_karyawan',
        'id_user_satpam',
        'id_user_resepsionis',
        'ttd_pihaktujuan'
    ];

    protected $hidden = [
        
    ];
}
