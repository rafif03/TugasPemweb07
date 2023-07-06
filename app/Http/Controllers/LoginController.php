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
        $user = User::where([
            'username' => $request->input('Username'), 
            'password' => $request->input('Password')
        ])->first();
        
        if($user)
        {
            Auth::login($user);
            return redirect('/users');
        }

    }
}
