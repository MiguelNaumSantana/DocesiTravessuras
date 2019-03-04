<?php

use Illuminate\Database\Seeder;

class Produtos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            'id' => 1,
            'nome' => 'Tabaco Bolado',
            'descricao' => 'Tabaquim apertado na seda',
            'preco_compra'=>0.5,
            'preco_venda' =>1 ,
            'estoque'=>20,
            'categorias_id'=>1
        ]);   
        DB::table('produtos')->insert([
            'id' => 2,
            'nome' => 'Sanduiche Natural',
            'descricao' => 'Sanduiche de quiejo,alface,tomate',
            'preco_compra'=>0.5,
            'preco_venda' =>2.5 ,
            'estoque'=>20,
            'categorias_id'=>2
        ]);   
        DB::table('produtos')->insert([
            'id' => 3,
            'nome' => 'Halls Preto',
            'descricao' => 'Halls extra-forte preto',
            'preco_compra'=>0.7,
            'preco_venda' =>2.0 ,
            'estoque'=>20,
            'categorias_id'=>1
        ]);   
    }
}
