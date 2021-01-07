<?php
namespace App\Http\Controllers;

use App\Beasiswa;
use App\Komentar;
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

    public function review(Request $request, $id){
        $user = $request->session()->get('username');
        $akun = DB::table('users')->where('username',$user)->first();
        $user_id = $akun->id;
        $data = DB::table('ajuan_pemohon')->where('id',$id)->first();
        $bea_id = $data->beasiswa_id;
//        return dd($bea_id);

        $request->validate([
            'review' => 'required|string|max:255',
        ]);

        Komentar::create([
            'komentar' => $request->review,
            'user_id' => $user_id,
            'beasiswa_id' => $bea_id,
        ]);

        DB::table('ajuan_pemohon')->where('id', $id)->update([
            'review' => 'sudah'
        ]);

        return redirect()->route('riwayat');
    }

}
