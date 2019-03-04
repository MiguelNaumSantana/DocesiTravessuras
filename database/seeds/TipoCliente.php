<?php

use Illuminate\Database\Seeder;

class TipoCliente extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('tipo_clientes')->insert([
            'id' => 1,
            'nome' => 'Aluno',
            'descricao' => 'Aluno',
            
        ]); 
         DB::table('tipo_clientes')->insert([
            'id' => 2,
            'nome' => 'Professor',
            'descricao' => 'professor',
            
        ]); 
    }
}
