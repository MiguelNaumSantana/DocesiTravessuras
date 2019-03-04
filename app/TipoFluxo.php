<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoFluxo extends Model
{
    protected $fillable = ['nome','descricao'];
    
    
    
    public function caixa()
    {
        return $this->hasMany(Caixa::class,'valor','tipo_fluxos_id','descricao');
    }
}
