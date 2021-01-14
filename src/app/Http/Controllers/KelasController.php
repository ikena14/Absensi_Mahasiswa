<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    //
    public function tampilform(){
        return view("kelas.form");
    }
    public function tampillist($id){
           return view("kelas.list",[
               "kelas" => \App\Models\Kelas::find($id),
               "pertemuan"=> 1,
               "absensi" => []
           ]);
    }
    public function hapuskelas($id){
        \App\Models\Kelas::destroy($id);
        return redirect()->back()->with("info","Berhasil Hapus Kelas");
    }
    public function buatkelas(Request $request){
        $request->validate([
            "nama"=> "required|max:100",
            "matakuliah" => "required|max:100",
            "noruang" => "required|max:3"
        ]);
        \App\Models\Kelas::create([
            "nama" => $request->nama,
            "matakuliah" =>$request->matakuliah,
            "noruang"=> $request -> noruang,
            "kode" => \Str::random(8),//generate huruf 8 karakter secara acak
            "dosen_id" => \Auth()->id()//mengambil id user
        ]);
        return redirect()->route("home")->with("info","Berhasil Buat Kelas");
    }
    public function hapusmahasiswa($kelasid,$mahasiswaid){
        \App\Models\Kelas::find($kelasid)
        ->mahasiswa()
        ->detach($mahasiswaid);
        return redirect()->back()->with("info","Berhasil Hapus Mahasiswa");
    }
    public function joinmahasiswa($kode){
        \App\Models\Kelas::where("kode",$kode)
        ->first()
        ->mahasiswa()
        ->attach(\Auth::user()->id);

        return redirect()->route("home")->with("info","Berhasil Masuk Kelas");
    }
}
