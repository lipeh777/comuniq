<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChamadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descricao', 255)->nullable();//nullable indica que o campo é opcional.
            $table->unsignedBigInteger('fk_observadores_id');
            $table->unsignedBigInteger('fk_statuses_id');
            $table->timestamps();
            $table->foreign('fk_observadores_id')->references('id')->on('observadores');
            $table->foreign('fk_statuses_id')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chamados');
    }
}
