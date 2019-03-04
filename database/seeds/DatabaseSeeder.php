<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Users::class);
        $this->call(Categorias::class);
        $this->call(Produtos::class);
        
        $this->call(TipoFluxos::class);
        $this->call(Caixas::class);
        
        $this->call(TipoVenda::class);
        $this->call(TipoCliente::class);
    }
}
