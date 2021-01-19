<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home',[
            "kelas" =>\App\Models\Kelas::where("dosen_id",\Auth::user()->id)->get(),
            "mahasiswakelas" => \App\Models\User::find(\Auth::user()->id)->mahasiswakelas()->get()
        ]);
    }
}
