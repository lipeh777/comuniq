<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChamadoTiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamado_tipos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipo', 100)->nullable();
            $table->unsignedBigInteger('fk_subtipo_id')->nullable();
            $table->timestamps();
            $table->foreign('fk_subtipo_id')->references('id')->on('subtipos_chamados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chamado_tipos');
    }
}
