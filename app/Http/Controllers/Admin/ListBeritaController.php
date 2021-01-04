<?php

namespace App\Http\Controllers\Admin;

use App\Berita;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ListBeritaController extends Controller{

    public $berita ="storage/berita";
    public $beasiswa ="storage/beasiswa";

    public function index(){
        $data=DB::table('berita')->latest()->get();
        $pages = "berita";
        return view('admin.listberita', compact('data', 'pages'));
    }

    public function news(){
//        $data=DB::table('berita')->latest()->get();
        return view('admin.addberita');
    }

    public function berita(Request $request){
        $data=DB::table('berita')->latest()->get();
        $request->validate([
            'judul_artikel' => 'required|string',
            'gambar_artikel' => 'required|file|mimes:jpg,jpeg,png,gif',
            'deskripsi' => 'required|string'
        ]);

        $tujuan_upload = "storage/berita";
        $file = $request->file('gambar_artikel');
        $file_name = time()."_".$file->getClientOriginalName();
        $request ->file('gambar_artikel')->store($tujuan_upload.$file_name);
////        $img = Image::make($file->getRealPath());

        Berita::create([
            'judul' => $request->judul_artikel,
            'gambar' => $file_name,
            'deskripsi' => $request->deskripsi,
        ]);

        return view('admin.listberita', compact('data'));
    }
}
