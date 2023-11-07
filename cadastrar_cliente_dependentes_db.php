<?php
	include('validar.php');
	include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Locadora - Cadastrar Dependentes</title>
	</head>
	<body>
		<?php
			include('menu.php');
		
			$id_cliente = $_POST['id_cliente'];
			$nome       = $_POST['nome'];
			$cpf        = $_POST['cpf'];
			$status     = $_POST['status'];
			
			$sql = "INSERT INTO cliente_dependente VALUES (null, '{$id_cliente}', '{$nome}', '{$cpf}', '{$status}')";
			$query = mysqli_query($con, $sql);
			if(!$query) {
				echo 'Erro no banco: ' . mysqli_error($con);
			} else {
				echo 'Dependente cadastrado com sucesso! Novo dependente código: ' . mysqli_insert_id($con);
			}
		?>
	</body>
</html>
<?php
	mysqli_close($con);
?>