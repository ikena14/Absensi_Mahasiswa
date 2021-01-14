<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblkelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblkelas', function (Blueprint $table) {
            $table->id();
            $table->string("nama",100);
            $table->string("matakuliah",100);
            $table->string("noruang",3);
            $table->string("kode",8);
            $table->unsignedBigInteger("dosen_id");
            $table->foreign("dosen_id")->references("id")->on("users");
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
        Schema::dropIfExists('tblkelas');
    }
}
