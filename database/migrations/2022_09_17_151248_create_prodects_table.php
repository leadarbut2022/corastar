<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodects', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('id_tager');
            $table->string('name_prod');
            $table->string('discription');
            $table->string('img');
            $table->integer('type_');
            $table->integer('prise');
            $table->integer('discount');
            $table->integer('avelb');
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
        Schema::dropIfExists('prodects');
    }
}
