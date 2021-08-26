<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUbicacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubicacion', function (Blueprint $table) {
            $table->id();
            $table->String('descripcion',100);
            $table->unsignedBigInteger('area_id');
            $table->unsignedBigInteger('estante_id');
            $table->String('producto_codigo');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('area_id')->on('area')->references('id')->onDelete('cascade');
            $table->foreign('estante_id')->on('estante')->references('id')->onDelete('cascade');
            $table->foreign('producto_codigo')->on('producto')->references('codigo')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ubicacion');
    }
}
