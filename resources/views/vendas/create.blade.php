@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Vendas</h1>
@stop

@section('content')




<div class="row">


<div class="col-md-6">
  
  
  <div class="box box-info">
    {!! Form::open(array('route'=>'vendas.store','method'=>'POST')) !!}
            <div class="box-header with-border">
              <h3 class="box-title">Fazer venda</h3>
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">Adicionar</button>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
              
              
              
      
                
                
                <div class="box">
         
            <!-- /.box-header -->
            <div class="box-body">
              
              <table class="table table-bordered" id="example">
                <tbody id="table-add">
                  
                  
                  <tr>
                  <th style="width: 10px">ID</th>
                  <th>Produto</th>
                  <th>Preço</th>
                  <th style="width: 40px">Quantidade</th>
                  <th>Total</th>
                  
                </tr>
               
                

              </tbody>
              
              </table>
              
              
            </div>
            <!-- /.box-body -->
            <!--<div class="box-footer clearfix">-->
            <!--  <ul class="pagination pagination-sm no-margin pull-right">-->
            <!--    <li><a href="#">«</a></li>-->
            <!--    <li><a href="#">1</a></li>-->
            <!--    <li><a href="#">2</a></li>-->
            <!--    <li><a href="#">3</a></li>-->
            <!--    <li><a href="#">»</a></li>-->
            <!--  </ul>-->
            <!--</div>-->
          </div>
                
   
              
              
              
              <!-- /.box-body -->
              <div class="box-footer">
                
                 <label>Tipo de venda</label>
                 {{ Form::select('tipo_vendas_id',$select,null,['class'=>'form-control']) }}
                
                
                
                 
                
                <label>Pagamento</label>
                <select  class="form-control " style="width: 100%;"  tabindex="-1" aria-hidden="true">
                    
                  
                  
                  <option value="1" selected="selected">Dinheiro</option>
                  <option value="1" selected="selected">Cartão-Crédito</option>
                  <option value="1" selected="selected">Cartão-Débito</option>
                  
                </select>
                <div class="form-group">
                  <label>Observação</label>
                  <textarea class="form-control" rows="3" placeholder="Observação"></textarea>
                </div>
               <hr>
               <h5 style="font-size:30px;">Total:R$ <span id="valor-total"> 00</span></h5>
               <hr>
                
                <button type="submit" class="btn btn-success pull-right">Finalizar</button>
                
              </div>
              {!! Form::close() !!}
              <!-- /.box-footer -->
            
          </div>
          <!-- general form elements -->
          
        </div>
        
        
        
        
        <div class="modal modal-info fade" id="modal-info">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Adicionar Produto</h4>
              </div>
              <div class="modal-body">
               <form role="form" id="form-prod">
              <div class="box-body">
                <div class="form-group">
                  
                  <label for="exampleInputEmail1">Produto</label>
                  <div class="input-group">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-danger" id="pesquisar">Pesquisar</button>
                </div>
                <!-- /btn-group -->
                 <select id="select-nome" class="form-control select2 " style="width: 100%;" id="select" tabindex="-1" aria-hidden="true">
                    
                  @foreach($produtos as $produto)
                  
                  <option value="{{$produto->id}}" selected="selected">{{$produto->nome}}</option>
                  @endforeach
                </select>
              </div>
                  
                 
                

                </form>
                
            
            <div class="box box-primary" id="tela-prod" >
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="https://psicodelizando.com/wp-content/uploads/2017/10/tabaco.jpg" width="100px" height="100px" alt="User profile picture">

              <h3 class="profile-username text-center" style="color:#333;" id="nome-prod"></h3>



              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1" style="color:#333">Quantidade</label>
                  <input style="width:70%;" type="number" class="form-control pull-right" id="inputqtd" placeholder="Quantidade" >
                  <input style="width:70%;" type="hidden" class="form-control pull-right" id="precoCompra"  >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" style="color:#333">Desconto</label>
                  <input style="width:70%;" type="number" class="form-control pull-right" id="desconto" placeholder="Desconto" >
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1" style="color:#333">Preço</label>
                  
                  <p style="color:#333; font-size:30px" >R$: <span id="inputpreco"></span> </p>
                  
                </div>
              </div>

              <!--<ul class="list-group list-group-unbordered">-->
              <!--  <li class="list-group-item" style="height: 70px;">-->
              <!--    <b style="color:#333; font-size:20px">Quantidade</b>-->
                  
                  
              <!--    <input style="width:70%;" type="number" class="form-control pull-right" id="inputqtd" placeholder="Quantidade" >-->
              <!--    <input style="width:70%;" type="hidden" class="form-control pull-right" id="precoCompra"  >-->
              <!--  </li>-->
                
              <!--  <li class="list-group-item" style="height: 70px;">-->
              <!--    <b style="color:#333; font-size:20px">Preço</b>-->
                  
              <!--    <p style="color:#333; font-size:30px" id="inputpreco"  class=" pull-right"  > </p>-->
              <!--    <b style="color:#333; font-size:30px" class=" pull-right">R$: </b>-->
                  
                  
                  
              <!--  </li>-->
                
                
            
                
                
                
              <!--</ul>-->

              
              
              
              
              <button type="button" class="close"  id="adicionar" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">Adicionar</span></button>
              
              
              
            </div>
            <!-- /.box-body -->
          </div>
              
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

        </div>
        </div>
        
        


