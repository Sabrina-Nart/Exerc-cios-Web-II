<?php
	include('validar.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Locadora - Cadastrar Distribuidores</title>
	</head>
	<body>
<?php
	include('menu.php');
?>
		<form action="cadastrar_distribuidores_db.php" method="post">
			<label for="razao_social">Razão Social</label><br>
			<input type="text" name="razao_social" id="razao_social" maxlength="50"><br><br>
			
			<label for="endereco">Endereço</label><br>
			<input type="text" name="endereco" id="endereco" maxlength="100"><br><br>
			
			<label for="telefone">Telefone</label><br>
			<input type="text" name="telefone" id="telefone" maxlength="11"><br><br>
			
			<label for="cnpj">CNPJ</label><br>
			<input type="text" name="cnpj" id="cnpj" maxlength="14"><br><br>
			
			<label for="status">Status</label><br>
			<select name="status" id="status">
				<option value="A">Ativo</option>
				<option value="I">Inativo</option>
			</select><br><br>
			
			<button type="submit">Cadastrar</button>
		</form>
	</body>
</html>









