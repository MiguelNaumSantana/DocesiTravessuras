<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoCliente;
use App\Cliente;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.list',compact('clientes'));
        
        
    }
        

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoClientes = TipoCliente::all();
        
        $select = [];
        foreach($tipoClientes as $tipoCliente){
          
        $select[$tipoCliente->id] = $tipoCliente->nome; 
          
        }
        
        $now=date('H:i');
        return view('clientes.create',compact('now','select'));
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
       
        $nascimento = str_replace('/','-',$request->dt_nascimento);
        $nascimento = date('Y-m-d',strtotime($nascimento));
        $cliente=Cliente::create([
           'nome'=>$request->nome,
           'sexo'=>$request->sexo,
           'dt_nascimento'=>$nascimento,
           'email'=>$request->email,
           'rg'=>$request->rg,
           'telefone'=>$request->telefone,
           'tipo_clientes_id'=>$request->tipo_clientes_id,
           'outro'=>$request->outro,
           'fumante'=>$request->fumante,
           'ra'=>$request->ra,
            ]);
        return view('clientes.confirm')    ;
       
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
