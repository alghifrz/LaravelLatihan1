<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showRegisterForm()
    {
        return view('signup');
    }

    public function showLoginForm()
    {
        return view('signin'); 
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|min:5',
            'password' => 'required|min:8',
        ]);

        $data = $request->all();

        session()->put('user', $data);

        return redirect('/signin')->with('success', 'Registration Successful!');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $username = $request->input('username');
        $password = $request->input('password');

        $user = session()->get('user');

        if ($user && $user['username'] == $username && $user['password'] == $password) {
            session()->put('is_login', true);

            return redirect('/profile');
        }

        // Jika gagal login, kembalikan ke login dengan pesan error
        return redirect('/signin')->with('error', 'Invalid credentials!');
    }
    
}
