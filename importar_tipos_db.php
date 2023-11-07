<?php
	include('validar.php');
	include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Locadora - Importar Tipos</title>
	</head>
	<body>
		<?php
			include('menu.php');
		
			$json = $_POST['json'];
			$dados = json_decode($json, true);
			
			foreach($dados as $item) {
				$sql = "SELECT id FROM tipo WHERE id = '{$item['id']}'";
				
				$query = mysqli_query($con, $sql);
								
				$id        = $item['id'];
				$descricao = $item['descricao'];
				$valor     = $item['valor'];
				$status    = $item['status'];
				
				if(mysqli_num_rows($query) > 0) {
					$sql = "UPDATE tipo SET descricao = '{$descricao}', valor = '{$valor}', status = '{$status}' WHERE id = '{$id}'";
				} else {
					$sql = "INSERT INTO tipo VALUES ('{$id}', '{$descricao}', '{$valor}', '{$status}')";
				}
				
				$query = mysqli_query($con, $sql);
			}
			
			if(!$query) {
				echo 'Erro no banco: ' . mysqli_error($con);
			} else {
				echo 'Tipos importados com sucesso!';
			}
		?>
	</body>
</html>
<?php
	mysqli_close($con);
?>