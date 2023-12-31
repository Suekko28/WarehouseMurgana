<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function __construct(){
        $this->middleware('guest')->except('logout');
    }
    public function authenticate(Request $request){
        $creds=$request->validate([
            'email'=>'required | email:dns',
            'password' => 'required'
        ]);
        
        if(Auth::attempt($creds)){
            $request->session()->regenerate();
            $user=auth()->user();
            return redirect()->intended('/dashboard');
        }
        return back()->with('LoginError','Invalid Credentials');
        
    }

    public function logout(Request $request){
        
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
