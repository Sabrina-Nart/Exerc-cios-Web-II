<?php
	include('validar.php');
	include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Locadora - Alterar Dependentes</title>
	</head>
	<body>
		<?php
			include('menu.php');
		
			$id         = $_POST['id'];
			$id_cliente = $_POST['id_cliente'];
			$nome       = $_POST['nome'];
			$cpf        = $_POST['cpf'];
			$status     = $_POST['status'];
			
			$sql = "UPDATE cliente_dependente SET id_cliente = '{$id_cliente}', nome = '{$nome}', cpf = '{$cpf}', status = '{$status}' WHERE id = '{$id}'";
			$query = mysqli_query($con, $sql);
			if(!$query) {
				echo 'Erro no banco: ' . mysqli_error($con);
			} else {
				echo 'Dependente alterado com sucesso! Dependente código: ' . $id;
			}
		?>
	</body>
</html>
<?php
	mysqli_close($con);
?>