<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area', function (Blueprint $table) {
            $table->id('num_area');
            $table->string('descripcion',100);
            $table->timestamps();
           // $table->primary(array('num_area', 'num_estante'));

           // $table->foreign('num_estante')->on('estante')->references('num_estante')->onDelete('cascade')->onUpdate('cascade');

        });
      //  \Illuminate\Support\Facades\DB::unprepared('ALTER TABLE area DROP PRIMARY KEY ,ADD PRIMARY KEY (num_area,num_estante)');
       // \Illuminate\Support\Facades\DB::unprepared('ALTER TABLE "area" DROP PRIMARY KEY, ADD PRIMARY KEY (  "num_area" ,  "num_estante")');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('area');
    }
}
