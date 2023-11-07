<?php
	include('validar.php');
	include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Locadora - Excluir Itens da Locação</title>
	</head>
	<body>
		<?php
			include('menu.php');
		
			$id_midia   = $_GET['id_midia'];
			$id_locacao = $_GET['id_locacao'];
			
			$sql = "DELETE FROM locacao_item WHERE id_midia = '{$id_midia}' AND id_locacao = '{$id_locacao}'";
			$query = mysqli_query($con, $sql);
			if(!$query) {
				echo 'Erro no banco: ' . mysqli_error($con);
			} else {
				echo 'Item da locação excluido com sucesso!';
			}
		?>
		<br><a href="alterar_locacoes.php?id=<?php echo $id_locacao; ?>">Voltar para locação</a>
	</body>
</html>
<?php
	mysqli_close($con);
?>