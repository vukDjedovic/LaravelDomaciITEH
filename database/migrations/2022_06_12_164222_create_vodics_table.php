<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVodicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vodics', function (Blueprint $table) {
            $table->id();
            $table->string('imePrezime');
            $table->string('email');
            $table->string('brojTelefona');
            $table->bigInteger('agencija_id')->unsigned()->index();
            $table->foreign('agencija_id')->references('id')->on('agencijas')->onDelete('cascade');
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
        Schema::dropIfExists('vodics');
    }
}
