<?php
	include('validar.php');
	include('conexao.php');

	$nome     = $_POST['nome'];
	$email    = $_POST['email'];
	$endereco = $_POST['endereco'];
	$telefone = $_POST['telefone'];
	$cpf      = $_POST['cpf'];
	$status   = $_POST['status'];
	
	$sql = "INSERT INTO cliente VALUES (null, '{$nome}', '{$email}', '{$endereco}', '{$telefone}', '{$cpf}', '{$status}')";
	$query = mysqli_query($con, $sql);
	if(!$query) {
		header('Location: listar_clientes.php?erro=1&msg=' . mysqli_error($con));
	} else {
		header('Location: listar_clientes.php?ok=1&id=' . mysqli_insert_id($con));
	}

	mysqli_close($con);
?>