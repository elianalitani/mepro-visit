<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KunjunganController extends Controller
{
    public function index(){
        $user = Auth::user()->load('karyawan');
        
        $statusColors = [
            'Menunggu' => ['border' => '#FACC15', 'text' => '#FACC15'],
            'Tertunda' => ['border' => '#F97316', 'text' => '#F97316'],
            'Sedang berlangsung' => ['border' => '#3171DA', 'text' => '#3171DA']
        ];
        
        if($user->role === 'Satpam'){
            return view('security.daftarKunjungan', compact('user', 'statusColors'));
        }elseif($user->role === 'Resepsionis'){
            return view('receptionist.daftarKunjungan', compact('user', 'statusColors'));
        }elseif($user->role === 'Admin'){
            return view('admin.daftarKunjungan', compact('user', 'statusColors'));
        }
    }
    
    public function tambahKunjungan(){
        return view('formKunjungan');
    }
    
    public function lihatKunjungan(){
        return view('detailKunjungan');
    }
}
