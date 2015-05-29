<?php
    session_start();
    $_SESSION["LOGADO"] = 0;
    $_SESSION["NOMELOG"] = "";
    $root = getcwd();    
?>
<!DOCTYPE html>
<html>
	<head>
        <title>Login - Sistema de Cadastro SISCOP</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="description" content="Sistema utilizado para cadastro de produtos">
		<meta name="keywords" content="cadastro,produto,cadastro de produtos,produtos">
		<meta name="author" content="Hugo,Sara,Barbara,Rodrigo">		
		<script src="scripts/login.js"></script>
		<link rel="stylesheet" type="text/css" href="styles/style.css">
    </head>
	<body>
<header>
		<img id="imgLogoLogin" src="images/Git-Icon-Black.png" width="80px" height="80px">
		<div class="tituloPagina">
		<div class="formatoTitulo">Sistema de Cadastro SISCOP</div>
		</div>
		<div id="corpoLogin">
			<form id="formLogin" name="formLogin" method="post" action="include/login.php">
				<div class="div_left">
					<label for="txt_usuario">Usuario:</label><br>
					<input type="text" id="txt_usuario" name="login" class="inputtext" maxlength="10" /><br>
					<label for="txt_senha">Senha:</label><br>
					<input type="password" id="txt_senha" name="senha" class="inputtext" maxlength="10" /> <br><br>
					<input type="submit" name="enviar" id="btn_login" class="myButton" onclick="ValidarLogin()" value="Entrar" />
				</div>
				<div>
					<img id="imgLogoLogin" src="images/Git-Icon-Black.png" width="140px" height="140px">
				</div>
			</form>
		</div>
<?php include ''.$root.'/include/footer.php'; ?>
