<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            $table->integer('tipo')->describe('1 - A vista , 2 - A prazo');
            $table->foreignId('funcionario_id');
            $table->foreignId('cliente_id');
            $table->foreignId('metodo_de_pagamento_id');
            $table->double('desconto')->nullable();
            $table->double('valor');
            $table->integer('quantidade_de_parcelas')->nullable();
            $table->foreign('funcionario_id')->references('id')->on('funcionarios');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('metodo_de_pagamento_id')->references('id')->on('metodos_de_pagamentos');
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
        Schema::dropIfExists('vendas');
    }
}
