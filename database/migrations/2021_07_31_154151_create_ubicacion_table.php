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
            $table->id('id_ubicacion');
            $table->String('descripcion',100);
            $table->unsignedBigInteger('area_num');
            $table->unsignedBigInteger('estante_num');
            $table->unsignedBigInteger('producto_codigo');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('area_num')->on('area')->references('num_area')->onDelete('cascade');
            $table->foreign('estante_num')->on('estante')->references('num_estante')->onDelete('cascade');
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
