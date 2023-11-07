<?php
	$con = mysqli_connect('localhost', 'root', '', 'locadora');
	mysqli_set_charset($con, 'utf8');
	
	function converterData($data_informada) {
		$informacao = explode(' ', $data_informada);
		$data = explode('-', $informacao[0]);
		$hora = explode(':', $informacao[1]);
		
		$timestamp = mktime($hora[0], $hora[1], $hora[2], $data[1], $data[2], $data[0]);
		
		return date('d/m/Y H:i:s', $timestamp);
	}
?>