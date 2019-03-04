@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Listagem de vendas</h1>
@stop

@section('content')





<div class="box">
            <div class="box-header">
              <h3 class="box-title">Vendas Realizadas</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                  <div class="row">
                  
                      </div><div class="row"><div class="col-sm-12">
                         <table id="example1" class="table table-bordered table-striped dataTable table-responsive" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row">
                    <th class="" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 297px;">Data/Hora</th>
                    <th class="" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 361px;">Tipo de Venda</th>
                    
                </tr>
                </thead>
                <tbody>
                    
                    
                    

                  @foreach($vendas as $venda)
                <tr role="row" class="odd">
                    <td>{{$venda->data_hora_venda}}</td>
                    <td>{{$venda->tipo_vendas_id}}</td>
                    
                    
                    
                    
                </tr>
                @endforeach
                </tbody>
                
                
              </table></div></div></div>
            </div>
            <!-- /.box-body -->
          </div>





@stop