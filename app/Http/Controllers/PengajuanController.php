<?php
namespace App\Http\Controllers;

use App\Beasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PengajuanController extends Controller
{
    public function create(Request $request){
        $data=DB::table('ajuan_pemohon')->latest()->get();
        $request->validate([
            'nama_pemohon' => 'required|string',
            'data' => 'required|file|mimes:zip|max:10000',
            "email" => 'required|string',
            "no_hp" => 'required|string',
        ]);

        $tujuan_upload = "public/data/";
        $file = $request->file('data');
        $file_name = time()."_".$file->getClientOriginalName();
        $request ->file('data')->storeAs($tujuan_upload,$file_name);

        Beasiswa::create([
            'nama_pemohon' => $request->nama_pemohon,
            'email_pemohon' => $request->email,
            'no_hp_pemohon' => $request->no_hp,
            'data_pemohon' => $file_name,
        ]);

        return redirect()->route('listbea')->with(compact('data'));
    }

}
