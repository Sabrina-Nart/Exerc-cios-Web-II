<?php
	include('validar.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Locadora - Cadastrar Tipos</title>
	</head>
	<body>
<?php
	include('menu.php');
?>
		<form action="cadastrar_tipos_db.php" method="post">
			<label for="descricao">Descrição</label><br>
			<input type="text" name="descricao" id="descricao" maxlength="50"><br><br>
						
			<label for="valor">Valor</label><br>
			<input type="text" name="valor" id="valor" maxlength="10"><br><br>
			
			<label for="status">Status</label><br>
			<select name="status" id="status">
				<option value="A">Ativo</option>
				<option value="I">Inativo</option>
			</select><br><br>
			
			<button type="submit">Cadastrar</button>
		</form>
	</body>
</html>









