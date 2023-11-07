<?php
	include('validar.php');
	include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Locadora - Cadastrar Distribuidores</title>
	</head>
	<body>
		<?php
			include('menu.php');
		
			$razao_social = $_POST['razao_social'];
			$endereco     = $_POST['endereco'];
			$telefone     = $_POST['telefone'];
			$cnpj         = $_POST['cnpj'];
			$status       = $_POST['status'];
			
			$sql = "INSERT INTO distribuidor VALUES (null, '{$razao_social}', '{$endereco}', '{$telefone}', '{$cnpj}', '{$status}')";
			$query = mysqli_query($con, $sql);
			if(!$query) {
				echo 'Erro no banco: ' . mysqli_error($con);
			} else {
				echo 'Distribuidor cadastrado com sucesso! Novo distribuidor código: ' . mysqli_insert_id($con);
			}
		?>
	</body>
</html>
<?php
	mysqli_close($con);
?>