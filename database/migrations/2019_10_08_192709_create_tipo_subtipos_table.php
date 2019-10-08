<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoSubtiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_subtipos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->foreign('id_tipo')->references('id')->on('tipo_subtipos');
            $table->integer('id_chamado');
            $table->string('nomes', 144);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_subtipos');
    }
}
