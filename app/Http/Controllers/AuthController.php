<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        $var = [
            'title' => 'login'
        ];
        return view('auth.login');
    }

    public function register()
    {
        $var = [
            'title' => 'register'
        ];
        return view('auth.register');
    }

    public function logout()
    {
        Auth::logout();

        session()->invalidate();
        session()->regenerateToken();

        return redirect('/login');
    }
}
