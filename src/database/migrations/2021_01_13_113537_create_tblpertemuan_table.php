<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblpertemuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblpertemuan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("kelas_id");
            $table->foreign("kelas_id")->references("id")->on("tblkelas");
            $table->date("tanggal");
            $table->string("pertemuan");
            $table->string("materi");
            $table->string("kode",8);
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
        Schema::dropIfExists('tblpertemuan');
    }
}
