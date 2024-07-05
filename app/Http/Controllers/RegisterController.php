<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index() 
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    // public function store() 
    // {
    //     return request()->all();
    // }

    //Bisa Juga

    public function store(Request $request) 
    {
        $validatedData = $request->validate([ //Memasukkan $request menjadi $validatedData
            'name' => 'required|max:255',
            'username' => ['required', 'min:3' , 'max:255' , 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255'
        ]);
        
        //Untuk mengenkripsi password 
        //Cara1
        // $validatedData['password'] = bcrypt($validatedData['password']);

        //Cara2
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData); //memasukkan $validatedData ke model User

        // $request->session()->flash('success', 'Registration successfull! Please login'); 

        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}
