<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AkunController extends Controller
{
    public function index(){
        $user = Auth::user()->load('karyawan');
        
        return view('admin.daftarAkun');
    }
    
    public function tambahAkun(){
        return view('admin.formAkun');
    }
    
    public function lihatAkun(){
        return view('admin.detailAkun');
    }
    
    public function editAkun(){
        return view('admin.editAkun');
    }
}
