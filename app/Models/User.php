<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'user_tr';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = [
        'id',
        'username',
        'password',
        'role',
        'id_karyawan',
        'show_is'
    ];

    protected $hidden = [
        'password',
        'id_karyawan',
        'show_is'
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
    
    public function getAuthIdentifierName(){
        return 'username';
    }
    
    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'id_karyawan', 'nip');
    }
}
