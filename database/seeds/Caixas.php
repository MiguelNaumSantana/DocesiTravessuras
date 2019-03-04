<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon ;

class Caixas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('caixas')->insert([
            'id' => 1,
            'valor' => 332.4,
            'descricao' => 'Entrada dos valores de hoje',
            'tipo_fluxos_id'=>1,
            'created_at'=>Carbon::today(),
          
        ]); 
    }
}
