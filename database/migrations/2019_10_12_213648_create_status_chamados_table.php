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
            $table->text('comentario', 500)->nullable();

            $table->unsignedBigInteger('fk_statuses_id');
            $table->foreign('fk_statuses_id')->references('id')->on('statuses');

            $table->unsignedBigInteger('fk_chamados_id');
            $table->foreign('fk_chamados_id')->references('id')->on('chamados');
            
            $table->unsignedBigInteger('fk_users_id');
            $table->foreign('fk_users_id')->references('id')->on('users');
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
