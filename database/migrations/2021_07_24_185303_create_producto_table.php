<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->id('codigo');
            $table->string('nombre',100);
            $table->string('descripcion tecnica',300);
            $table->string('medida',100);
            $table->integer('stock_minimo');
            $table->integer('cantidad');
            $table->string('estado',20);
            $table->float('precio_compra_$',1000,2);
            $table->float('tipo_cambio',20,2);
            $table->float('precio_compra_Bs',10000,2);
            $table->float('importe_ganacia',10);
            $table->float('precio_venta_$',1000,2);
            $table->float('precio_venta_Bs',10000,2);
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('marca_id');
            $table->unsignedBigInteger('nacionalidad_id');
           // $table->unsignedBigInteger('num_estante');
           // $table->unsignedBigInteger('num_area');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('categoria_id')->on('categoria')->references('id_categoria')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nacionalidad_id')->on('nacionalidad')->references('id_nacionalidad')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('marca_id')->on('marca')->references('id_marca')->onDelete('cascade')->onUpdate('cascade');
           // $table->foreign('num_estante')->on('area')->references('num_estante')->onDelete('cascade')->onUpdate('cascade');
           // $table->foreign('num_area')->on('area')->references('num_area')->onDelete('cascade')->onUpdate('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}
