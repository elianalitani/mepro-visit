<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function showLogin(){
        return view('/login');
    }
    
    public function login(Request $request){
        $credentials = $request->only('username', 'password');
        
        $user = User::where('username', $credentials['username'])
                    ->where('is_deleted', false)
                    ->first();
                    
        if($user && Hash::check($credentials['password'], $user->password)){
            Auth::login($user);
            session(['role' => $user->role]);
            return redirect()->intended('/dashboard');
        }
        
        return back()->withErrors([
            'login' => 'Username atau password salah'
        ])->withInput();
    }
    
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/login');
    }
}
