<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;
    protected $table ="tblabsensi";
    protected $fillable =[
        'pertemuan_id','mahasiswa_id','status'
    ];
    public function mahasiswa()
    {
        return $this->belongsTo('App\Models\User', 'mahasiswa_id', 'id');
    }
}
