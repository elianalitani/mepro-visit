<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan_mt';
    protected $primaryKey = 'nip';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = [
        'nip',
        'nik',
        'nama',
        'email',
        'no_hp',
        'alamat',
        'jabatan',
        'tanggal_lahir',
        'status_kepegawaian'
    ];

    protected $hidden = [
        'nik',
        'email',
        'no_hp',
        'alamat',
        'jabatan',
        'tanggal_lahir',
        'status_kepegawaian'
    ];
}

