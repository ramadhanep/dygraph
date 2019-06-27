<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_fotografer')->unsigned();
            $table->bigInteger('id_category')->unsigned();
            $table->string('foto');
            $table->text('deskripsi_foto');
            $table->string('time');
            $table->foreign('id_fotografer')->references('id')->on('fotografers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_category')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('fotos');
    }
}
