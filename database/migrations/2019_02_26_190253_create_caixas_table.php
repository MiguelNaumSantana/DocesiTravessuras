<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaixasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tipo_fluxos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('descricao');
            $table->timestamps();
        });
        
        
        
        Schema::create('caixas', function (Blueprint $table) {
            $table->increments('id');
            $table->float('valor');
            $table->text('descricao');
            $table->integer('tipo_fluxos_id')->unsigned();
            
            $table->foreign('tipo_fluxos_id')
                  ->references('id')
                  ->on('tipo_fluxos')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('caixas');
        Schema::dropIfExists('tipo_fluxos');
    }
}
