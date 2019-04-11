<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
     protected $fillable = ['nome','sexo','email','dt_nascimento','telefone','fumante','tipo_clientes_id','ra'];
     
    public function vendas(){
        return $this->hasMany(Vendas::class);
    }
    
    public function tipoclientes(){
        return $this->hasOne(TipoCliente::class);
    }
    
    
    
}
