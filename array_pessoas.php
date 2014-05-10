<html>
	<head>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	</head>
	<body>
		<form class="form-horizontal" method="POST">
			<fieldset>

			<!-- Form Name -->
			<legend>Pessoas/Sal&aacute;rios</legend>

			<!-- Text input-->
			<div class="control-group">
			  <label class="control-label" for="">Pessoa 1</label>
			  <div class="controls">
				<input id="" name="pessoa1" type="text" placeholder="" class="input-large">
				
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
			  <label class="control-label" for="">Pessoa 2</label>
			  <div class="controls">
				<input id="" name="pessoa2" type="text" placeholder="" class="input-large">
				
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
			  <label class="control-label" for="">Pessoa 3</label>
			  <div class="controls">
				<input id="" name="pessoa3" type="text" placeholder="" class="input-large">
				
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
			  <label class="control-label" for="">Pessoa 4</label>
			  <div class="controls">
				<input id="" name="pessoa4" type="text" placeholder="" class="input-large">
				
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
			  <label class="control-label" for="">Pessoa 5</label>
			  <div class="controls">
				<input id="" name="pessoa5" type="text" placeholder="" class="input-large">
				
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
			  <label class="control-label" for="">Sal&aacute;rio 1</label>
			  <div class="controls">
				<input id="" name="salario1" type="text" placeholder="" class="input-large">
				
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
			  <label class="control-label" for="">Sal&aacute;rio 2</label>
			  <div class="controls">
				<input id="" name="salario2" type="text" placeholder="" class="input-large">
				
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
			  <label class="control-label" for="">Sal&aacute;rio 3</label>
			  <div class="controls">
				<input id="" name="salario3" type="text" placeholder="" class="input-large">
				
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
			  <label class="control-label" for="">Sal&aacute;rio 4</label>
			  <div class="controls">
				<input id="" name="salario4" type="text" placeholder="" class="input-large">
				
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
			  <label class="control-label" for="">Sal&aacute;rio 5</label>
			  <div class="controls">
				<input id="" name="salario5" type="text" placeholder="" class="input-large">
				
			  </div>
			</div>

			<!-- Button -->
			<div class="control-group">
			  <label class="control-label" for=""></label>
			  <div class="controls">
				<button id="" name="submit" class="btn btn-info">OK</button>
			  </div>
			</div>

			</fieldset>
		</form>
	</body>

</html>

<?php
	if(isset($_POST['submit'])){			
		extract($_POST);		
		
		//- Carregue os dados das pessoas dentro de um vetor chamado de $pessoas;
		$pessoas = array($pessoa1, $pessoa2, $pessoa3, $pessoa4, $pessoa5);	
		
		//- Carregue os dados do salário em um vetor chamado de salário com índice o nome da pessoa;
		$salario = array($pessoa1 => $salario1, $pessoa2 => $salario2, $pessoa3 => $salario3, $pessoa4 => $salario4, $pessoa5 => $salario5);
		
		foreach($pessoas as $value){ //CHECAR NOMES VAZIOS	
			if (empty($value)){
				die("Digite os nomes");
			}
		}
		
		$test = array();
		foreach($pessoas as $value){ //CHECAR NOMES IGUAIS
			@$test[$value]++;		//ARMAZENA COMO ÍNDICE O NOME DA PESSOA E COMO VALOR +1
			if($test[$value]>1){	//SE TIVER VALOR MAIOR QUE 1, TEM NOME IGUAL 	
				die("Digite nomes diferentes.");
			}
		}
		
		foreach($salario as $key => $value){
			if(!is_numeric($value)){
				die("O SAL&Aacute;RIO TEM DE SER N&Uacute;MERO");
			}
		}
		
		//- Ordene as pessoas por nome dentro do vetor;
		ksort($salario);
			
		//- Imprima todos os nomes das pessoas e o salário de cada uma.	
		foreach($salario as $key => $value){
			echo "$key => $value </br>";
		}
	}
?>