</div>




@stop



@section('js')
    <script>
        $(document).ready(function() { $("#select-nome").select2(); $('#example').DataTable(); });
    </script>
    
    
    <script>
$(document).ready(function(){
  $("#tela-prod").hide();
  var somatorio = [];
  var total;
  
  
  $("#adicionar").click(function(){
    var id = $("#select-nome").val();
    var nome= $("#select-nome  option:selected").text();
    //console.log(nome);
    var preco= $("#inputpreco").text();
    var quantidade =$("#inputqtd").val();
    var precoCompra = parseFloat($("#precoCompra").text());
    var desconto = $("#desconto").val();
    console.log(desconto);
     total =  parseFloat(preco)*quantidade;

    $("#table-add").append("<tr><td><input type='hidden' class='form-control' value='"+desconto+"' name='desconto[]' ><input type='hidden' class='form-control' value='"+preco+"' name='preco_venda[]' ><input type='hidden' class='form-control' value='"+id+"' name='produtos_id[]' ><input type='hidden' class='form-control' value='"+precoCompra+"' name='preco_compra[]' >"+id+"</td><td>"+
    nome+"</td><td><span class='badge bg-red'>"+preco+"</span>"+
    "</td><td><input type='hidden' class='form-control' value='"+quantidade+"' name='quantidade[]' >"+quantidade+"</span></td>"+
    "<td><span class='badge bg-red total'>"+total+"</span></td></tr>");
    
    
    
  $("#tela-prod").hide();
    
    
  });

  $(".close").click(function(){
    
    
    var totalArray = total;
    parseFloat(totalArray);
    somatario =[];
    somatorio.push(totalArray);
      
    console.log(somatorio);
    
    const sum = somatorio.reduce(add);

    function add(accumulator, a) {
        return accumulator + a;
    }
    
    console.log(formatReal( sum ));

    $("#valor-total").text(formatReal( sum ));
    
    
   
    
    
    
    
  });
  
  
  




function getMoney( str )
{
        return parseInt( str.replace(/[\D]+/g,'') );
}
function formatReal( int )
{
        var tmp = int+'';
        tmp = tmp.replace(/([0-9]{2})$/g, ",$1");
        if( tmp.length > 6 )
                tmp = tmp.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");

        return tmp;
}

  
});
</script>




<script>


    $("#pesquisar").click(function(){
        var id= $("#select-nome").val();

        $.ajax({
            url: "http://balalaravel-miguelsantana.c9users.io/produtos/"+id,
            type: 'GET',
            dataType: 'json', // added data type
            success: function(res) {
                
                telaProd(res);
            }
        });
      
    });
    
    
    function telaProd( data){
      console.log(data);
      
      $("#nome-prod").text(data.nome);
      $("#inputpreco").text(data.preco_venda);
      $("#precoCompra").text(data.preco_compra);
      
      $("#tela-prod").show();
      
      
      
    }

</script>
@stop