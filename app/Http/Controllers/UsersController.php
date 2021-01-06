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
}
