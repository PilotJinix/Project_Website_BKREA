<?php
namespace App\Http\Controllers;
use DB;

class ListBeaController extends Controller
{
    public function index(){
        return view('listbea');
    }

    public function detailbea(){
        return view('detailbea');
    }
}
