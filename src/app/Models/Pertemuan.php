<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertemuan extends Model
{
    use HasFactory;
     protected $table = "tblpertemuan";
     protected $fillable = [
        'kelas_id','tanggal','pertemuan','materi','kode'
     ];
     public function absensi()
     {
         return $this->hasMany('App\Models\Absensi', 'pertemuan_id', 'id');
     }
}
