<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    protected $table = 'notifikasi_tr';
    protected $primaryKey = 'id_notifikasi';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = [
        'id',
        'id_notifikasi',
        'dibaca',
        'waktu_notifikasi',
        'id_kunjungan',
        'is_deleted',
        'created_at',
        'updated_at',
        'create_by',
        'modified_by'
    ];

    protected $hidden = [
        
    ];

    public function kunjungan()
    {
        return $this->belongsTo(Kunjungan::class, 'id_kunjungan', 'id_kunjungan');
    }
}
