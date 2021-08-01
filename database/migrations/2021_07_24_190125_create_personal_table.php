<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->id('idpersonal');
            $table->String('nombre',20);
            $table->String('apellido',20);
            $table->String('CI', 15);
            $table->String('telefono',15);
            $table->char('sexo',1);
            $table->unsignedBigInteger('tipopersonal_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('tipopersonal_id')->on('tipopersonal')->references('id')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal');
    }
}
