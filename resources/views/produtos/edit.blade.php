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
              <h3 class="box-title">Cadastro de produtos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                
                {{ Form::model($produto, array('route' => array('produtos.update', $produto->id), 'method' => 'PUT',)) }}
              
                <!-- text input -->
                <div class="form-group">
                  <label>Nome</label>
                  {{ Form::text('nome',$produto->nome,['class' => 'form-control','placeholder'=>'Nome do Produto','required'])  }}
                  
                  
                  
                </div>
                <div class="form-group">
                  <label>Descrição</label>
                  {{ Form::textarea('descricao',$produto->descricao,['class' => 'form-control','placeholder'=>'Descrição do Produto','required'])  }}
                  
                </div>
                <div class="form-group">
                  <label>Categoria</label>
                  {{ Form::select('categorias_id',$select,$produto->categoria_id,['class'=>'form-control']) }}
                
                 
                </div>
                <div class="form-group">
                    <label>Preço de entrada</label> 
                    <div class="input-group">
                   
                <span class="input-group-addon">R$</span>
                {{ Form::text('preco_entrada',$produto->preco_compra,['class' => 'form-control dinheiro','placeholder'=>'Preço de compra do Produto','required'])  }}
                
              </div>
                    
                    
                </div>
                <div class="form-group">
                    <label>Preço de Venda</label> 
                    <div class="input-group">
                   
                <span class="input-group-addon">R$</span>
                {{ Form::text('preco_venda',$produto->preco_venda,['class' => 'form-control dinheiro','placeholder'=>'Preço de venda do Produto','required'])  }}
                
              </div>
                    
                    
                </div>
                <div class="form-group">
                  <label>Quantidade</label>
                  {{ Form::number('estoque',$produto->estoque,['class' => 'form-control','placeholder'=>'Estoque do produto','required','min'=>'0','step'=>'1'])  }}
                  
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