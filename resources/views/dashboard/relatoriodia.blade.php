@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Relatório de  {{$data}}</h1>
@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css">
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Data do Relatório</h3>
            </div>
          {{ Form::open(array('route'=>'relatorio','method'=>'POST')) }}
            <div class="box-body">
              <!-- Date -->
              <div class="form-group">
                <label>Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  {{Form::date('data',null, ['class'=>'form-control pull-right','id'=>'datepicker'])}}
                  
                </div>
                <!-- /.input group -->
              </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>
            </div>
              {!! Form::close() !!}
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- iCheck -->
          
          <!-- /.box -->
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-shopping-cart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total em Vendas</span>
              <span class="info-box-number">{{$totalEmVendas}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-arrow-circle-up"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Entrada de Caixa</span>
              <span class="info-box-number">{{$fluxoCaixaEntrada}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-arrow-circle-down"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Saída de Caixa</span>
              <span class="info-box-number">{{$fluxoCaixaSaida}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa  fa-money"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Saldo em caixa</span>
              <span class="info-box-number">{{$caixa}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa  fa-money"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Lucro do dia</span>
              <span class="info-box-number">{{$lucrodia}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        </div>
<div class="row">
  
  <div class="col-sm-12">
                         <table id="example1" class="table table-bordered table-striped dataTable table-responsive" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row">
                    <th class="" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 297px;">Produto</th>
                    <th class="" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 361px;">Quantidade de vendas</th>
                    
                </tr>
                </thead>
                <tbody>
                    
                    
                    

               @foreach($produtosVendidos as $prod)
              
                <tr role="row" class="odd">
                    <td>{{$prod->nome}}</td>
                    <td>{{$prod->quantidade}}</td>

                </tr>
                
                 @endforeach
              
                </tbody>
                
                
              </table></div></div>

@stop

@section('js')

 

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script src=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/locales/bootstrap-datepicker.pt-BR.min.js"></script>

 <script type="text/javascript">

            </script>
    

 

@stop