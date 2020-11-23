<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContatosInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contatos_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('texto_whatsapp');
            $table->string('numero_whatsapp');
            $table->string('telefone');
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
