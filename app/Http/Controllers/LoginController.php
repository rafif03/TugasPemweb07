<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'Username' => ['required'],
            'password' => ['required']
        ]);
 
        if(Auth::attempt($credentials))
        {
            return redirect('/users');
        }

        return back()->with('loginError', 'Login failed');
    }

    public function regist()
    {
        return view('register');
    }

    public function register(Request $request){
        $credentials = $request->validate([
            'Username' => ['required'],
            'password' => ['required'],
            'Nama'     => ['required']
        ]);
        $credentials['IDRole'] = 5;
        User::create($credentials);
        return redirect('login');
    }
}
