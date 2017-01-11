<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaoviecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('taoviec', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nguoitao')->unsigned();
            $table->foreign('nguoitao')->references('id')->on('users');
            $table->dateTime('thoigiantao');
            $table->integer('thuchien')->unsigned();
            $table->string('tencongviec');
            $table->string('tepdinhkem')->nullable();
            $table->text('yeucaucongviec');
            $table->boolean('viecgap');
            $table->date('hanxuly');
            $table->integer('tiendo');
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
        //
        Schema::dropIfExists('taoviec');
    }
}
