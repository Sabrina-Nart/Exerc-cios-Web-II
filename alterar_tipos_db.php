<?php
	include('validar.php');
	include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Locadora - Alterar Tipos</title>
	</head>
	<body>
		<?php
			include('menu.php');
		
			$id        = $_POST['id'];
			$descricao = $_POST['descricao'];
			$valor     = $_POST['valor'];
			$status    = $_POST['status'];
			
			$sql = "UPDATE tipo SET descricao = '{$descricao}', valor = '{$valor}', status = '{$status}' WHERE id = '{$id}'";
			$query = mysqli_query($con, $sql);
			if(!$query) {
				echo 'Erro no banco: ' . mysqli_error($con);
			} else {
				echo 'Tipo alterado com sucesso! Tipo código: ' . $id;
			}
		?>
	</body>
</html>
<?php
	mysqli_close($con);
?>