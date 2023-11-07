<?php
	include('validar.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Locadora - Importar Tipos</title>
	</head>
	<body>
<?php
	include('menu.php');
?>
		<form action="importar_tipos_db.php" method="post">
			<label for="json">JSON</label><br>
			<textarea name="json" id="json"></textarea><br><br>
			
			<button type="submit">Importar</button>
		</form>
	</body>
</html>









