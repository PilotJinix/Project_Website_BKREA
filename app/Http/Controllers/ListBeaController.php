<?php
namespace App\Http\Controllers;
use App\Ajuan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ListBeaController extends Controller
{
    public function index(Request $request){
        $user = $request->session()->get('username');
        $data=DB::table('beasiswa')->latest()->get();
        if ($user != null) {
            $akun = DB::table('users')->where('username',$user)->first();

            return view('listbea', compact('akun','data'));
        }
        return view('listbea',compact('data'));
    }

    public function detailbea(Request $request, $id){
        $user = $request->session()->get('username');
        $data = DB::table('beasiswa')->where('id', $id)->first();
        if ($user != null) {
            $akun = DB::table('users')->where('username',$user)->first();

            return view('detailbea', compact('akun','data'));
        }
        return view('detailbea', compact('data'));
    }

    public function lanjutisi(Request $request, $id){
        $user = $request->session()->get('username');
        $data = DB::table('beasiswa')->where('id', $id)->first();
        if ($user != null) {
            $akun = DB::table('users')->where('username',$user)->first();

            return view('applybea', compact('akun','data'));
        }
        return redirect()->route('login');
        return view('auth.login');
    }

    public function createfrom(Request $request, $id){
        $data=DB::table('ajuan_pemohon')->latest()->get();
        $session = $request->session()->get('username');
        $akun = DB::table('users')->where('username',$session)->first();
        $user_id = $akun->id;
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

        Ajuan::create([
            'nama_pemohon' => $request->nama_pemohon,
            'email_pemohon' => $request->email,
            'no_hp_pemohon' => $request->no_hp,
            'data_pemohon' => $file_name,
            'feedback' => 'Dalam Proses',
            'user_id' =>$user_id,
            'beasiswa_id' => $id
        ]);

        return redirect()->route('listbea')->with(compact('data'));
    }
}






