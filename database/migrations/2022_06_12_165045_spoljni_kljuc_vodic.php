<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SpoljniKljucVodic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('putovanjes', function (Blueprint $table) {
            $table->after('brojPutnika', function ($table) {
                $table->bigInteger('vodic_id')->unsigned()->index();
                $table->foreign('vodic_id')->references('id')->on('vodics')->onDelete('cascade');
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
            $table->dropColumn('vodic_id');
        });
    }
}
