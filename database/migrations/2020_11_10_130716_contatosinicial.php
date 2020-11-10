<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contatosinicial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contatosinicial', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('sobrenome');
            $table->string('email');
            $table->string('telefone');
            $table->string('assunto');
            $table->string('mensagem');
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
        //
    }
}
