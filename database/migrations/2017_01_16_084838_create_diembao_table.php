<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiembaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('diembao', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('loaitin_id')->unsigned();
             $table->string('title');
             $table->string('media')->nullable();
             $table->text('description');
             $table->string('link');
             $table->datetime('pubDate');
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
         Schema::dropIfExists('diembao');
     }
}
