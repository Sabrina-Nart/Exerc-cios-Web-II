<?php
	include('validar.php');
	include('conexao.php');

	$id       = $_POST['id'];
	$nome     = $_POST['nome'];
	$email    = $_POST['email'];
	$endereco = $_POST['endereco'];
	$telefone = $_POST['telefone'];
	$cpf      = $_POST['cpf'];
	$status   = $_POST['status'];
	
	$sql = "UPDATE cliente SET nome = '{$nome}', email = '{$email}', endereco = '{$endereco}', telefone = '{$telefone}', cpf = '{$cpf}', status= '{$status}' WHERE id = '{$id}'";
	$query = mysqli_query($con, $sql);
	if(!$query) {
		header('Location: listar_clientes.php?erro=1&msg=' . mysqli_error($con));
	} else {
		header('Location: listar_clientes.php?ok=2&id=' . $id);
	}
	
	mysqli_close($con);
?>