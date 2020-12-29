<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard');
    }

    public function passlog(Request $request){
        $session = $request->session()->get('username');

        if ($session == null) {
            return redirect()->route('home');
        }
        $akun = DB::table('users')->where('username',$session)->first();

        return view('dashboard', compact('akun'));
    }
}
