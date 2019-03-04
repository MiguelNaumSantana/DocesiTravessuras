@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Cadastro de produtos</h1>
@stop

@section('content')





<div class="col-md-8">
          <!-- Horizontal Form -->
          
          <!-- /.box -->
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Fluxo de caixa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::open(array('route'=>'caixa.store','method'=>'POST')) !!}
                <!-- text input -->
                
                <div class="form-group">
                  <label>Tipo</label>
                  {{ Form::select('tipo_fluxos_id',$select,null,['class'=>'form-control']) }}
                
                 
                </div>
                
                
                
                
                <div class="form-group">
                    <label>Valor </label> 
                    <div class="input-group">
                   
                <span class="input-group-addon">R$</span>
                {{ Form::text('valor',null,['class' => 'form-control dinheiro','placeholder'=>'Valor de entrada ou saída do caixa','required'])  }}
                
              </div>
                    
                    
                </div>
                
                
                <div class="form-group">
                  <label>Descrição</label>
                  {{ Form::textarea('descricao',null,['class' => 'form-control','placeholder'=>'Nome do Produto','required'])  }}
                  
                  
                  
                </div>
               
               
                <div class="form-group">
                  
                  {{ Form::submit('Salvar')  }}
                  
                </div>
                
           {!! Form::close() !!}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>








@stop



@section('js')
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>  
    <script>
        $('.dinheiro').mask('#.##0,00', {reverse: true});
    </script>
@stop