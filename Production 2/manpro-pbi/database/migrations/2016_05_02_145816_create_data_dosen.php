<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataDosen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('data_dosen',function(Blueprint $table)
      {
        $table->increments('id');
        $table->string('nama');
        $table->string('jabatan');
        $table->text('profile');
        $table->string('foto');
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
        Schema::drop('data_dosen');
    }
}
