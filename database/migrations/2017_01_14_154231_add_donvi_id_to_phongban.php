<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDonviIdToPhongban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('phongban', function (Blueprint $table) {
            //
            $table->integer('donvi_id')->unsigned()->nullable();
            $table->foreign('donvi_id')->references('id')->on('donvi');
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
        Schema::table('phongban', function (Blueprint $table) {
            $table->dropColumn('donvi_id');
        });
    }
}
