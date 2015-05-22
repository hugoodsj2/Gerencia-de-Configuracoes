<?php
include('conexao.php');

	$sql = "SELECT CODIGO, DESCRICAO, PRECO, QUANTIDADE FROM produtos";
	$result = mysqli_query($conn, $sql);
	// Listar os produtos
	if (mysqli_num_rows($result) > 0) { // Verifica se existem registros
	 // Percorre dados de retorno da consulta SQL
	 while($row = mysqli_fetch_assoc($result)) {
	 	echo "CODIGO: " . $row["CODIGO"] . " ";
	 	echo "DESCRICAO: " . $row["DESCRICAO"] . " ";
	 	echo "PRECO: " . $row["PRECO"] . " ";
	 	echo "QUANTIDADE: " . $row["QUANTIDADE"] . "<br>";
	 }
	}
	// Fechar conexão
	mysqli_close($conn);
?>