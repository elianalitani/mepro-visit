<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    protected $table = 'divisi_mt';
    protected $primaryKey = 'id_divisi';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = [
        'id_divisi',
        'nama_divisi'
    ];

    protected $hidden = [

    ];
}
