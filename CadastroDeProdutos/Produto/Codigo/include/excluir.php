<?php
include("conexao.php");
	$codProd = $_GET["codProd"];
	$conn = mysqli_connect("localhost", "root", "", "tecweb");
	$sql = "DELETE FROM produtos WHERE CODIGO = $codProd";
	$result = mysqli_query($conn, $sql);
	
	header("location:../index.php");
?>