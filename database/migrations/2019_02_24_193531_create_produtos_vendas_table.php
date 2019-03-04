<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos_vendas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
           
            $table->integer('vendas_id')->unsigned();
            $table->integer('produtos_id')->unsigned();
             $table->integer('quantidade');
             $table->float('preco_compra');
             $table->float('preco_venda');
             $table->float('desconto')->nullable();
            
            $table->foreign('vendas_id')
                  ->references('id')
                  ->on('vendas')
                  ->onDelete('cascade');
            
            $table->foreign('produtos_id')
                  ->references('id')
                  ->on('produtos')
                  ->onDelete('cascade');
                  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos_vendas');
    }
}
