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

             <div class="input-group input-group-lg">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Action
                    <span class="fa fa-caret-down"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
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