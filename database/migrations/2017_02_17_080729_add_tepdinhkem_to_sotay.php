<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTepdinhkemToSotay extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sotay', function (Blueprint $table) {
            $table->string('tepdinhkem')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sotay', function (Blueprint $table) {
            //
            $table->dropColumn('tepdinhkem');
        });
    }
}
