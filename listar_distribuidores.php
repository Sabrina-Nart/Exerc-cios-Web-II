<?php
	include('validar.php');
	include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Locadora - Listar Distribuidores</title>
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
<a href="cadastrar_distribuidores.php">Cadastrar</a> 
<a href="json_distribuidores_db.php" target="_blank">JSON</a>
<?php
	$sql = "SELECT id, razao_social, cnpj FROM distribuidor";
	$query = mysqli_query($con, $sql);
	if(!$query) {
		echo 'Erro no banco: ' . mysqli_error($con);
	} else {
?>
		<table>
			<thead>
				<tr>
					<th>Código</th>
					<th>Razão Social</th>
					<th>CNPJ</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
<?php
		while($arr = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
?>
				<tr>
					<td><?php echo $arr['id']; ?></td>
					<td><?php echo $arr['razao_social']; ?></td>
					<td><?php echo $arr['cnpj']; ?></td>
					<td>
						<a href="alterar_distribuidores.php?id=<?php echo $arr['id']; ?>">Alterar</a>
						
						<a href="excluir_distribuidores_db.php?id=<?php echo $arr['id']; ?>">Excluir</a>
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