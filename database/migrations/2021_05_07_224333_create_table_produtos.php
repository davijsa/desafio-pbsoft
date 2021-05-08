<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProdutos extends Migration
{
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('quantidade');
            $table->string('descricao');
            $table->string('preco');
            $table->string('categoria');
        });
    }

    public function down()
    {
        Schema::drop('produtos');
    }
}
