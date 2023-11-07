<?php
	include('validar.php');
	include('conexao.php');

	$id = $_GET['id'];
	
	$sql = "DELETE FROM cliente WHERE id = '{$id}'";
	$query = mysqli_query($con, $sql);
	if(!$query) {
		header('Location: listar_clientes.php?erro=1&msg=' . mysqli_error($con));
	} else {
		header('Location: listar_clientes.php?ok=3&id=' . $id);
	}

	mysqli_close($con);
?>