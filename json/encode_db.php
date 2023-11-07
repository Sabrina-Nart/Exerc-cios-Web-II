<?php
	include('../conexao.php');
	
	//Retornar apenas 1 tabela
	//$sql = "SELECT * FROM cliente";
	//$query = mysqli_query($con, $sql);
	//while($arr = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	//	$dados[] = $arr;
	//}
	//echo json_encode($dados);
	
	//Retornar com vinculo de dependentes
	$sql = "SELECT * FROM cliente";
	$query = mysqli_query($con, $sql);
	$i = 0;
	while($arr = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
		$dados[$i] = $arr;
		
		$sql = "SELECT * FROM cliente_dependente WHERE id_cliente = '{$arr['id']}'";
		
		$query_sub = mysqli_query($con, $sql);
		while($arr_sub = mysqli_fetch_array($query_sub, MYSQLI_ASSOC)) {
			$dados[$i]['dependentes'][] = $arr_sub;
		}
		
		$i++;
	}
	echo json_encode($dados);
	
	mysqli_close($con);
?>







