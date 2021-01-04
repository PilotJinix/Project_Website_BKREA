<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Http\Controllers\Controller;
use Faker\Provider\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ListBeritaController extends Controller{

    public $berita ="storage/berita";
    public $beasiswa ="storage/beasiswa";

    public function index(){
        $data=DB::table('berita')->latest()->get();
        return view('admin.listberita', compact('data'));
    }

    public function news(){
//        $data=DB::table('berita')->latest()->get();
        return view('admin.addberita');
    }

    public function newSaved(Request $request){
        $request->validate([
            'judul_artikel' => 'required|string',
            'gambar_artikel' => 'required|file|image|mimes:jpg,jpeg,png,gif',
            'deskripsi' => 'required|string'
        ]);

        $file = $request->file('gambar_artikel');

        $file_name = time()."_".$file->getClientOriginalName();
        $tujuan_upload = "storage/berita";

        $img = Image::make($file->getRealPath());

        Blog::create([
            'judul' => $request->judul,
            'gambar' => $file_name,
            'deskripsi' => $request->deskripsi,
        ]);

        /** Change resoluution image and save to path **/
//        $request ->file('gambar_artikel')->store($this->berita);
//        $img->resize(600,400)->save($tujuan_upload.$file_name);
        $img->resize(600,400)->save($tujuan_upload.$file_name);

        return redirect()->route('admin.tesadminberita')->with('saved','Artikel baru berhasil ditambahkan!');

    }
}
