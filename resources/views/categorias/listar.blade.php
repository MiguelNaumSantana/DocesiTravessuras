@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Categorias</h1>
@stop

@section('content')


    <div class="col-md-8">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Todas as Categorias</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div>
              <div class="col-sm-6"></div></div>
              <div class="row"><div class="col-sm-12">
                  <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row">
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Nome</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Descrição</th>
                    
                </thead>
                <tbody>
                    @foreach($categorias as $categoria)
                    <tr role="row" class="odd">
                        <td>{{$categoria->nome}}</td>
                        <td>{{$categoria->descricao}}</td>
                        
                        
                        
                    </tr>
                    
                    
                    
                    @endforeach
                    
                </tbody>
              
              </table></div></div><div class="row"><div class="col-sm-5"></div>
              </div></div>
            </div>
            <!-- /.box-body -->
          </div>
    </div>
















@stop