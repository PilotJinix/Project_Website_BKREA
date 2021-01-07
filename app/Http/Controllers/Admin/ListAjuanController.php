<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use \Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

    public function detail(Request $request, $id){
//        $user = $request->session()->get('username');
//        $data = DB::table('berita')->where('id', $id)->first();
        $data = DB::table('beasiswa')
            ->join('ajuan_pemohon', 'ajuan_pemohon.beasiswa_id','=','beasiswa.id')
            ->where('ajuan_pemohon.id','=',$id)
            ->get();
        return view('admin.detailpemohon', compact('data'));
    }

    public function download($id){
        $data = DB::table('ajuan_pemohon')->where('id',$id)->get('data_pemohon');
        $data1 = $data[0];
        $file = $data1->data_pemohon ;
            return response()->download(storage_path('app/public/data/'.$file));
    }

    public function accept($id){
        DB::table('ajuan_pemohon')->where('id',$id)->update([
            'feedback' => 'Diterima',
        ]);
        return redirect()->route('Aajuan');
    }


    public function reject($id){
        DB::table('ajuan_pemohon')->where('id',$id)->update([
            'feedback' => 'Tidak Diterima',
        ]);

        return redirect()->route('Aajuan');
    }

}
