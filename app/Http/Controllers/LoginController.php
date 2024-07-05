<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            //session regenerate untuk menghindari teknik hacking session fixation attack
            return redirect()->intended('/dashboard');
            //intended untuk me-redirect user ke sebuah tempat/URL sebelum melewati sebuah authentication middleware 
        }
        //Jika login gagal, maka kembali ke halaman login dengan memberikan pesan error
        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(){

        Auth::logout();

        request()->session()->invalidate(); 
            //Supaya tidak bisa dipakai
        request()->session()->regenerateToken(); 
            //Supaya tidak di bajak
        return redirect('/');
            //Beralih ke halaman home
    }
    
}
