<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Caixa;
use App\TipoFluxo;
use App\Venda;
use App\ProdutosVendas;
use App\Produto;
use Carbon\Carbon ;


class CaixaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtoVendas=ProdutosVendas::whereDate('created_at',Carbon::today())->get();
        $totalProdutos=Produto::all();
       // dd($totalProdutos);
        
        $totalProdutosCompra= [];
        $totalProdutosVenda=[];
        
        foreach($totalProdutos as $totalProduto){
            array_push($totalProdutosCompra,$totalProduto->preco_compra*$totalProduto->estoque);
            array_push($totalProdutosVenda,$totalProduto->preco_venda*$totalProduto->estoque);
        }
       
        $totalProdutosCompra=array_sum($totalProdutosCompra);
        $totalProdutosVenda=array_sum($totalProdutosVenda);
        
        
       // dd($produtoVendas);
        $precoVenda=[];
        $quantidade=[];
        $totalCompra=[];
        
        foreach($produtoVendas as $produtoVenda){
             array_push($totalCompra,$produtoVenda->preco_venda*$produtoVenda->quantidade);
            
        }
        
        $totalDia=array_sum($totalCompra);
        
        //dd($totalDia);
      
     
        
        $caixas=Caixa::all();
        
        $ultimos=Caixa::whereDate('created_at',Carbon::today())->get();
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
        
        $entrada=array_sum($entradaArray);
        $saida=array_sum($saidaArray);
        
        
        
        
        
        $total= ($entrada+$totalDia)-$saida;
        
        
       // dd($total);
        return view("caixa.list",compact("caixas","total","entrada","saida","totalDia","totalProdutosCompra","totalProdutosVenda"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fluxos = tipofluxo::all();
        //
        $select = [];
        foreach($fluxos as $fluxo){
          
        $select[$fluxo->id] = $fluxo->nome; 
          
      }
        return view('caixa.create',compact("select"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $data=$request->all();
        
       // dd($data['valor']);
        
        $data['valor'] = str_replace( ",", ".",$request->valor);
        
        
       // dd($data);
        
        $tipoFluxos = new TipoFluxo;
        
        
        $caixa = caixa::create([
            'valor'=>$data['valor'],
            'descricao'=>$data['descricao'],
            'tipo_fluxos_id'=>$data['tipo_fluxos_id'],
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        //dd($caixa);
        return Redirect::to('caixa');
        
        
        
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
}
