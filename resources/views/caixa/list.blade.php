@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Fluxo de caixa</h1>
@stop

@section('content')





<div class="box">
            <div class="box-header">
              <h3 class="box-title">Fluxo</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                  
                  <div class="row">
                  
                      </div><div class="row"><div class="col-sm-12">
                         <table id="example1" class="table table-bordered table-striped dataTable table-responsive" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row">
                    <th class="" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 297px;">Data</th>
                    <th class="" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 361px;">Descrição</th>
                    <th class="" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 361px;">Valor</th>
                    <th class="" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 361px;">Tipo</th>
                    
                    
                    
                </tr>
                </thead>
                <tbody>
                    
                    
                    

                  @foreach($caixas as $caixa)
                <tr role="row" class="odd">
                    <td>{{$caixa->created_at}}</td>
                    <td>{{$caixa->descricao}}</td>
                    <td>R$: {{$caixa->valor}}</td>
                    <td>{{$caixa->tipo_fluxos_id}}</td>
                    
                    
                    
                    
                </tr>
                @endforeach
                </tbody>
                <div class="box-footer">
              <div class="row">
                <div class="col-sm-3 col-xs-6">
                  <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-arrow-graph-up-right"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Entradas em produtos</span>
              <span class="info-box-number">R$ {{$totalDia}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
                  <!-- /.description-block -->
                </div>
                <div class="col-sm-3 col-xs-6">
                  <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-arrow-graph-up-right"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Entradas de hoje</span>
              <span class="info-box-number">R$ {{$entrada}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                
               <div class="col-sm-3 col-xs-6">
                  <div class="info-box">
            <span class="info-box-icon bg-red"><i class="ion ion-arrow-graph-down-right"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Saídas de hoje</span>
              <span class="info-box-number">R$ {{$saida}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
                  <!-- /.description-block -->
                </div>
               <div class="col-sm-3 col-xs-6">
                  <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total em Caixa</span>
              <span class="info-box-number">R$ {{$total}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
                  <!-- /.description-block -->
                </div>
               <div class="col-sm-3 col-xs-6">
                  <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="ion 	ion-calculator"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total em Produtos</span>
              <span class="info-box-number">R$ {{$totalProdutosCompra}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
                  <!-- /.description-block -->
                </div>
               <div class="col-sm-3 col-xs-6">
                  <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="ion 	ion-calculator"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total em Produtos</span>
              <span class="info-box-number">R$ {{$totalProdutosVenda}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                
                <!-- /.col -->
                
              </div>
              <!-- /.row -->
            </div>
                
                
              </table></div></div></div>
            </div>
            <!-- /.box-body -->
          </div>





@stop