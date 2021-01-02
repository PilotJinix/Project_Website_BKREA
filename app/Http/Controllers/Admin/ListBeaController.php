<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListBeaController extends Controller{

    public function index(){
        $data=DB::table('users')->latest()->get();
        return view('admin.listbeaadmin', compact('data'));
    }

    public function hapusakun(Request $request, $id){
        DB::table('users')->where('id',$id)->delete();

        return redirect()->route('tesadminlistbea','daftar-pengguna')->with('deleted','Akun berhasil dihapus');

    }
}
