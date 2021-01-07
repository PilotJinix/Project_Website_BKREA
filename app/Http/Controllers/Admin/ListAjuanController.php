<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListAjuanController extends Controller{

    public function index(){
//        $data1=DB::table('ajuan_pemohon')->latest()->get();

//        $akun = DB::table('users')->where('username',$user)->first();
//        $pengguna =$akun->id;

        $data = DB::table('ajuan_pemohon')
            ->join('beasiswa','ajuan_pemohon.beasiswa_id', '=', 'beasiswa.id')
            ->select('ajuan_pemohon.*','beasiswa.nama_beasiswa', 'beasiswa.gambar', 'beasiswa.deskripsi')->latest()
            ->get();
//        return dd($riwayat);
        return view('admin.listajuan', compact( 'data'));

//        return view('admin.listajuan', compact('data'));
    }

    public function hapus(Request $request, $id){
        DB::table('ajuan_pemohon')->where('id',$id)->delete();
        return redirect()->route('Aajuan');
    }

}
