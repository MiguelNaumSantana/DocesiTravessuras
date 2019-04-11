<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caixa;
use App\TipoFluxo;
use App\Venda;
use App\ProdutosVendas;
use App\Produto;
use Carbon\Carbon ;
use DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
            Necessiade de refatorar essa função
        */
         $data = Carbon::today();
         $produtosVendidos = $this->prodvendidos($data);
         $lucrodia= $this->lucrodia($data);
         $totalEmVendas = $this->totalemvendas($data);
         $totalEmProdutos = $this->totalprodutos();
         $fluxocaixa = $this->fluxocaixa($data);
         $fluxoCaixaEntrada = $fluxocaixa["entrada"];
         $fluxoCaixaSaida = $fluxocaixa["saida"];
         $caixa = $this->caixa();
         return view('dashboard.dashboard',compact("totalEmVendas","fluxoCaixaEntrada","fluxoCaixaSaida","data","caixa","produtosVendidos","lucrodia"));
       
       
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function lucrodia($data = null)
    {
          if($data)
        {
        $produtoVendas=ProdutosVendas::whereDate('created_at',$data)->get();
        }else{
            $produtoVendas=ProdutosVendas::all();
        }
        
        $totalCompra=[];
        
        
        foreach($produtoVendas as $produtoVenda){
            
             array_push($totalCompra,( $produtoVenda->preco_venda - $produtoVenda->preco_compra )*$produtoVenda->quantidade-$produtoVenda->desconto);
            
        }
        
        
        return array_sum($totalCompra);
        
        
        
    }
    
    /*
        Lista o total em vendas no dia
    
    */
    
    public function totalemvendas($data = null)
    {
        if($data)
        {
        $produtoVendas=ProdutosVendas::whereDate('created_at',$data)->get();
        }else{
            $produtoVendas=ProdutosVendas::all();
        }
        
        $totalCompra=[];
        
        
        foreach($produtoVendas as $produtoVenda){
            
             array_push($totalCompra,$produtoVenda->preco_venda*$produtoVenda->quantidade-$produtoVenda->desconto);
            
        }
        return array_sum($totalCompra);
    }
    
    /*
    
        Total em Produtos, tanto o valor de compra quanto o valor de venda;
    
    
    */
    public function totalprodutos()
    {
        $produtos = Produto::all();
        $totalProdutosCompra= [];
        $totalProdutosVenda=[];
        foreach($produtos as $totalProduto){
            array_push($totalProdutosCompra,$totalProduto->preco_compra*$totalProduto->estoque);
            array_push($totalProdutosVenda,$totalProduto->preco_venda*$totalProduto->estoque);
        }
        $total = ["compra"=>array_sum($totalProdutosCompra),"venda"=>array_sum($totalProdutosVenda)];
        return $total;
        
    }
    
    /*
        Fluxo de caixa, função que administra a entrada e saída de caixa
    
    */
    
    public function fluxocaixa($data = null)
    {
        $caixas=Caixa::all();
        
        if($data)
        {
            $ultimos=Caixa::whereDate('created_at',$data)->get();
        }
        else{ $ultimos=Caixa::all();};
            
    
        $entradaArray = [];
        $entrada = [];
        $saidaArray = [];
        $saida =[];
        foreach($ultimos as $ultimo){
            if($ultimo->tipo_fluxos_id == 1){
                $entrada = array_push($entradaArray,$ultimo->valor);
            }
            if($ultimo->tipo_fluxos_id==2){
            $saida=array_push($saidaArray,$ultimo->valor);
            }
            
        }
        $total = ["entrada"=>array_sum($entradaArray),"saida"=>array_sum($saidaArray)];
        return $total;
        
    }
    
    /*
        Mostra o total em caixa
    
    */
    
    public function caixa()
    {
           $fluxocaixa = $this->fluxocaixa();
           $totalVendas = $this->totalemvendas();
           $caixa = ($fluxocaixa["entrada"] + $totalVendas)-$fluxocaixa["saida"];
           return $caixa;
    }
    /*
        Lista todos os produtos vendidos no dia por quantidade
    
    */
    public function prodvendidos($data = null)
    {
        
        $produtoVenda = DB::table('produtos_vendas')
                        ->select(DB::raw("nome,SUM(quantidade) as quantidade"))
                        ->whereDate('created_at',$data)
                        ->groupBy(DB::raw("produtos_id"))
                        ->join('produtos','produtos.id','=','produtos_id')
                        ->orderby('quantidade','desc')->get();

        return $produtoVenda;
        
        
    }
    /*
        Chama todas as funções do relatorio para enviar a view
    
    */
    public function relatoriodia(Request $request )
    {
         $data = $request->data;
         $lucrodia= $this->lucrodia($data);
         $produtosVendidos = $this->prodvendidos($data);
         $totalEmVendas = $this->totalemvendas($request->data);
         $totalEmProdutos = $this->totalprodutos();
         $fluxocaixa = $this->fluxocaixa($request->data);
         $fluxoCaixaEntrada = $fluxocaixa["entrada"] ;
         $fluxoCaixaSaida = $fluxocaixa["saida"];
         $caixa = $this->caixa();
         return view('dashboard.relatoriodia',compact("totalEmVendas","fluxoCaixaEntrada","fluxoCaixaSaida","data","caixa","produtosVendidos","lucrodia"));
    }
}
