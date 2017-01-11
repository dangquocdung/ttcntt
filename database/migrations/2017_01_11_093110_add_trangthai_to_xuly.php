<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTrangthaiToXuly extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         //
         Schema::table('xuly', function (Blueprint $table) {
             $table->integer('trangthai_id')->unsigned();
             $table->foreign('trangthai_id')->references('id')->on('trangthai');
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
         Schema::table('xuly', function (Blueprint $table) {
             $table->dropColumn('trangthai');
         });
     }
}
