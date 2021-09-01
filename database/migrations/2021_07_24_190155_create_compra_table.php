<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra', function (Blueprint $table) {
            $table->id();
            $table->float('total_USD');
            $table->float('tipo_cambio');
            $table->float('total_BO');
            $table->date('fecha');
            $table->unsignedBigInteger('personal_id');
            $table->unsignedBigInteger('proveedor_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('personal_id')->on('personal')->references('id')->onDelete('cascade');
            $table->foreign('proveedor_id')->on('proveedor')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compra');
    }
}
