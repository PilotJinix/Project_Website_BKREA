<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ListAjuan extends Controller{

    public function index(){
        $data=DB::table('ajuan_pemohon')->latest()->get();
        return view('admin.listajuan', compact('data'));
    }
}
