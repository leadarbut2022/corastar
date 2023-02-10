<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNEWSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('n_e_w_s', function (Blueprint $table) {
           
            $table->increments('id');
            $table->integer('id_Poster');
            $table->string('name_poster');
            $table->string('addres_post');
            $table->string('discription');
            $table->string('img');
            $table->string('vedo');
            $table->string('day');
            $table->integer('type_');
           
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
        Schema::dropIfExists('n_e_w_s');
    }
}
