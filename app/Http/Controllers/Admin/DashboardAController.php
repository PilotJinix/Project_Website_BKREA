<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardAController extends Controller
{
    public function index(){
        $data= DB::table('users')->latest()->get();
        return view('admin.dashboard', compact('data'));
    }

}
