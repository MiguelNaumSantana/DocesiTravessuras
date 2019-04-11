<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>




    
    
   
	
	  
    @if($now < '18:00')
	<div class="bg-contact2" style="background-image: url('images/dia.png');position: bottom;background-position: top;">
    @else
    <div class="bg-contact2" style="background-image: url('images/noite.png');position: bottom;background-position: top;">
    @endif
		<div class="container-contact2">
			<div class="wrap-contact2">
				
				    {!! Form::open(array('route'=>'cadastrosalvar','method'=>'POST','class'=>'contact2-form validate-form')) !!}
					<span class="contact2-form-title" style="color:#fff;text-shadow: 2px 2px #333;">
						Cadastro de Humanos
					</span>

					<div class="wrap-input2 validate-input" data-validate="Name is required">
					    <label><bold><h4 style="color:#fff;text-shadow: 1px 1px #333;">Nome</h4></bold></label>
						<input class="input2" type="text" name="nome" placeholder="Nome" required>
						
					</div>
					<div class="wrap-input2 validate-input" data-validate="Name is required">
					    <label><bold><h4 style="color:#fff;text-shadow: 1px 1px #333;">Sexo</h4></bold></label>
						<select class="input2" name="sexo" required>
                          <option value="masculino">Masculino</option>
                          <option value="feminino">Feminino</option>
                          <option value="outros">Outros</option>
                        </select>
						
					</div>
					<div class="wrap-input2 validate-input" data-validate="Name is required">
					    <label><bold><h4 style="color:#fff;text-shadow: 1px 1px #333;">Data de nascimento</h4></bold></label>
						<input class="input2 " id="data" type="text" name="dt_nascimento" placeholder="00/00/0000" required>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					    <label><bold><h4 style="color:#fff;text-shadow: 1px 1px #333;">Email</h4></bold></label>
						<input class="input2" type="text" name="email" placeholder="Email" required>
						
					</div>
					<div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					    <label><bold><h4 style="color:#fff;text-shadow: 1px 1px #333;">RG</h4></bold></label>
						<input class="input2" type="text" name="rg" placeholder="RG" required>
					
					</div>
					<div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					    <label><bold><h4 style="color:#fff;text-shadow: 1px 1px #333;">Telefone</h4></bold></label>
						<input class="input2 " type="text" name="telefone" placeholder="(00) 0000-00000" id="tel" required>
						
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Message is required">
					    <label><bold><h4 style="color:#fff;text-shadow: 1px 1px #333;">Tipo de humano</h4></bold></label>
					    {{ Form::select('tipo_clientes_id',[null=>'Escolha um tipo'] + $select,null,['class'=>'input2','id'=>'select','required']) }}
					
					</div>
					
					<div class="wrap-input2 validate-input" data-validate = "Message is required"  id="outro">
					    <label><bold><h4 style="color:#fff;text-shadow: 1px 1px #333;">Qual?</h4></bold></label>
					    <input class="input2 " type="text" name="outro"  >
					
					</div>
					<div class="wrap-input2 validate-input" data-validate = "Message is required" id="ra">
					    <label><bold><h4 style="color:#fff;text-shadow: 1px 1px #333;">R.A</h4></bold></label>
					    <input class="input2 " type="text" name="ra" placeholder="Qual o seu RA?" >
					
					</div>
					
					
					
					<div class="wrap-input2 validate-input" data-validate = "Message is required">
					    <label><bold><h4 style="color:#fff;text-shadow: 1px 1px #333;">Fumante ?</h4></bold></label>
						<select class="input2" name="fumante" required>
                          <option value="1">Sim</option>
                          <option value="0">Não</option>
                        </select>
					</div>

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button class="contact2-form-btn">
								Enviar </br>para a nave
							</button>
						</div>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js" type="4ddcecde48cde73b96491780-text/javascript"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js" type="4ddcecde48cde73b96491780-text/javascript"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js" type="4ddcecde48cde73b96491780-text/javascript"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js" type="4ddcecde48cde73b96491780-text/javascript"></script>
<!--===============================================================================================-->
	<script src="js/main.js" type="4ddcecde48cde73b96491780-text/javascript"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="/js/mask.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="4ddcecde48cde73b96491780-text/javascript"></script>
	<script type="4ddcecde48cde73b96491780-text/javascript">
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
	
	<script>
	
	
		$("#ra").hide();
		$("#outro").hide();
		$('#select').on('change', function (e) {
    		var optionSelected = $("option:selected", this);
    		var valueSelected = this.value;
    		
    		if(valueSelected == 4){
    			$('#outro').show();
    			$("#outro").attr('required',true);
    		}
    		else
    		{
    			$("#outro").hide();
    			$("#outro").attr('required',false);
    			
    		}
    		
    		
    		if(valueSelected == 1 || valueSelected == 2){
    			$('#ra').show();
    			$("#ra").attr('required',true);
    		}
    		else
    		{
    			$("#ra").hide();
    			$("#ra").attr('required',false);
    			
    		}
    		
    		
		});
		$('#tel').mask('(00) 0000-00000');
		$('#data').mask('00/00/0000');
		
		
	</script>
	
	

<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/a2bd7673/cloudflare-static/rocket-loader.min.js" data-cf-settings="4ddcecde48cde73b96491780-|49" defer=""></script></body>
</html>
