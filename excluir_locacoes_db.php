<?php
	include('validar.php');
	include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Locadora - Excluir Locações</title>
	</head>
	<body>
		<?php
			include('menu.php');
		
			$id = $_GET['id'];
			
			$sql = "DELETE FROM locacao_item WHERE id_locacao = '{$id}'";
			$query = mysqli_query($con, $sql);
			
			$sql = "DELETE FROM locacao WHERE id = '{$id}'";
			$query = mysqli_query($con, $sql);
			if(!$query) {
				echo 'Erro no banco: ' . mysqli_error($con);
			} else {
				echo 'Locação excluida com sucesso! Locação código: ' . $id;
			}
		?>
	</body>
</html>
<?php
	mysqli_close($con);
?>