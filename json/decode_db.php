<?php
	include('../conexao.php');
	
	$json = '[{"id":"1","nome":"Cristiano","email":"cristiano@esucri.com.br","endereco":"Rua Teste","telefone":"48965325854","cpf":"23568758954","status":"A"},{"id":"2","nome":"Andreia","email":"andereia@esucri.com.br","endereco":"Rua Nova","telefone":"489356875","cpf":"32658741568","status":"I"},{"id":"3","nome":"Alberto","email":"alberto@esucri.com.br","endereco":"Rua Exemplo","telefone":"48957845214","cpf":"56872156875","status":"A"},{"id":"4","nome":"Wagner","email":"wagner@esucri.com.br","endereco":"Rua Develop","telefone":"48956587451","cpf":"89547325568","status":"A"},{"id":"5","nome":"Fatima","email":"fatima@esucri.com.br","endereco":"Rua Analitica","telefone":"48936854755","cpf":"89547697458","status":"A"},{"id":"6","nome":"Paulo","email":"paulo@esucri.com.br","endereco":"Rua Adivinha","telefone":"48687984765","cpf":"65468761365","status":"A"}]';
	
	$dados = json_decode($json, true);
	
	foreach($dados as $valor) {
		$id			= $valor['id'];
		$nome		= $valor['nome'];
		$email		= $valor['email'];
		$endereco	= $valor['endereco'];
		$telefone	= $valor['telefone'];
		$cpf		= $valor['cpf'];
		$status		= $valor['status'];
		
		$sql = "INSERT INTO cliente VALUES ('{$id}', '{$nome}', '{$email}', '{$endereco}', '{$telefone}', '{$cpf}', '{$status}')";
		//echo $sql.'<br>';
		$query = mysqli_query($con, $sql);
	}
	
	mysqli_close($con);
?>













