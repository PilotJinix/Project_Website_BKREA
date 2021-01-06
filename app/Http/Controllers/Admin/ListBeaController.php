<?php
namespace App\Http\Controllers\Admin;

use App\Beasiswa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListBeaController extends Controller{

    public function index(){
        $data=DB::table('beasiswa')->latest()->get();
        return view('admin.listbeaadmin', compact('data'));
    }

    public function news(){
//        $data=DB::table('berita')->latest()->get();
        return view('admin.addbeaadmin');
    }

    public function beasiswa(Request $request){
        $data=DB::table('beasiswa')->latest()->get();
        $request->validate([
            'nama_beasiswa' => 'required|string',
            'gambar_beasiswa' => 'required|file|mimes:jpg,jpeg,png,gif',
            "nama_instansi" => 'required|string',
            "kuota" => 'required|string',
            'deskripsi' => 'required|string'
        ]);

        $tujuan_upload = "public/beasiswa/";
        $file = $request->file('gambar_beasiswa');
        $file_name = time()."_".$file->getClientOriginalName();
        $request ->file('gambar_beasiswa')->storeAs($tujuan_upload,$file_name);

        Beasiswa::create([
            'nama_beasiswa' => $request->nama_beasiswa,
            'nama_intansi' => $request->nama_instansi,
            'kuota' => $request->kuota,
            'gambar' => $file_name,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('Abeasiswa')->with(compact('data'));
    }

    public function edit(Request $request, $id){
        $data = DB::table('beasiswa')->where('id',$id)->first();
        return view('admin.editbea', compact('data'));
    }

    public function saveEdit(Request $request, $id){
        $request->validate([
            'nama_beasiswa' => 'required|string',
            "nama_instansi" => 'required|string',
            "kuota" => 'required|string',
            'deskripsi' => 'required|string'
        ]);

        DB::table('beasiswa')->where('id',$id)->update([
            'nama_beasiswa' => $request->nama_beasiswa,
            'nama_intansi' => $request->nama_instansi,
            'kuota' => $request->kuota,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('Abeasiswa')->with('changed','Artikel berhasil diperbaharui!');
    }

    public function hapus(Request $request, $id){
        DB::table('beasiswa')->where('id',$id)->delete();
        return redirect()->route('Abeasiswa','daftar-pengguna')->with('deleted','Akun berhasil dihapus');
    }
}
