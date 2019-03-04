<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        
        
        
         Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('descricao')->nullable();
        });
       
           Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('nome');
            $table->string('descricao')->nullable();
            $table->float('preco_compra');
            $table->float('preco_venda');
            $table->integer('estoque');
            
            $table->integer('categorias_id')->unsigned()->nullable();
            $table->foreign('categorias_id')
                  ->references('id')
                  ->on('categorias')
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
       
        Schema::dropIfExists('produtos');
        Schema::dropIfExists('categorias');
        
    }
}
