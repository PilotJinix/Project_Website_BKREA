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
//            return var_dump($pengguna);
            return view('listriwayat', compact('akun', 'riwayat'));
        }
        return view('listriwayat');
    }

}
