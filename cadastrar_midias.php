<?php
	include('validar.php');
	include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Locadora - Cadastrar Mídias</title>
	</head>
	<body>
<?php
	include('menu.php');
?>
		<form action="cadastrar_midias_db.php" method="post" enctype="multipart/form-data">
			<label for="id_distribuidor">Distribuidor</label><br>
			<select name="id_distribuidor" id="id_distribuidor">
				<?php
					$sql = "SELECT id, razao_social FROM distribuidor WHERE status ='A'";
					$query = mysqli_query($con, $sql);
					if($query) {
						while ($arr = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
				?>
				<option value="<?php echo $arr['id']; ?>"><?php echo $arr['razao_social']; ?></option>
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
						while ($arr = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
				?>
				<option value="<?php echo $arr['id']; ?>"><?php echo $arr['descricao']; ?></option>
				<?php
						}
					}
				?>
			</select><br><br>
			
			<label for="titulo">Título</label><br>
			<input type="text" name="titulo" id="titulo" maxlength="50"><br><br>
						
			<label for="duracao">Duração</label><br>
			<input type="time" name="duracao" id="duracao"><br><br>
						
			<label for="capa">Capa</label><br>
			<input type="file" name="capa" id="capa"><br><br>
						
			<label for="sinopse">Sinopse</label><br>
			<textarea name="sinopse" id="sinopse"></textarea><br><br>
			
			<label for="status">Status</label><br>
			<select name="status" id="status">
				<option value="A">Ativo</option>
				<option value="I">Inativo</option>
			</select><br><br>
			
			<button type="submit">Cadastrar</button>
		</form>
	</body>
</html>
<?php
	mysqli_close($con);
?>








