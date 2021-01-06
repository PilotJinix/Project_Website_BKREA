<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

}
