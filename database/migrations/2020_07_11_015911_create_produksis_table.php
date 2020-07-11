<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produksis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('produksi');
            $table->timestamps();
        });

        Schema::table('produksis', function (Blueprint $table) {
            $table->unsignedBigInteger('komoditas_id');

            $table->foreign('komoditas_id')->references('id')->on('komoditas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produksis');
    }
}
