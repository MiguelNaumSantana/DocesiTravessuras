<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Categoria;
use App\Produto;
use App\TipoVenda;
use App\Venda;
use App\Cliente;
use App\Caderno;
use Illuminate\Support\Facades\Redirect;

class VendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        $vendas= Venda::with(['produtos'])->get();
        
    
       // dd($vendas);
        
        return view('vendas.list',compact('vendas'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Cliente::all();
        //dd($cliente);
        
        $produtos = produto::all();
        $tipoVendas=TipoVenda::all();
         //$promocao = promocao::all();
        $select = [];
        foreach($tipoVendas as $tipoVenda){
          
        $select[$tipoVenda->id] = $tipoVenda->nome; 
          
        }
        //dd($select);
      
        return view("vendas.create",compact("produtos","select","clientes"));
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
            
            $venda = Venda::create($request->all());
            $vendaSave = Venda::find($venda->id);
            
            $produto_id=$request->produtos_id;
            $quantidade= $request->quantidade;
            $precoCompra=$request->preco_compra;
            $precoVenda=$request->preco_venda;
            $desconto=$request->desconto;
            
            for($i=0;$i<sizeof($produto_id);$i++){
            
                $vendaSave->produtos()->attach($produto_id[$i],
                ['quantidade'=>$quantidade[$i],
                'preco_compra'=>$precoCompra[$i],
                'preco_venda'=>$precoVenda[$i],
                'desconto'=>$desconto[$i]
                ]);
                $produtoEstoque = Produto::find($produto_id[$i]);
                $produtoEstoqueTotal = $produtoEstoque->estoque - $quantidade[$i];
                $produtoEstoque->estoque = $produtoEstoqueTotal;
                $produtoEstoque->save();
                
                
          
            }
            
            if($request->tipo_vendas_id == 4){
                $this->caderno($request->cliente_id,$vendaSave->id);
            }
   
           if($vendaSave){
               
               return redirect('vendas');
           }
          
            

        
        
    }
    
    public function caderno($cliente_id,$venda_id)
    {
        $caderno = Caderno::create([
            'pago'=>0,
            'clientes_id'=>$cliente_id,
            'vendas_id'=>$venda_id
        ]);
        return redirect('vendas');
        
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
    
    public function rapida()
    
    {
      return view("vendas.vendarapida");
      
      
      
    }
    
    
}
