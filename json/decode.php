<?php
	//$json = '{ "nome":"Cristiano", "idade":40, "cidade":"Crici\u00fama" }';
	//$dados = json_decode($json, true);
	
	//echo '<pre>';
	//print_r($dados);
	//echo '</pre>';
	
	//echo $dados['nome'];
	
	$json = '[{"nome":"Cristiano","idade":40,"cidade":"Crici\u00fama"},{"nome":"Arildo","idade":70,"cidade":"I\u00e7ara"}]';
	$dados = json_decode($json, true);
	
	//echo '<pre>';
	//print_r($dados);
	//echo '</pre>';
	
	//echo $dados[1]['nome'];
	
	foreach($dados as $valor) {
		echo $valor['nome'].'<br>';
	}
?>









