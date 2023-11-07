<?php
	include('validar.php');
	include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Locadora - Cadastrar Dependentes</title>
	</head>
	<body>
<?php
	include('menu.php');
?>
		<form action="cadastrar_cliente_dependentes_db.php" method="post">
			<label for="id_cliente">Cliente</label><br>
			<select name="id_cliente" id="id_cliente">
				<?php
					$sql = "SELECT id, nome FROM cliente WHERE status = 'A'";
					$query = mysqli_query($con, $sql);
					if($query) {
						while($arr = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
				?>
				<option value="<?php echo $arr['id']; ?>"><?php echo $arr['nome']; ?></option>
				<?php
						}
					}
				?>
			</select><br><br>
			
			<label for="nome">Nome</label><br>
			<input type="text" name="nome" id="nome" maxlength="50"><br><br>
						
			<label for="cpf">CPF</label><br>
			<input type="text" name="cpf" id="cpf" maxlength="11"><br><br>
			
			<label for="status">Status</label><br>
			<select name="status" id="status">
				<option value="A">Ativo</option>
				<option value="I">Inativo</option>
			</select><br><br>
			
			<button type="submit">Cadastrar</button>
		</form>
	</body>
</html>
<?php
	mysqli_close($con);
?>








