@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
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
        
    
    
    
</div>
@stop

@section('js')

 

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script src=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/locales/bootstrap-datepicker.pt-BR.min.js"></script>

 <script type="text/javascript">

            </script>
    

 

@stop