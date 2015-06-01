<?php 
include("conexao.php");
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	// Disparar a consulta
	$sql = "SELECT CODIGO, LOGIN, NOMEUSUARIO, SENHA FROM usuario WHERE LOGIN = '$login' AND SENHA = '$senha'";
	$result = mysqli_query($conn, $sql);
	// Inicia sessao.
	session_start();
	// Listar os dados da tabela
	if (mysqli_num_rows($result) > 0){ // Verifica se existem registros		 
		// Percorre dados de retorno da consulta SQL
		$_SESSION["LOGADO"] = 1;
		$_SESSION["NOMELOG"] = mysqli_fetch_assoc($result)["NOMEUSUARIO"];
		header("location:../index.php");
	}
	else{
		$_SESSION["LOGADO"] = 0;
		$_SESSION["NOMELOG"] = "";
		header("location:../login.php?mens=Login Inválido!");
	}
	// Fechar conexão
	mysqli_close($conn);
?>