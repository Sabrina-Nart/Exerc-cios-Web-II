<?php
	include('validar.php');
	include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Locadora - Excluir Distribuidores</title>
	</head>
	<body>
		<?php
			include('menu.php');
		
			$id = $_GET['id'];
			
			$sql = "DELETE FROM tipo WHERE id = '{$id}'";
			$query = mysqli_query($con, $sql);
			if(!$query) {
				echo 'Erro no banco: ' . mysqli_error($con);
			} else {
				echo 'Distribuidor excluido com sucesso! Distribuidor código: ' . $id;
			}
		?>
	</body>
</html>
<?php
	mysqli_close($con);
?>