<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caixa;
use App\TipoFluxo;
use App\Venda;
use App\ProdutosVendas;
use App\Produto;
use Carbon\Carbon ;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //$this->totalemvendas();
       
       return view("dashboard.dashboard");
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
             array_push($totalCompra,$produtoVenda->preco_venda*$produtoVenda->quantidade);
            
        }
        return array_sum($totalCompra);
    }
    
    
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
        //dd($ultimos);
        
        foreach($ultimos as $ultimo){
            //dd($ultimo->valor);
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
    
    public function caixa()
    {
           $fluxocaixa = $this->fluxocaixa();
           $totalVendas = $this->totalemvendas();
           $caixa = ($fluxocaixa["entrada"] + $totalVendas)-$fluxocaixa["saida"];
           return $caixa;
    }
    
    public function relatoriodia(Request $request)
    {
         $data = $request->data;
         $totalEmVendas = $this->totalemvendas($request->data);
         $totalEmProdutos = $this->totalprodutos();
         $fluxocaixa = $this->fluxocaixa($request->data);
         $fluxoCaixaEntrada = $fluxocaixa["entrada"] ;
         $fluxoCaixaSaida = $fluxocaixa["saida"];
        // dd($fluxocaixa);
         $caixa = $this->caixa();
         //dd($caixa);
         
         return view('dashboard.relatoriodia',compact("totalEmVendas","fluxoCaixaEntrada","fluxoCaixaSaida","data","caixa"));
         
        
    }
}
