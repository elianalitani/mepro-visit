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
        'tanggal_kunjungan',
        'waktu_kedatangan',
        'waktu_kepulangan',
        'status',
        'deskripsi',
        'id_karyawan',
        'id_user_satpam',
        'id_user_resepsionis',
        'is_deleted'
    ];

    protected $hidden = [
        
    ];
    
    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'id_karyawan', 'nip');
    }
    
    public function satpam()
    {
        return $this->belongsTo(User::class, 'id_user_satpam', 'id_user');
    }
    
    public function resepsionis()
    {
        return $this->belongsTo(User::class, 'id_user_resepsionis', 'id_user');
    }
}
