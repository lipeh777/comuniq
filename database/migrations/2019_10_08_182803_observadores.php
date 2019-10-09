<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Observadores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('observadores', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->foreign('usuario_id')->references('id')->on('observadores');
            $table->foreign('chamados_id')->references('id')->on('observadores');
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

       Schema::dropIfExists('observadores');
    }
}
