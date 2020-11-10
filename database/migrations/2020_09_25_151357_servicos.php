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
            $table->string('id_cliente');
            $table->string('status');
            $table->string('valor');
            $table->string('descricao');
            $table->string('ano');
            $table->string('marca');
            $table->string('modelo');
            $table->string('placa');

            $table->string('date_dia');
            $table->string('date_mes');
            $table->string('date_ano');
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
