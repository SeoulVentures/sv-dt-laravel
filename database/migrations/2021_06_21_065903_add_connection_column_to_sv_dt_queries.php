<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddConnectionColumnToSvDtQueries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sv_dt_queries', function (Blueprint $table) {
            $table->string('connection')->default('mysql');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sv_dt_queries', function (Blueprint $table) {
            $table->dropColumn('connection');
        });
    }
}
