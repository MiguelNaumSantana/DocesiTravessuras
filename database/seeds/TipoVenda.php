<?php

use Illuminate\Database\Seeder;

class TipoVenda extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('tipo_vendas')->insert([
            'id' => 1,
            'nome' => 'Comum',
            'descricao' => 'venda comum',
            
        ]); 
          DB::table('tipo_vendas')->insert([
            'id' => 2,
            'nome' => 'jogada',
            'descricao' => 'jogada',
            
        ]); 
          DB::table('tipo_vendas')->insert([
            'id' => 3,
            'nome' => 'brinde',
            'descricao' => 'brinde para alguém',
            
        ]); 
    }
}
