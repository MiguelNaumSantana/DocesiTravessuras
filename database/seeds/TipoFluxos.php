<?php

use Illuminate\Database\Seeder;

class TipoFluxos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('tipo_fluxos')->insert([
            'id' => 1,
            'nome' => 'Entrada',
            'descricao' => 'Entrada de Valores',
            
        ]); 
         DB::table('tipo_fluxos')->insert([
            'id' => 2,
            'nome' => 'Saida',
            'descricao' => 'Saída de Valores',
            
        ]); 
    }
}
