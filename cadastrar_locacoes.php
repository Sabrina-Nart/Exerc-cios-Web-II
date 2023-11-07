<?php
	include('validar.php');
	include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Locadora - Cadastrar Locações</title>
	</head>
	<body>
<?php
	include('menu.php');
?>
		<form action="cadastrar_locacoes.php" method="post">
			<label for="quantidade">Quantidade</label><br>
			<input type="number" name="quantidade" id="quantidade"><br><br>
			
			<button type="submit">Cadastrar</button>
		</form>
		<br><br>
		<form action="cadastrar_locacoes_db.php" method="post">
			<label for="id_cliente">Cliente</label><br>
			<select name="id_cliente" id="id_cliente">
				<?php
					$sql = "SELECT id, nome FROM cliente WHERE status = 'A'";
					$query = mysqli_query($con, $sql);
					if($query) {
						while($arr = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
				?>
				<option value="<?php echo $arr['id']; ?>"><?php echo $arr['nome']; ?></option>
				<?php
						}
					}
				?>
			</select><br><br>
			
			<label for="data_coleta">Data Coleta</label><br>
			<input type="datetime-local" name="data_coleta" id="data_coleta"><br><br>
			
			<label for="data_prevista">Data Prevista</label><br>
			<input type="date" name="data_prevista" id="data_prevista"><br><br>
			
			<label for="data_entrega">Data Entrega</label><br>
			<input type="datetime-local" name="data_entrega" id="data_entrega"><br><br>
			
			<table>
				<thead>
					<tr>
						<th>Filme</th>
					</tr>
				</thead>
				<tbody>
			<?php
				$quantidade = @$_POST['quantidade'];
				if($quantidade > 0) {
					for($i = 0; $i < $quantidade; $i++) {
			?>
					<tr>
						<td>
							<select name="id_midia[]">
								<?php
									$sql = "SELECT id, titulo FROM midia WHERE status = 'A'";
									$query = mysqli_query($con, $sql);
									if($query) {
										while($arr = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
								?>
								<option value="<?php echo $arr['id']; ?>"><?php echo $arr['titulo']; ?></option>
								<?php
										}
									}
								?>
							</select>
						</td>
					</tr>
			<?php
					}
				}
			?>
				</tbody>
			</table><br><br>
			
			<button type="submit">Cadastrar</button>
		</form>
	</body>
</html>
<?php
	mysqli_close($con);
?>








