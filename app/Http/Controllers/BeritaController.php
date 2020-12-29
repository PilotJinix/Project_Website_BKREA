<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(Request $request){
        $user = $request->session()->get('username');
        if ($user != null) {
            $akun = DB::table('users')->where('username',$user)->first();

            return view('listbea', compact('akun'));
        }
        return view('listbea');
    }

    public function detailberita(){
        return view('detailberita');
    }
}
