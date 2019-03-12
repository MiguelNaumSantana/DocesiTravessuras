<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Venda;

class Produto extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome','descricao','categorias_id','preco_compra','preco_venda','estoque'];
    
    
    public function vendas()
    {
        return $this->belongsToMany(Venda::class,'produtos_vendas','vendas_id','produtos_id')->withTimestamps();
    }
    
}
