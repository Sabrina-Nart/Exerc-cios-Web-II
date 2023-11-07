<?php
	include('validar.php');
	include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Locadora - Listar Tipos</title>
		<style type="text/css" rel="stylesheet">
			table {
				border-collapse: collapse;
			}
			th, td {
				border: 1px solid black;
			}
		</style>
	</head>
	<body>
<?php
	include('menu.php');
?>
<a href="cadastrar_tipos.php">Cadastrar</a> 
<a href="json_tipos_db.php" target="_blank">JSON</a> 
<a href="importar_tipos.php">Importar</a>
<?php
	$sql = "SELECT id, descricao, valor FROM tipo";
	$query = mysqli_query($con, $sql);
	if(!$query) {
		echo 'Erro no banco: ' . mysqli_error($con);
	} else {
?>
		<table>
			<thead>
				<tr>
					<th>Código</th>
					<th>Descrição</th>
					<th>Valor</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
<?php
		while($arr = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
?>
				<tr>
					<td><?php echo $arr['id']; ?></td>
					<td><?php echo $arr['descricao']; ?></td>
					<td><?php echo $arr['valor']; ?></td>
					<td>
						<a href="alterar_tipos.php?id=<?php echo $arr['id']; ?>">Alterar</a>
						
						<a href="excluir_tipos_db.php?id=<?php echo $arr['id']; ?>">Excluir</a>
					</td>
				</tr>
<?php
		}
?>
			</tbody>
		</table>
		Total: <?php echo mysqli_num_rows($query); ?> item(s)
<?php
	}
?>
	</body>
</html>
<?php
	mysqli_close($con);
?>