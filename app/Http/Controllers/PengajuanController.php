<?php
namespace App\Http\Controllers;

use App\Beasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PengajuanController extends Controller
{
    public function index(Request $request){
        $user = $request->session()->get('username');
        if ($user != null) {
            $akun = DB::table('users')->where('username',$user)->first();
            $pengguna =$akun->id;

            $riwayat = DB::table('ajuan_pemohon')
                ->join('beasiswa','ajuan_pemohon.beasiswa_id', '=', 'beasiswa.id')
                ->where('ajuan_pemohon.user_id', '=', $pengguna)->select('ajuan_pemohon.*','beasiswa.nama_beasiswa', 'beasiswa.gambar', 'beasiswa.deskripsi')->latest()
                ->get();
            return view('listriwayat', compact('akun', 'riwayat'));
        }
        return view('listriwayat');
    }

    public function detail(Request $request, $id){
        $user = $request->session()->get('username');
        $akun = DB::table('users')->where('username',$user)->first();
        $pengguna =$akun->id;

        $riwayat = DB::table('ajuan_pemohon')
            ->join('beasiswa','ajuan_pemohon.beasiswa_id', '=', 'beasiswa.id')
            ->where('ajuan_pemohon.user_id', '=', $pengguna)->select('ajuan_pemohon.*','beasiswa.nama_beasiswa', 'beasiswa.gambar', 'beasiswa.deskripsi')->latest()
            ->get();


        $data = DB::table('beasiswa')
            ->join('ajuan_pemohon', 'ajuan_pemohon.beasiswa_id','=','beasiswa.id')
            ->where('ajuan_pemohon.id','=',$id)
            ->get();

        return view('riwayat', compact('akun','riwayat', 'data'));
    }

}
