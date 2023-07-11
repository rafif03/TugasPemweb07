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
            if (Auth::user()->IDRole == 1) {
                return redirect('dasboardadmin');
            }

            if (Auth::user()->IDRole == 2) {
                return redirect('dasboardpetugas');
            }

            if (Auth::user()->IDRole == 3) {
                return redirect('dasboardkasir');
            }

            if (Auth::user()->IDRole == 4) {
                return redirect('dasboardpelanggan');
            }
            
            if (Auth::user()->IDRole == 5) {
                return redirect('dasboardguest');
            }
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

    public function logout(Request $request)
    {
        Auth::logout();
 
        request()->session()->invalidate();
 
        request()->session()->regenerateToken();
 
        return redirect('login');
    }
}
