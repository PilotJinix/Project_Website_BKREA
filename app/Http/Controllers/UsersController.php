<?php
namespace App\Http\Controllers;
use App\User;
use Hash;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller{

    public function register(Request $request){
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:100|regex:/^\S*$/u|unique:users',
            'nomer_hp' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        User::create([
            'nama_lengkap' => $request->nama_lengkap,
            'username' => $request->username,
            'email' => $request->email,
            'nomer_hp' => $request->nomer_hp,
            'alamat' => $request->alamat,
            'password' => Hash::make($request->password),
        ]);

        return redirect('login')->with('success','Register Berhasil');
    }

    public function auten(Request $request){
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)){
            $request->session()->put('username', $request->username);
            return redirect()->intended('dashboard');
        }
        return redirect('login')->with('error', 'Oppss! Silakan masukan data dengan benar');
    }

    public function logout(Request $request) {
        $request->session()->forget('username');
        Auth::logout();

        return redirect('login');
    }
}
