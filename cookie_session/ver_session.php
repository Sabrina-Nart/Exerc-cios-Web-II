<?php
	session_start();
	echo $_SESSION['faculdade'];
	
	echo '<pre>';
	print_r($_SESSION['carrinho']);
	echo '</pre>';
?>