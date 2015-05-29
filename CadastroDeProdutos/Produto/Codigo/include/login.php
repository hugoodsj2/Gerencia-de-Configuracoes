<?php 
include("conexao.php");
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	// Disparar a consulta
	$sql = "SELECT CODIGO, LOGIN, NOMEUSUARIO, SENHA FROM usuario WHERE LOGIN = '$login' AND SENHA = '$senha'";
	$result = mysqli_query($conn, $sql);
	session_start();
	// Listar os dados da tabela
	if (mysqli_num_rows($result) > 0){ // Verifica se existem registros
		 // Inicia sessao.
		// Percorre dados de retorno da consulta SQL
		echo"LOGIN OK <br>";
		$_SESSION["LOGADO"] = 1;
		$_SESSION["NOMELOG"] = mysqli_fetch_assoc($result)["LOGIN"];
		header("location:../index.php");
	}
	else{
		$_SESSION["LOGADO"] = 0;
		$_SESSION["NOMELOG"] = "";
		echo"LOGIN NÃO OK.";
		header("location:../login.php?mens=LOGIN NÃO OK!");
	}
	// Fechar conexão
	mysqli_close($conn);
?>
