<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Mail\UndangMahasiswaMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PesertaController extends Controller
{
    //
    public function tampil_form_email($kode){
        return view("user.email",compact("kode"));
    }
    public function tampil_peserta_detail($id){
        return view("user.detail",[
            "mahasiswa"=> \App\Models\User::find($id)
        ]);
    }
    public function undangmahasiswa(Request $request){
        Mail::to($request->email)->send(new UndangMahasiswaMail($request->kode));
        return redirect()->back();
    }
}
