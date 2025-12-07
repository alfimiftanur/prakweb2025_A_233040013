<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // $username = $request->username;
        // dd($username);
        $validasi = $request->validate([
            'name' => 'required|max:50',
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password1' => 'required',
            'password2' => 'required|same:password1',
        ]);

        User::create([
            'name'=> $validasi['name'],
            'username'=> $validasi['username'],
            'email'=> $validasi['email'],
            'password'=> $validasi['password2']
            ]);

            return redirect('/login')->with('success', 'Registrasi berhasil');
    }
}
