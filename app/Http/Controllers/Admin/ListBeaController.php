<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ListBeaController extends Controller{

    public function index(){
        $data=DB::table('users')->latest()->get();
        return view('admin.listbeaadmin', compact('data'));
    }
}
