<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller{

    public function index(Request $request){
        $session = $request->session()->get('username');
        $data=DB::table('beasiswa')->latest()->get();
        if($session != null){
            return redirect()->route('dashboard', compact('data'));
        }
        return view('dashboard', compact('data'));
    }

    public function passuser(Request $request){
        $session = $request->session()->get('username');
        $data=DB::table('beasiswa')->latest()->get();
        if ($session == null) {
            return redirect()->route('home', compact('data'));
        }
        $akun = DB::table('users')->where('username',$session)->first();

        return view('dashboard', compact('akun', 'data'));
    }

    public function my_account(Request $request){
        $user = $request->session()->get('username');
        $akun = DB::table('users')->where('username',$user)->first();
        return view('selfakun', compact('akun'));
    }

    public function editProfile(Request $request){
        $user = $request->session()->get('username');
        $akun = DB::table('users')->where('username',$user)->first();
        return view('akunedit',compact('akun'));
    }

    public function editUser(Request $request){
        $user = $request->session()->get('username');
        $akun = DB::table('users')->where('username',$user)->first();
        $id = $akun->id;

        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|',
            'username' => 'required|string|max:100',
            'nomer_hp' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
        ]);

        DB::table('users')->where('id',$id)->update([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'username' => $request->username,
            'nomer_hp' => $request->nomer_hp,
            'alamat' => $request->alamat,
        ]);

        /* merubah nilai username pada session */
        $request->session()->put('username', $request->username);

        return redirect()->route('selftakun')->with('edit-success','Edit profile berhasil!');
    }

    public function editPassword(Request $request){
        $user = $request->session()->get('username');
        $akun = DB::table('users')->where('username',$user)->first();
        $id = $akun->id;

        $request->validate([
            'password_lama' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        $password_lama = $request->password_lama;

        if (Hash::check($password_lama,$akun->password)) {
            DB::table('users')->where('id',$id)->update([
                'password' => Hash::make($request->password),
            ]);
            return redirect()->route('edit-profile')->with('successUpdate','Password Anda Berhasil DiUbah!');
        }
        return redirect()->route('edit-profile')->with('error-password','Password Lama Anda Salah!');
    }
}
