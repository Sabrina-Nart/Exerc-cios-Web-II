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
			.capa {
				height: 100px;
			}
		</style>
	</head>
	<body>
<?php
	include('menu.php');
?>
<a href="cadastrar_midias.php">Cadastrar</a> 
<a href="json_midias_db.php" target="_blank">JSON</a>
<?php
	$sql = "SELECT m.id, m.titulo, m.capa, m.id_tipo, m.id_distribuidor, t.descricao, d.razao_social
			FROM midia AS m
			INNER JOIN tipo AS t ON (m.id_tipo = t.id)
			INNER JOIN distribuidor AS d ON (m.id_distribuidor = d.id)";
	$query = mysqli_query($con, $sql);
	if(!$query) {
		echo 'Erro no banco: ' . mysqli_error($con);
	} else {
?>
		<table>
			<thead>
				<tr>
					<th>Código</th>
					<th>Título</th>
					<th>Capa</th>
					<th>Código Tipo</th>
					<th>Descrição Tipo</th>
					<th>Código Distribuidor</th>
					<th>Razão Social Distribuidor</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
<?php
		while($arr = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
?>
				<tr>
					<td><?php echo $arr['id']; ?></td>
					<td><?php echo $arr['titulo']; ?></td>
					<td><img class="capa" src="capas/<?php echo $arr['capa']; ?>" alt="<?php echo $arr['titulo']; ?>"></td>
					<td><?php echo $arr['id_tipo']; ?></td>
					<td><?php echo $arr['descricao']; ?></td>
					<td><?php echo $arr['id_distribuidor']; ?></td>
					<td><?php echo $arr['razao_social']; ?></td>
					<td>
						<a href="alterar_midias.php?id=<?php echo $arr['id']; ?>">Alterar</a>
						
						<a href="excluir_midias_db.php?id=<?php echo $arr['id']; ?>">Excluir</a>
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