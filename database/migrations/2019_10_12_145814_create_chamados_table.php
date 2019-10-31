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
            $table->unsignedBigInteger('fk_users_id')->nullable();
            $table->unsignedBigInteger('fk_item_id')->nullable();
            $table->timestamps();
            $table->foreign('fk_users_id')->references('id')->on('users');
            $table->foreign('fk_item_id')->references('id')->on('items');
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
