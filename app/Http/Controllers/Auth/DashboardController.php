<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
        // $user = Auth::user()->load('karyawan');
        
        // if($user->role === 'Satpam'){
        //     return view('security.dashboard', compact('user'));
        // }elseif($user->role === 'Resepsionis'){
        //     return view('receptionist.dashboard', compact('user'));
        // }elseif($user->role === 'Admin'){
        //     return view('admin.dashboard', compact('user'));
        // }
    }
}
