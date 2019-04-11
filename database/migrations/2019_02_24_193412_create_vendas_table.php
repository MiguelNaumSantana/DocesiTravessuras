<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendasTable  extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_vendas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->text('descricao')->nullable();
          
        });
        Schema::create('vendas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('data_hora_venda');
            $table->integer('clientes_id')->unsigned()->nullable();
            $table->integer('tipo_vendas_id')->unsigned();
            
            
            $table->foreign('clientes_id')
                  ->references('id')
                  ->on('clientes')
                  ->onDelete('cascade');
                  
            $table->foreign('tipo_vendas_id')
                  ->references('id')
                  ->on('tipo_vendas')
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
        Schema::dropIfExists('vendas');
        Schema::dropIfExists('tipo_vendas');
        
    }
}
