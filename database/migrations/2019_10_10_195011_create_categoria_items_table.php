<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriaItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('fk_setor_id');
            $table->timestamps();
            $table->foreign('fk_setor_id')->references('id')->on('setors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria_items');
    }
}
