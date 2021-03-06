<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonviTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         //
         Schema::create('donvi', function (Blueprint $table) {
             $table->increments('id');
             $table->string('tendonvi');
             $table->integer('capquanly');
             $table->integer('donvicha')->nullable();
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
         Schema::dropIfExists('donvi');
     }
}
