<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    protected $table = 'notifikasi_tr';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = [
        'id',
        'dibaca',
        'waktu_notifikasi',
        'ttd_status',
        'create_by',
        'id_kunjungan'
    ];

    protected $hidden = [
        
    ];
}
