<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome',300);
            $table->string('cpf',11);
            $table->string('endereco',300);
            $table->string('numero',10);
            $table->string('bairro',300);
            $table->string('cidade',300);
            $table->string('cep',8);
            $table->string('email',400)->nullable();
            $table->string('telefone',20);
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
        Schema::dropIfExists('clientes');
    }
}
