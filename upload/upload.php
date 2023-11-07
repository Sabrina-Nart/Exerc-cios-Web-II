<?php
	echo $_POST['nome'].'<br>';
	//echo $_POST['arquivo'];
	
	//Criar na mesma pasta
	//move_uploaded_file($_FILES['arquivo']['tmp_name'], $_FILES['arquivo']['name']);
	
	//Criar numa pasta a baixo
	//move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arq/' . $_FILES['arquivo']['name']);
	
	//criar em uma pasta a cima
	move_uploaded_file($_FILES['arquivo']['tmp_name'], '../capas/' . $_FILES['arquivo']['name']);
?>
<pre>
<?php
	print_r($_FILES);
?>
</pre>