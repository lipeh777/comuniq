<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItenPatrimoniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iten_patrimonios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('numero_tombamento');
            $table->unsignedBigInteger('fk_instituicoes_id');
            $table->foreign('fk_instituicoes_id')->references('id')->on('instituicoes');
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
        Schema::dropIfExists('iten_patrimonios');
    }
}
