<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class projectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function beranda(){
        $isi = DB::table('buku')->limit(5)->get();

        return view('beranda',['isi'=>$isi]);
    }

    public function perpustakaan(){
        $isi = DB::table('buku')->get();

        return view('perpustakaan',['isi'=>$isi]);
    }

    public function input(Request $request){
        $judul = $request->input('judul');
        $user = auth()->user();
        $pengarang= ($user->name);
        $deskripsi = $request->input('deskripsi');
        $data=array('judul'=>$judul,'pengarang'=>$pengarang,"deskripsi"=>$deskripsi);
        DB::table('buku')->insert($data);
        return redirect('/project/perpustakaan');
    }

    public function tulisCerpen(){
        return view('tulisCerpen');
    }

    public function search(Request $request){
        $search = $request->get('search');
        $isi = DB::table('buku')->where('judul', 'like', '%' .$search. '%');
        $isi = $isi->get();
        return view('perpustakaan',['isi'=>$isi]);
    }

    public function tentangMinistry(){
        return view('tentangMinistry');
    }
}