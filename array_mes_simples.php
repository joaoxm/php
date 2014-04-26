<?php
	error_reporting(0);
	//Criar um vetor conforme dados planilha em anexo
	$array = array("supermercado" => array("janeiro" => 1200, "fevereiro" => 1800, "marco" => 300, "abril" => 400),
				   "diversao" => array("janeiro" => 2500, "fevereiro" => 9000, "marco" => 0, "abril" => 0),
				   "aluguel" => array("janeiro" => 1700, "fevereiro" => 1700, "marco" => 1700, "abril" => 1700),
				   "estudos" => array("janeiro" => 500, "fevereiro" => 500, "marco" => 500, "abril" => 500)
				  );
	
	//Imprimir todos os gastos do mês de janeiro;
	$count = array();
	foreach ($array as $type => $array_mes){ //"supermercado" => "array"
		foreach ($array_mes as $key => $value){ //"janeiro" "value"
			$count[$key] += $value;
		}
	}
	echo "A soma dos gastos de janeiroeiro &eacute;: <b>".$count["janeiro"]."</b>";
	echo "<hr>";
	
	//Imprimir a soma dos gastos de todos os meses até o momento;
	$count = 0;
	foreach ($array as $type => $array_mes){
		foreach($array_mes as $key => $value){
			$count += $value;
		}	
	}
	echo "A soma total &eacute;: <b>$count</b>";
	echo "<hr>";
	
	//- Mostrar o mês de maior gasto e o valor deste mês;
	$count = array();
	foreach ($array as $type => $array_mes){
		foreach($array_mes as $key => $value){
			$count[$key] += $value;
		}	
	}
	$value = max($count);
	$key = array_search($value, $count);
	echo "O m&ecirc;s com o maior gasto foi <b>$key</b> com o gasto de <b>$value</b>";
	echo "<hr>";
	
	
	//- Mostrar a categoria de menor gasto dentre todos os meses;
	$count = array();
	foreach ($array as $type => $array_mes){
		foreach($array_mes as $key => $value){
			$count[$type] += $value;
		}	
	}
	$value = min($count);
	$key = array_search($value, $count);
	echo "A categoria com o menor gasto foi <b>$key</b> com o gasto de <b>$value</b>";
	
?>