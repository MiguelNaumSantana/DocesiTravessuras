@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Vendas</h1>
@stop

@section('content')




<div class="row">
    <div class="col-md-6">
    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Venda rápida</h3>
            </div>
            <div class="box-body">
              <p>Fumos</p>

              <div class="input-group margin">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Boladinho
                    <span class="fa fa-caret-down"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Vender</a></li>
               
                  </ul>
                </div>
                <!-- /btn-group -->
                <input type="text" class="form-control">
              </div>

            </div>
            <!-- /.box-body -->
          </div>
         </div> 
    
</div>



@stop