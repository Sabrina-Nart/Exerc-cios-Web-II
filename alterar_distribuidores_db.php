<?php
	include('validar.php');
	include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Locadora - Alterar Distribuidores</title>
	</head>
	<body>
		<?php
			include('menu.php');
		
			$id           = $_POST['id'];
			$razao_social = $_POST['razao_social'];
			$endereco     = $_POST['endereco'];
			$telefone     = $_POST['telefone'];
			$cnpj         = $_POST['cnpj'];
			$status       = $_POST['status'];
			
			$sql = "UPDATE distribuidor SET razao_social = '{$razao_social}', endereco = '{$endereco}', telefone = '{$telefone}', cnpj = '{$cnpj}', status = '{$status}' WHERE id = '{$id}'";
			$query = mysqli_query($con, $sql);
			if(!$query) {
				echo 'Erro no banco: ' . mysqli_error($con);
			} else {
				echo 'Distribuidor alterado com sucesso! Distribuidor código: ' . $id;
			}
		?>
	</body>
</html>
<?php
	mysqli_close($con);
?>