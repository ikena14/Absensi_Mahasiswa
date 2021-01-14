<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PertemuanController extends Controller
{
    //
    public function tampilform($kelasid){

        return view("pertemuan.form",["kelasid" => $kelasid]);
    }
    public function hapuspertemuan($id){
        \App\Models\Pertemuan::destroy($id);
        return redirect()->back()->with("info","Berhasil Hapus Pertemuan");
    }
    public function buatpertemuan(Request $request){

        \App\Models\Pertemuan::create([
            "kelas_id" => $request -> kelas_id,
            "tanggal" => $request -> tanggal,
            "pertemuan" => $request -> pertemuan,
            "materi" => $request -> materi,
            "kode" => \Str::random(8)
        ]);
        return redirect()->route("kelas.list",["id"=>$request->kelas_id])->with("info","Berhasil Buat Pertemuan");
    }
    public function absensimahasiswa($kode){
        \App\Models\Pertemuan::where("kode",$kode)
            ->first()
            ->absensi()
            ->create([
                "mahasiswa_id" => \Auth::user()->id,
                "status" => "hadir"
            ]);
            return redirect()->route("home")->with("info","Berhasil Absensi");
    }
}
