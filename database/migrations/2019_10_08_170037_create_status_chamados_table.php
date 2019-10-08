<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusChamadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_chamados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('status_idstatus');
            $table->integer('chamado_idchamado');
            $table->integer('usuario_idusuario');
            $table->string('comentario', 105);
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
        Schema::dropIfExists('status_chamados');
    }
}
