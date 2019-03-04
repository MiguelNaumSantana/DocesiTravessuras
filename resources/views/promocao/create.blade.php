@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Cadastrar Promocao</h1>
@stop

@section('content')


    <div class="col-md-8">
          <!-- Horizontal Form -->
          
          <!-- /.box -->
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Cadastro de Promocao</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::open(array('route'=>'promocao.store','method'=>'POST')) !!}
                <!-- text input -->
                <div class="form-group">
                  <label>Nome</label>
                  {{ Form::text('nome',null,['class' => 'form-control','placeholder'=>'Nome da Promocao','required'])  }}
                  
                  
                  
                </div>
                <div class="form-group">
                  <label>Descrição</label>
                  {{ Form::textarea('descricao',null,['class' => 'form-control','placeholder'=>'Descrição da Promocao','required'])  }}
                  
                </div>
                <div class="form-group">
                  
                  <button type="submit" class="btn btn-info pull-left">Salvar</button>
                  
                </div>
                
           {!! Form::close() !!}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
















@stop