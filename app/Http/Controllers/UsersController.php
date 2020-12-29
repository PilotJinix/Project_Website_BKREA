<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller{

    public function index(){
        return view('dashboard');
    }

    public function passuser(Request $request){
        $session = $request->session()->get('username');

        if ($session == null) {
            return redirect()->route('home');
        }
        $akun = DB::table('users')->where('username',$session)->first();

        return view('dashboard', compact('akun'));
    }
}
