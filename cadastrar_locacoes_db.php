<?php
	include('validar.php');
	include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Locadora - Cadastrar Locações</title>
	</head>
	<body>
		<?php
			include('menu.php');
			
			$id_cliente    = $_POST['id_cliente'];
			$data_coleta   = $_POST['data_coleta'];
			$data_prevista = $_POST['data_prevista'];
			$data_entrega  = $_POST['data_entrega'];
			
			$sql = "INSERT INTO locacao VALUES (null, '{$id_cliente}', '{$data_coleta}', '{$data_prevista}', '{$data_entrega}')";
			$query = mysqli_query($con, $sql);
			if(!$query) {
				echo 'Erro no banco: ' . mysqli_error($con);
			} else {
				$id_locacao = mysqli_insert_id($con);
				
				foreach($_POST['id_midia'] as $id_midia) {
					$sql = "INSERT INTO locacao_item VALUES ('{$id_locacao}', '{$id_midia}')";
					$query = mysqli_query($con, $sql);
				}
				
				if(!$query) {
					echo 'Erro no banco: ' . mysqli_error($con);
				} else {
					echo 'Locação cadastrado com sucesso! Nova locação código: ' . $id_locacao;
				}
			}
		?>
	</body>
</html>
<?php
	mysqli_close($con);
?>