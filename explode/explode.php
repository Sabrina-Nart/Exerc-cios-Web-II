<?php
	$uf = 'PR|SC|RS';
	$dados = explode('|', $uf);
?>
<select name="estado">
	<?php foreach($dados as $item) { ?>
		<option value="<?php echo $item; ?>"><?php echo $item; ?></option>
	<?php } ?>
</select>