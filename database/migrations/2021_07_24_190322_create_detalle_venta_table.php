<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_venta', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('venta_id');
            $table->String('producto_id');
            $table->integer('cantidad');
            $table->float('precio_unitario');
            $table->float('subtotal_USD');
            $table->float('tipo_cambio');
            $table->float('subtotal_BO');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('venta_id')->on('venta')->references('id')->onDelete('cascade');
            $table->foreign('producto_id')->on('producto')->references('codigo')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_venta');
    }
}
