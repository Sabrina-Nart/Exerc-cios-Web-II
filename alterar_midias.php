<?php
	include('validar.php');
	include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Locadora - Alterar Mídias</title>
		<style type="text/css" rel="stylesheet">
			.capa {
				height: 100px;
			}
		</style>
	</head>
	<body>
<?php
	include('menu.php');
	$id = $_GET['id'];
	$sql = "SELECT * FROM midia WHERE id = '{$id}'";
	$query = mysqli_query($con, $sql);
	$arr = mysqli_fetch_array($query, MYSQLI_ASSOC);
?>
		<form action="alterar_midias_db.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			
			<label>Código</label><br>
			<?php echo $id; ?><br><br>
			
			<label for="id_distribuidor">Distribuidor</label><br>
			<select name="id_distribuidor" id="id_distribuidor">
				<?php
					$sql = "SELECT id, razao_social FROM distribuidor WHERE status ='A'";
					$query = mysqli_query($con, $sql);
					if($query) {
						while ($arr2 = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
				?>
				<option value="<?php echo $arr2['id']; ?>"<?php if($arr['id_distribuidor'] == $arr2['id']) { ?> selected="selected"<?php } ?>><?php echo $arr2['razao_social']; ?></option>
				<?php
						}
					}
				?>
			</select><br><br>
			
			<label for="id_tipo">Tipo</label><br>
			<select name="id_tipo" id="id_tipo">
				<?php
					$sql = "SELECT id, descricao FROM tipo WHERE status ='A'";
					$query = mysqli_query($con, $sql);
					if($query) {
						while ($arr2 = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
				?>
				<option value="<?php echo $arr2['id']; ?>"<?php if($arr['id_tipo'] == $arr2['id']) { ?> selected="selected"<?php } ?>><?php echo $arr2['descricao']; ?></option>
				<?php
						}
					}
				?>
			</select><br><br>
			
			<label for="titulo">Título</label><br>
			<input type="text" name="titulo" id="titulo" value="<?php echo $arr['titulo']; ?>" maxlength="50"><br><br>
						
			<label for="duracao">Duração</label><br>
			<input type="time" name="duracao" id="duracao" value="<?php echo $arr['duracao']; ?>"><br><br>
						
			<label for="capa">Capa</label><br>
			<input type="file" name="capa" id="capa"><br>
			<?php if($arr['capa']) { ?>
			<img class="capa" src="capas/<?php echo $arr['capa']; ?>" alt="<?php echo $arr['titulo']; ?>">
			<?php } ?><br><br>
						
			<label for="sinopse">Sinopse</label><br>
			<textarea name="sinopse" id="sinopse"><?php echo $arr['sinopse']; ?></textarea><br><br>
			
			<label for="status">Status</label><br>
			<select name="status" id="status">
				<option value="A"<?php if($arr['status'] == 'A') { ?> selected="selected"<?php } ?>>Ativo</option>
				<option value="I"<?php if($arr['status'] == 'I') { ?> selected="selected"<?php } ?>>Inativo</option>
			</select><br><br>
			
			<button type="submit">Alterar</button>
		</form>
	</body>
</html>
<?php
	mysqli_close($con);
?>








