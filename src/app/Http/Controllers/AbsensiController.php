<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    //
    public function tampil_form_absensi($id){
        return view("absensi.form",[
            "pertemuan"=> \App\Models\Pertemuan::find($id)
        ]);
    }
    public function tampil_daftar_absensi(Request $request){
        return view("kelas.list",[
            "kelas" => \App\Models\Kelas::find($request->kelasid),
            "absensi"=> \App\Models\Absensi::where("pertemuan_id",$request->pertemuan)->get(),
            "pertemuan" =>$request->pertemuan
        ]);
    }
}
