<?php
	session_start();
	include('conexao.php');
	
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$senha = md5(mysqli_real_escape_string($con, $_POST['senha']));
	
	$sql = "SELECT id, nome FROM usuario WHERE email = '{$email}' AND senha = '{$senha}' AND status = 'A'";
	
	$query = mysqli_query($con, $sql);
	if(!$query) {
		header('Location: index.php?erro=1&msg=' . mysqli_error($con));
	} else {
		if(mysqli_num_rows($query) > 0) {
			$arr = mysqli_fetch_array($query, MYSQLI_ASSOC);
			$_SESSION['usuario'] = $arr;
			header('Location: painel.php');
		} else {
			header('Location: index.php?erro=2');
		}
	}
	
	mysqli_close($con);
?>