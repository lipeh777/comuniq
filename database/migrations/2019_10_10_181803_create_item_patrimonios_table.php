<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemPatrimoniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_patrimonios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('numero_tombamento');
            $table->unsignedBigInteger('fk_instituicoes_id')->nullable();
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
        Schema::dropIfExists('item_patrimonios');
    }
}
