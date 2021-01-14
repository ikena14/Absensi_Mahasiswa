<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table ="tblkelas";
    protected $fillable = [
        "nama","matakuliah","noruang","kode","dosen_id"
    ];
    public function pertemuan()
    {
        return $this-> hasMany('App\Models\Pertemuan','kelas_id','id');
    }
    public function dosen()
    {
        return $this->belongsTo('App\Models\User', 'dosen_id', 'id');
    }
    public function mahasiswa()
    {
        return $this->belongsToMany('App\Models\User','tblmahasiswakelas','kelas_id', 'mahasiswa_id');
    }
}
