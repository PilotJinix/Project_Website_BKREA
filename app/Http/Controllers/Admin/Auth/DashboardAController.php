<?php
namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardAController extends Controller
{
    public function index(){
        $data= DB::table('users')->latest()->get();
        $data_user= DB::table('users')->latest()->count();
        $data_berita= DB::table('berita')->latest()->count();
        $data_beasiswa= DB::table('beasiswa')->latest()->count();
        $data_pemohon= DB::table('ajuan_pemohon')->latest()->count();
        return view('admin.dashboard', compact('data', 'data_user', 'data_berita', 'data_beasiswa', 'data_pemohon'));
    }

    public function hapus(Request $request, $id){
        DB::table('users')->where('id',$id)->delete();
        return redirect()->route('homeadmin')->with('deleted','Akun berhasil dihapus');
    }

    public function login()
    {
        return view('admin.auth.login');
    }

    public function auten(Request $request){
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)){
            $request->session()->put('username', $request->username);
            return redirect()->intended('homeadmin');
        }
        return redirect()->route('logadmin');
    }



}
