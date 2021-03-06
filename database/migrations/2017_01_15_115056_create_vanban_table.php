<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVanbanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         //
         Schema::create('vanban', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('user_id')->unsigned();
             $table->foreign('user_id')->references('id')->on('users');
             $table->date('ngaybanhanhvb');
             $table->datetime('ngaynhanvb')->nullable();
             $table->integer('loaivb_id');
             $table->string('sovb');
             $table->string('trichyeuvb');
             $table->string('tepvanban');
             $table->integer('nguoikivb_id');
             $table->integer('dokhanvb');
             $table->integer('trangthaivb_id');
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
         Schema::dropIfExists('vanban');
     }
}
