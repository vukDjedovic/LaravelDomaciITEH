<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DodajBrojPutnika extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('putovanjes', function (Blueprint $table) {
            $table->after('gradDolazak', function ($table) {
                $table->integer('brojPutnika');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('putovanjes', function (Blueprint $table) {
            $table->dropColumn('brojPutnika');
        });
    }
}
