<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class servicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('email');
            $table->string('cpf');
            $table->string('telefone');
            $table->string('endereco');
            $table->string('cidade');
            $table->string('bairro');
            $table->string('status');
            $table->string('valor');
            $table->string('relatorio');

            $table->string('ano');
            $table->string('marca');
            $table->string('modelo');
            $table->string('placa');
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
