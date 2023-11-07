<?php
	include('validar.php');
	include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Locadora - Alterar Dependentes</title>
	</head>
	<body>
<?php
	include('menu.php');
	$id = $_GET['id'];
	$sql = "SELECT * FROM cliente_dependente WHERE id = '{$id}'";
	$query = mysqli_query($con, $sql);
	$arr = mysqli_fetch_array($query, MYSQLI_ASSOC);
?>
		<form action="alterar_cliente_dependentes_db.php" method="post">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			
			<label>Código</label><br>
			<?php echo $id; ?><br><br>
			
			<label for="id_cliente">Cliente</label><br>
			<select name="id_cliente" id="id_cliente">
				<?php
					$sql = "SELECT id, nome FROM cliente WHERE status = 'A'";
					$query = mysqli_query($con, $sql);
					if($query) {
						while($arr2 = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
				?>
				<option value="<?php echo $arr2['id']; ?>"<?php if($arr['id_cliente'] == $arr2['id']) { ?> selected="selected"<?php } ?>><?php echo $arr2['nome']; ?></option>
				<?php
						}
					}
				?>
			</select><br><br>
			
			<label for="nome">Nome</label><br>
			<input type="text" name="nome" id="nome" value="<?php echo $arr['nome']; ?>" maxlength="50"><br><br>
						
			<label for="cpf">CPF</label><br>
			<input type="text" name="cpf" id="cpf" value="<?php echo $arr['cpf']; ?>"  maxlength="11"><br><br>
			
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








