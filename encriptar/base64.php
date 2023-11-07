<?php
	$texto = 'Faculdades ESUCRI';
	$base64 = base64_encode($texto);
	echo $base64;
	
	echo '<br>';
	
	$texto_retorno = base64_decode('RmFjdWxkYWRlcyBFU1VDUkk=');
	echo $texto_retorno;
?>