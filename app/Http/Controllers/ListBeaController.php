<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ListBeaController extends Controller
{
    public function index(Request $request){
        $user = $request->session()->get('username');
        $data=DB::table('beasiswa')->latest()->get();
        if ($user != null) {
            $akun = DB::table('users')->where('username',$user)->first();

            return view('listbea', compact('akun','data'));
        }
        return view('listbea',compact('data'));
    }

    public function detailbea(Request $request, $id){
        $user = $request->session()->get('username');
        $data = DB::table('beasiswa')->where('id', $id)->first();
        if ($user != null) {
            $akun = DB::table('users')->where('username',$user)->first();

            return view('detailbea', compact('akun','data'));
        }
        return view('detailbea', compact('data'));
    }

    public function lanjutisi(){
        return view('applybea');
    }
}
