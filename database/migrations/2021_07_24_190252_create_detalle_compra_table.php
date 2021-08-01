<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_compra', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('compra_id');
            $table->unsignedBigInteger('producto_id');
            $table->integer('cantidad');
            $table->float('precio_unitario');
            $table->float('subtotal$');
            $table->float('tipo_cambio');
            $table->float('subtotalBs');

            $table->timestamps();
            $table->softDeletes();
            $table->foreign('compra_id')->on('compra')->references('id')->onDelete('cascade');
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
        Schema::dropIfExists('detalle_compra');
    }
}
