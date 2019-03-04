<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoVenda extends Model
{
    
    public function Venda(){
        return $this->hasOne(Venda::class);
    }
    
    
}
