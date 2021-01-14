<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblmahasiswakelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblmahasiswakelas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("kelas_id");
            $table->foreign("kelas_id")->references("id")->on("tblkelas");
            $table->unsignedBigInteger("mahasiswa_id");
            $table->foreign("mahasiswa_id")->references("id")->on("users");
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
        Schema::dropIfExists('tblmahasiswakelas');
    }
}
