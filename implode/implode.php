<form action="#" method="post">
	<select name="uf[]" multiple="multiple">
		<option value="PR">PR</option>
		<option value="SC">SC</option>
		<option value="RS">RS</option>
	</select><br><br>
	
	<button type="submit">Enviar</button>
</form>
<?php
	//print_r($_POST['uf']);
	echo implode('|', $_POST['uf']);
?>
<br><br><br><br>