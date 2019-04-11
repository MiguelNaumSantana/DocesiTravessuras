<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tipo_clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->text('descricao')->nullable();
          
        });
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->char('sexo');
            $table->string('email')->nullable();
            $table->date('dt_nascimento');
            $table->string('telefone');
            $table->boolean('fumante');
            $table->boolean('ra')->nullable();
            $table->timestamps();
            $table->integer('tipo_clientes_id')->unsigned();
            
            $table->foreign('tipo_clientes_id')
                  ->references('id')
                  ->on('tipo_clientes')
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
        
        Schema::dropIfExists('clientes');
        Schema::dropIfExists('tipo_clientes');
    }
}
