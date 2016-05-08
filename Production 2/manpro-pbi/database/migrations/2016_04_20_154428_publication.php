<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Publication extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('publications',function(Blueprint $table)
      {
        $table->increments('id');
        $table -> integer('creator_id') -> unsigned() -> default(0);
        $table->foreign('creator_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
        $table->string('title')->unique();
        $table->string('abstract');
        $table->string('Filename')->unique();
        $table->string('slug')->unique();
        $table->string('imgMime');
        $table->timestamp('date');
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
        Schema::drop('Publication');
    }
}
