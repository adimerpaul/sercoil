<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCortesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cortes', function (Blueprint $table) {
            $table->increments('id');
            $table->double('ID_CLI');
            $table->double('ID_USU');
            $table->date('FEC_COR');
            $table->time('HOR_COR');
            $table->double('MON_COR');
            $table->double('CANTIDAD1_COR');
            $table->double('LONGITUD1_COR');
            $table->double('ANCHO1_COR');
            $table->double('CANTIDAD2_COR');
            $table->double('LONGITUD2_COR');
            $table->double('ANCHO2_COR');
            $table->double('CANTIDAD3_COR');
            $table->double('LONGITUD3_COR');
            $table->double('ANCHO3_COR');
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
        Schema::dropIfExists('cortes');
    }
}
