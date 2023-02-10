<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardShoppingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_shoppings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pro');
            $table->integer('id_tager');
            $table->string('name_prod');
            $table->string('discription');
            $table->string('img');
            $table->integer('type_');
            $table->integer('prise');
            $table->integer('size');
            $table->integer('avelb');
            $table->integer('id_clint');
            $table->integer('stat');
            $table->integer('stat_tag');
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
        Schema::dropIfExists('card_shoppings');
    }
}
