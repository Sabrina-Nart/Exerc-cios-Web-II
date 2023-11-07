<?php
	include('conexao.php');
	
	$sql = "SELECT * FROM locacao";
	$query = mysqli_query($con, $sql);
	$i = 0;
	while($arr = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
		$dados[$i] = $arr;
		
		$sql = "SELECT * FROM locacao_item WHERE id_locacao = '{$arr['id']}'";
		$query_sub = mysqli_query($con, $sql);
		while($arr_sub = mysqli_fetch_array($query_sub, MYSQLI_ASSOC)) {
			$dados[$i]['itens'][] = $arr_sub;
		}
		
		$i++;
	}
	
	echo json_encode($dados);
	
	mysqli_close($con);
?>