<!DOCTYPE html>
<?php
	session_start();
	if(!(isset($_SESSION["LOGADO"]) && $_SESSION["LOGADO"] == 1)){
		header("location:../login.php?mens=Favor fazer login para utilizar o sistema!");
	}
?>
<html>
	<title>Informações do SISCOP</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<script src="scripts/ajuda.js"></script>
	<script src="scripts/cadastro.js"></script>
	<script src="scripts/filtro.js"></script>
	<script src="scripts/index.js"></script>
	<script src="scripts/login.js"></script>
	<script src="scripts/utils.js"></script>	
<head>
</head>
<body>
		<header>
		<img id="imgLogoLogin" src="images/Git-Icon-Black.png" width="80px" height="80px">
		<div class="tituloPagina">
		<div class="formatoTitulo">Sistema de Cadastro SISCOP - Bem-Vindo: <?php echo $_SESSION["NOMELOG"] ?>!</div>
		</div>
		
		<nav id="menuIcicial">
			<a href="index.php">LISTAGEM</a>
			<a href="relatorio.php">RELATÓRIO</a>
			<a href="ajuda.php">AJUDA</a>
			<a onclick="Sair()">SAIR</a>		
		</nav>
	</header> <br>
