<?php
namespace App\Http\Controllers;
use DB;

class BeritaController extends Controller
{
    public function index(){
        return view('berita');
    }

    public function detailberita(){
        return view('detailberita');
    }
}