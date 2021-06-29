<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function Login() {
        return view('Admin.Auth.Login');
    }

    public function Authentication(Request $request) {
        $login_data = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($login_data)){
            return redirect('admin');
        }
        return redirect('login')->with('error', 'The Email Or Password Is Invalid');
    }

    public function Logout() {
        if (Auth::check()) {
            Auth::logout();
        }
        return redirect('/');
    }
}
