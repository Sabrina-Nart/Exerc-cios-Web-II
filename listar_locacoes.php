<?php
	include('validar.php');
	include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Locadora - Listar Midias</title>
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
<a href="cadastrar_locacoes.php">Cadastrar</a> 
<a href="json_locacoes_db.php" target="_blank">JSON</a>
<?php
	$sql = "SELECT l.id, l.data_coleta, l.id_cliente, c.nome
			FROM locacao AS l
			INNER JOIN cliente AS c ON (l.id_cliente = c.id)";
	$query = mysqli_query($con, $sql);
	if(!$query) {
		echo 'Erro no banco: ' . mysqli_error($con);
	} else {
?>
		<table>
			<thead>
				<tr>
					<th>Código</th>
					<th>Data</th>
					<th>Código Cliente</th>
					<th>Nome Cliente</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
<?php
		while($arr = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
?>
				<tr>
					<td><?php echo $arr['id']; ?></td>
					<td><?php echo converterData($arr['data_coleta']); ?></td>
					<td><?php echo $arr['id_cliente']; ?></td>
					<td><?php echo $arr['nome']; ?></td>
					<td>
						<a href="alterar_locacoes.php?id=<?php echo $arr['id']; ?>">Alterar</a>
						
						<a href="excluir_locacoes_db.php?id=<?php echo $arr['id']; ?>">Excluir</a>
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