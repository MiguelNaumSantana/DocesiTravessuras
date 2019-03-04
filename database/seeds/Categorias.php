<?php

use Illuminate\Database\Seeder;

class Categorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'id' => 1,
            'nome' => 'Balinha',
            'descricao' => 'balinha uai',
            
        ]);   
        DB::table('categorias')->insert([
            'id' => 2,
            'nome' => 'Alimento',
            'descricao' => 'sanduiche natural, salgados etc...',
            
        ]);   
    }
}
