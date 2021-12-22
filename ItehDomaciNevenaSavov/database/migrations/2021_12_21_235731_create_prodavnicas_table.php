<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdavnicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('prodavnicas');
        Schema::create('prodavnicas', function (Blueprint $table) {
            $table->id();
            $table->string('Naziv')->unique();
            $table->unsignedInteger('ocena');
            $table->unsignedInteger('starost');
            $table->string('Grad')->unique();
            $table->timestamps();
            $table->unsignedBigInteger('proizvodjac_id');
            $table->foreign('proizvodjac_id')->references('id')->on('proizvodjacs')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prodavnicas', function (Blueprint $table) {
            $table->dropForeign('proizvodjac_id');
        });
        Schema::dropIfExists('prodavnicas');
    }
}
