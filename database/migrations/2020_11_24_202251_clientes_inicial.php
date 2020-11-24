<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClientesInicial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('clientesInicial', function (Blueprint $table) {
            $table->id();
            $table->longText('logo');
            $table->string('ext_logo');
            $table->string('name_file_logo');
            $table->string('nome');
            $table->string('endereco');
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
