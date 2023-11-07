<?php
	include('validar.php');
	include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Locadora - Cadastrar Mídias</title>
	</head>
	<body>
		<?php
			include('menu.php');
		
			$id_distribuidor = $_POST['id_distribuidor'];
			$id_tipo         = $_POST['id_tipo'];
			$titulo          = $_POST['titulo'];
			$duracao         = $_POST['duracao'];
			$capa            = $_FILES['capa']['name'];
			$tmp_capa        = $_FILES['capa']['tmp_name'];
			$sinopse         = $_POST['sinopse'];
			$status          = $_POST['status'];
			
			move_uploaded_file($tmp_capa, 'capas/' . $capa);
			
			$sql = "INSERT INTO midia VALUES (null, '{$id_distribuidor}', '{$id_tipo}', '{$titulo}', '{$duracao}', '{$capa}', '{$sinopse}', '{$status}')";
			$query = mysqli_query($con, $sql);
			if(!$query) {
				echo 'Erro no banco: ' . mysqli_error($con);
			} else {
				echo 'Mídia cadastrado com sucesso! Novo mídia código: ' . mysqli_insert_id($con);
			}
		?>
	</body>
</html>
<?php
	mysqli_close($con);
?>