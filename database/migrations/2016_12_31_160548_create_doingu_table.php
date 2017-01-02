<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoinguTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doingu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hoten');
            $table->string('tenkhongdau');
            $table->string('chucvu');
            $table->string('didong');
            $table->string('codinh');
            $table->string('email')->unique();
            $table->string('hinh');
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
        Schema::dropIfExists('doingu');
    }
}
