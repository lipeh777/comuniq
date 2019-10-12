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
            $table->timestamps();
            $table->integer('fk_usuario_id');
            $table->foreign('fk_usuario_id')->references('id')->on('usuarios')->unsigned();
            $table->integer('fk_itens_de_patrimonio_id');
            $table->foreign('fk_itens_de_patrimonio_id')->references('id')->on('itenspatrimonio')->unsigned();
            // $table->integer('chamado_pai');
            // $table->foreign('chamado_pai')->references('chamado_pai')->on('chamados');
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
