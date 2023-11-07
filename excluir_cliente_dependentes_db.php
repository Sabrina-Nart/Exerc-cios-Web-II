<?php
	include('validar.php');
	include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Locadora - Excluir Cliente Dependentes</title>
	</head>
	<body>
		<?php
			include('menu.php');
		
			$id = $_GET['id'];
			
			$sql = "DELETE FROM cliente_dependente WHERE id = '{$id}'";
			$query = mysqli_query($con, $sql);
			if(!$query) {
				echo 'Erro no banco: ' . mysqli_error($con);
			} else {
				echo 'Dependente excluido com sucesso! Dependente código: ' . $id;
			}
		?>
	</body>
</html>
<?php
	mysqli_close($con);
?>