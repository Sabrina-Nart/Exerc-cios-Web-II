<?php
	include('validar.php');
	include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Locadora - Cadastrar Tipos</title>
	</head>
	<body>
		<?php
			include('menu.php');
		
			$descricao = $_POST['descricao'];
			$valor     = $_POST['valor'];
			$status    = $_POST['status'];
			
			$sql = "INSERT INTO tipo VALUES (null, '{$descricao}', '{$valor}', '{$status}')";
			$query = mysqli_query($con, $sql);
			if(!$query) {
				echo 'Erro no banco: ' . mysqli_error($con);
			} else {
				echo 'Tipo cadastrado com sucesso! Novo tipo código: ' . mysqli_insert_id($con);
			}
		?>
	</body>
</html>
<?php
	mysqli_close($con);
?>