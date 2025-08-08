<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KunjunganController extends Controller
{
    public function index(){
        $user = Auth::user()->load('karyawan');
        
        if($user->role === 'Satpam'){
            return view('security.daftarKunjungan', compact('user'));
        }elseif($user->role === 'Resepsionis'){
            return view('receptionist.daftarKunjungan', compact('user'));
        }elseif($user->role === 'Admin'){
            return view('admin.daftarKunjungan', compact('user'));
        }
    }
}
