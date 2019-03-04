<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Produto;

class Venda extends Model
{
    public $timestamps = false;
    protected $fillable = ['data_hora_venda','tipo_vendas_id','clientes_id'];
    
    
    
    
    public function produtos()
    
    {
        return $this->belongsToMany(Produto::class,'produtos_vendas','vendas_id','produtos_id')->withTimestamps();
    }
    
    
    
    public function tipoVendas()
    {
        return $this->hasMany(TipoVenda::class);
    }
    
    public function cliente()
    
    {
        return $this->hasOne(Cliente::class);
    }
}
