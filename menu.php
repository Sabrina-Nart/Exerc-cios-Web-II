<style type="text/css">
	.menu {
		list-style-type: none;
	}
	.menu li {
		float: left;
		padding: 2px 5px;
	}
	.quebrar {
		clear: left;
	}
</style>
Olá <?php echo $_SESSION['usuario']['nome']; ?>,
<ul class="menu">
	<li><a href="painel.php">Home</a></li>
	<li><a href="listar_clientes.php">Clientes</a></li>
	<li><a href="listar_cliente_dependentes.php">Dependentes</a></li>
	<li><a href="listar_distribuidores.php">Distribuidores</a></li>
	<li><a href="listar_tipos.php">Tipos</a></li>
	<li><a href="listar_midias.php">Mídias</a></li>
	<li><a href="listar_locacoes.php">Locações</a></li>
	<li><a href="listar_usuarios.php">Usuários</a></li>
	<li><a href="logout.php">Logout</a></li>
</ul>
<div class="quebrar"></div>