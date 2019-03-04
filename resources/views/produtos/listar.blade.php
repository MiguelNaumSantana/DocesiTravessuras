
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Produtos</h1>
@stop

@section('content')







<div class="box">
            <div class="box-header">
              <h3 class="box-title">Produtos Cadastrados</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                  <div class="row">
                  
                      </div><div class="row"><div class="col-sm-12">
                         <table id="example1" class="table table-bordered table-striped dataTable table-responsive" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row">
                    <th class="" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 297px;">Nome</th>
                    <th class="" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 361px;">Categoria</th>
                    <th class="" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 322px;">Preco compra</th>
                    <th class="" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 257px;">preço venda</th>
                    <th class="" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 190px;">Estoque</th>
                </tr>
                </thead>
                <tbody>
                    
                    
                    

                  @foreach($produtos as $produto)
                <tr role="row" class="odd">
                    <td>{{$produto->nome}}</td>
                    <td>{{$produto->categoria}}</td>
                    <td>{{$produto->preco_compra}}</td>
                    <td>{{$produto->preco_venda}}</td>
                    <td>{{$produto->estoque}}</td>
                    
                    
                    
                </tr>
                @endforeach
                </tbody>
                
                
              </table></div></div></div>
            </div>
            <!-- /.box-body -->
          </div>
          
          
          

@stop