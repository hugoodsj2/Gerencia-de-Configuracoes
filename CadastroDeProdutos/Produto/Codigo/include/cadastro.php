<?php
include("conexao.php");
	$tipoCad = $_POST["tipoCad"];
	$codProd = $_POST["codProd"];
	$txt_codigo = $_POST["CODIGO"];
	$txt_descricao = $_POST["DESCRICAO"];
	$txt_preco = $_POST["PRECO"];
	$txt_quantidade = $_POST["QUANTIDADE"];
	if($tipoCad == 0){
		$query = "SELECT * FROM produtos";
		$pesquisa = mysqli_query($conn, $query)
			or die (mysql_error());
	
		if(mysql_fetch_array($pesquisa)){
			echo "Nome de usuário já cadastrado no sistema.";
		}
		else
		{
			$query = "INSERT INTO produtos (CODIGO, DESCRICAO, PRECO, QUANTIDADE) VALUES ('$txt_codigo','$txt_descricao', '$txt_preco', '$txt_quantidade')";
			$result = mysqli_query($conn, $query)
				or die (mysql_error());
			if ($result){
				echo "<h1>Item salvo com sucesso!</h1>";
			}	
			else{
				echo "Ocorreu um erro!";
			}
		}
	}
	else {
		$query = "UPDATE produtos SET CODIGO = $txt_codigo, DESCRICAO = $txt_descricao, PRECO = $txt_preco, QUANTIDADE = $txt_quantidade WHERE CODIGO = $codProd";
		$result = mysqli_query($conn, $query)
			or die (mysql_error());
		if ($result){
			echo "<h1>Item salvo com sucesso!</h1>";
		}	
		else{
			echo "Ocorreu um erro!";
		}
	}
	// Fechar conexão
	mysqli_close($conn);
	header("location:../index.php");
	
?>