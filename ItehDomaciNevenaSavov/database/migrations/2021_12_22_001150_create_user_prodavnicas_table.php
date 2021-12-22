<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProdavnicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_prodavnicas', function (Blueprint $table) {
            $table->bigInteger('prodavnica_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();
            $table->foreign('prodavnica_id')->references('id')->on('prodavnicas')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_prodavnicas');
    }
}
