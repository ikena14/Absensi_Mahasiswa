<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblabsensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblabsensi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("pertemuan_id");
            $table->foreign("pertemuan_id")->references("id")->on("tblpertemuan");
            $table->unsignedBigInteger("mahasiswa_id");
            $table->foreign("mahasiswa_id")->references("id")->on("users");
            $table->enum("status",["absen","hadir","izin","sakit"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblabsensi');
    }
}
