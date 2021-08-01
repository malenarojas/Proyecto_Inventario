<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->String('forma_de_pago',15);
            $table->unsignedBigInteger('personal_id');
            $table->unsignedBigInteger('cliente_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('personal_id')->on('personal')->references('idpersonal')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('cliente_id')->on('cliente')->references('id_cliente')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venta');
    }
}
