<?php
	//error_reporting(0);
	echo "<i><font size='2'>Criar um vetor conforme dados planilha em anexo</font></i></br>";
	$array = array("supermercado" => array("janeiro" => 1200, "fevereiro" => 1800, "marco" => 300, "abril" => 400),
				   "diversao" => array("janeiro" => 2500, "fevereiro" => 9000, "marco" => 0, "abril" => 0),
				   "aluguel" => array("janeiro" => 1700, "fevereiro" => 1700, "marco" => 1700, "abril" => 1700),
				   "estudos" => array("janeiro" => 500, "fevereiro" => 500, "marco" => 500, "abril" => 500)
				  );
	
	
	echo"
		<link rel='stylesheet' type='text/css' href='http://getbootstrap.com/dist/css/bootstrap.css'>
		<table border='1' class='table table-hover width='100px' height='100px'>
			<tr>
				<td> - </td>
				<td> janeiro </td>
				<td> fevereiro </td>
				<td> mar&ccedil;o </td>
				<td> abril </td>
				<td> soma </td>
			</tr>
			<tr>
				<td id='div0'> diversao </td>
				<td id='div1'> 2500 </td>
				<td id='div2'> 9000 </td>
				<td id='div3'> 0 </td>
				<td id='div4'> 0 </td>
				<td id='div5'> <script> 
						var count = 0;
						for(i=1; i<=4; i++){
							count += parseInt(document.getElementById ('div'+i).innerText);
						}
						document.write(count);
					</script></td>
			</tr>
			<tr>
				<td id='alu0'> alugel </td>
				<td id='alu1'> 1700 </td>
				<td id='alu2'> 1700 </td>
				<td id='alu3'> 1700</td>
				<td id='alu4'> 1700 </td>
				<td id='alu5'> <script> 
						var count = 0;
						for(i=1; i<=4; i++){
							count += parseInt(document.getElementById ('alu'+i).innerText);
						}
						document.write(count);
					</script></td>
			</tr>
			<tr>
				<td id='est0'> estudos </td>
				<td id='est1'> 500 </td>
				<td id='est2'> 500 </td>
				<td id='est3'> 500 </td>
				<td id='est4'> 500 </td>
				<td id='est5'> <script> 
						var count = 0;
						for(i=1; i<=4; i++){
							count += parseInt(document.getElementById ('est'+i).innerText);
						}
						document.write(count);
					</script></td>
			</tr>
			<tr>
				<td id='sup0'> supermercado </td>
				<td id='sup1'> 1200 </td>
				<td id='sup2'> 1800 </td>
				<td id='sup3'> 300 </td>
				<td id='sup4'> 400 </td>
				<td id='sup5'> <script> 
						var count = 0;
						for(i=1; i<=4; i++){
							count += parseInt(document.getElementById ('sup'+i).innerText);
						}
						document.write(count);
					</script></td>
			</tr>
			<tr>
				<td> soma </td>
				<td> <script> 
						var count = 0;
						var array = new Array('div', 'alu', 'est', 'sup');
						for(i=0; i<=3; i++){
							count += parseInt(document.getElementById (array[i]+'1').innerText);
						}
						document.write(count);
					</script></td>
				<td> <script> 
						var count = 0;
						var array = new Array('div', 'alu', 'est', 'sup');
						for(i=0; i<=3; i++){
							count += parseInt(document.getElementById (array[i]+'2').innerText);
						}
						document.write(count);
					</script></td>
				<td> <script> 
						var count = 0;
						var array = new Array('div', 'alu', 'est', 'sup');
						for(i=0; i<=3; i++){
							count += parseInt(document.getElementById (array[i]+'3').innerText);
						}
						document.write(count);
					</script></td>
				<td> <script> 
						var count = 0;
						var array = new Array('div', 'alu', 'est', 'sup');
						for(i=0; i<=3; i++){
							count += parseInt(document.getElementById (array[i]+'4').innerText);
						}
						document.write(count);
					</script></td>
					<td> <script> 
						var count = 0;
						var array = new Array('div', 'alu', 'est', 'sup');
						for(i=0; i<=3; i++){
							count += parseInt(document.getElementById (array[i]+'5').innerText);
						}
						document.write(count);
					</script></td>
					
					
			</tr>
		</table>";
	echo "</br>";
	echo "<hr>";
	echo "<i><font size='2'>Imprimir todos os gastos do m&ecirc;s de janeiro</font></i></br>";
	$count = array();
	foreach ($array as $type => $array_mes){ //"supermercado" => "array"
		foreach ($array_mes as $key => $value){ //"janeiro" "value"
			@$count[$key] += $value;
		}
	}
	echo "A soma dos gastos de janeiroeiro &eacute;: <b>".$count["janeiro"]."</b>";
	echo "<hr>";
	
	echo "<i><font size='2'>Imprimir a soma dos gastos de todos os meses at&eacute; o momento</font></i></br>";
	$count = 0;
	foreach ($array as $type => $array_mes){
		foreach($array_mes as $key => $value){
			@$count += $value;
		}	
	}
	echo "A soma total &eacute;: <b>$count</b>";
	echo "<hr>";
	
	echo "<i><font size='2'>Mostrar o m&ecirc;s de maior gasto e o valor deste m&ecirc;s</font></i></br>";
	$count = array();
	foreach ($array as $type => $array_mes){
		foreach($array_mes as $key => $value){
			@$count[$key] += $value;
		}	
	}
	$value = max($count);
	$key = array_search($value, $count);
	echo "O m&ecirc;s com o maior gasto foi <b>$key</b> com o gasto de <b>$value</b>";
	echo "<hr>";
	
	
	echo "<i><font size='2'>Mostrar a categoria de menor gasto dentre todos os meses</font></i></br>";
	$count = array();
	foreach ($array as $type => $array_mes){
		foreach($array_mes as $key => $value){
			@$count[$type] += $value;
		}	
	}
	$value = min($count);
	$key = array_search($value, $count);
	echo "A categoria com o menor gasto foi <b>$key</b> com o gasto de <b>$value</b>";
	
?>