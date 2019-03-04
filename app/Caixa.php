<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caixa extends Model
{
    protected $fillable = ['valor','descricao','tipo_fluxos_id'];
    
    
    
    public function tipofluxos()
    {
        return $this->belongsTo(TipoFluxo::class,'valor','tipo_fluxos_id','descricao');
    }
}
