<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Produto;
use Illuminate\Support\Facades\Redirect;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = produto::all();
        
        return view('produtos.listar',compact("produtos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = categoria::all();
        $select = [];
        foreach($categorias as $categoria){
          
        $select[$categoria->id] = $categoria->nome; 
          
      }
        return view('produtos.cadastro',compact("select"));
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
       $preco_entrada= str_replace( ",", ".",$request->preco_entrada,);
       $preco_venda= str_replace( ",", ".",$request->preco_venda);
       
       //dd($preco_entrada);
        $produtos = produto::create([
            'nome'=>$request->nome,
            'descricao'=>$request->descricao,
            'preco_compra'=>$preco_entrada,
            'preco_venda'=>$preco_venda,
            'estoque'=>$request->quantidade,
            'categorias_id'=>$request->categoria,
        ]);
        return Redirect::to('produtos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produtos = produto::find($id);
        return json_encode($produtos);
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
    
    public function todosProdutos($id){
        $produtos = produto::find($id);
        return json_encode($produtos);
    }
}
