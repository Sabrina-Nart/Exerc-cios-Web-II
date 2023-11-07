<?php
	//$dados = array('nome' => 'Cristiano', 
	//				'idade' => 40, 
	//				'cidade' => 'Criciúma');
	//echo json_encode($dados);
	
	//$dados[] = array('nome' => 'Cristiano', 
	//				'idade' => 40, 
	//				'cidade' => 'Criciúma');
	//$dados[] = array('nome' => 'Arildo', 
	//				'idade' => 70, 
	//				'cidade' => 'Içara');
	//echo json_encode($dados);
	
	//$dados = array('nome' => 'Cristiano', 
	//				'idade' => 40, 
	//				'cidade' => 'Criciúma',
	//				'dependentes' => array(
	//					array('nome' => 'Flavia'),
	//					array('nome' => 'Alberto')
	//				)
	//		 );
	//echo json_encode($dados);
	
	$dados = array('nome' => 'Cristiano', 
					'idade' => 40, 
					'endereco' => array(
						'cidade' => 'Criciúma',
						'bairro' => 'Centro',
						'cep' => '88811-250'
					)
			 );
	echo json_encode($dados);
?>








