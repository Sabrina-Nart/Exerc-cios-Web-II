<?php
	include('validar.php');
	include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Locadora - Listar Cliente Dependentes</title>
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
<a href="cadastrar_cliente_dependentes.php">Cadastrar</a> 
<a href="json_cliente_dependentes_db.php" target="_blank">JSON</a>
<?php
	$sql = "SELECT cd.id, cd.nome, cd.cpf, cd.id_cliente, c.nome AS nome_cliente
			FROM cliente_dependente AS cd
			INNER JOIN cliente AS c ON (cd.id_cliente = c.id)";
	$query = mysqli_query($con, $sql);
	if(!$query) {
		echo 'Erro no banco: ' . mysqli_error($con);
	} else {
?>
		<table>
			<thead>
				<tr>
					<th>Código</th>
					<th>Nome</th>
					<th>CPF</th>
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
					<td><?php echo $arr['nome']; ?></td>
					<td><?php echo $arr['cpf']; ?></td>
					<td><?php echo $arr['id_cliente']; ?></td>
					<td><?php echo $arr['nome_cliente']; ?></td>
					<td>
						<a href="alterar_cliente_dependentes.php?id=<?php echo $arr['id']; ?>">Alterar</a>
						
						<a href="excluir_cliente_dependentes_db.php?id=<?php echo $arr['id']; ?>">Excluir</a>
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