<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCadernosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadernos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pago');
            $table->integer('clientes_id')->unsigned();
            $table->integer('vendas_id')->unsigned();
            
            $table->foreign('clientes_id')
                  ->references('id')
                  ->on('clientes')
                  ->onDelete('cascade');
                  
            $table->foreign('vendas_id')
                  ->references('id')
                  ->on('vendas')
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
        Schema::dropIfExists('cadernos');
    }
}
