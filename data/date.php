<?php
	//echo date('d/m/Y H:i:s');
	//echo date('Y-m-d H:i:s');
	//echo date('D');
	//echo date('h:i:s a');
	
	//Alterar no arquivo php.ini
	//date.timezone=America/Sao_Paulo
	
	//echo mktime(7, 22, 15, 04, 25, 2023);
	
	//echo date('d/m/Y H:i:s', 1682418135);
	
	$banco = '2023-04-26 19:31:17';
	
	function converterData($data_informada) {
		$informacao = explode(' ', $data_informada);
		//print_r($informacao);
		$data = explode('-', $informacao[0]);
		$hora = explode(':', $informacao[1]);
		
		$timestamp = mktime($hora[0], $hora[1], $hora[2], $data[1], $data[2], $data[0]);
		
		return $timestamp;
	}
	
	$timestamp = converterData($banco);
	
	echo date('d/m/Y H:i:s', $timestamp);
?>









