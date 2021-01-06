<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(Request $request){
        $user = $request->session()->get('username');
        $data=DB::table('berita')->latest()->get();
        if ($user != null) {
            $akun = DB::table('users')->where('username',$user)->first();

            return view('berita', compact('akun','data'));
        }
        return view('berita', compact('data'));
    }

    public function detailberita(Request $request, $id){
        $user = $request->session()->get('username');
        $data = DB::table('berita')->where('id', $id)->first();
        if ($user != null) {
            $akun = DB::table('users')->where('username',$user)->first();

            return view('detailberita', compact('akun','data'));
        }
        return view('detailberita', compact('data'));
    }
}
