<?php 
include("conexao.php");

	$login = $_POST['login'];
	$senha = $_POST['senha'];
	// Disparar a consulta
	$sql = "SELECT CODIGO, LOGIN, NOMEUSUARIO, SENHA FROM usuario WHERE LOGIN = '$login' AND SENHA = '$senha'";
	$result = mysqli_query($conn, $sql);
	// Listar os dados da tabela
	if (mysqli_num_rows($result) > 0){ // Verifica se existem registros
	 // Percorre dados de retorno da consulta SQL
	 echo"LOGIN OK <br>";
	 echo mysqli_fetch_assoc($result)["LOGIN"];
	 header("location:../index.html");
	}
	else{
		echo"LOGIN NÃO OK.";
	}
	// Fechar conexão
	mysqli_close($conn);
?>