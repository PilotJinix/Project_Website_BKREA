<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function postlogin(Request $request)
    {
        
        if (Auth::attempt($request->only('username','password'))) {
            return redirect()->route('homeadmin');
        }
        return redirect()->route('logadmin');
    }

    public function Alogout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
