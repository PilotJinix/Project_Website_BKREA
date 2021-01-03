<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ListBeritaController extends Controller{

    public function index(){
        $data=DB::table('berita')->latest()->get();
        return view('admin.listberita', compact('data'));
    }

    public function news(){
//        $data=DB::table('berita')->latest()->get();
        return view('admin.addberita');
    }
}
