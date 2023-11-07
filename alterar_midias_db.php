<?php
	include('validar.php');
	include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Locadora - Alterar Mídias</title>
	</head>
	<body>
		<?php
			include('menu.php');
		
			$id              = $_POST['id'];
			$id_distribuidor = $_POST['id_distribuidor'];
			$id_tipo         = $_POST['id_tipo'];
			$titulo          = $_POST['titulo'];
			$duracao         = $_POST['duracao'];
			$capa            = $_FILES['capa']['name'];
			$tmp_capa        = $_FILES['capa']['tmp_name'];
			$sinopse         = $_POST['sinopse'];
			$status          = $_POST['status'];
			
			$sql_capa = '';
			if($capa) {
				move_uploaded_file($tmp_capa, 'capas/' . $capa);
				$sql_capa = ", capa = '{$capa}'";
			}
			
			$sql = "UPDATE midia SET id_distribuidor = '{$id_distribuidor}', id_tipo = '{$id_tipo}', titulo = '{$titulo}', duracao = '{$duracao}' {$sql_capa}, sinopse = '{$sinopse}', status = '{$status}' WHERE id = '{$id}'";
			$query = mysqli_query($con, $sql);
			if(!$query) {
				echo 'Erro no banco: ' . mysqli_error($con);
			} else {
				echo 'Mídia alterada com sucesso! Mídia código: ' . $id;
			}
		?>
	</body>
</html>
<?php
	mysqli_close($con);
?>