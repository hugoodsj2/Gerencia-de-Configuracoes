<?php
    $root = getcwd();    
    include ''.$root.'/include/header.php';
?>
<?php
	$tipoCad = $_GET["edit"];
	$codProd = "";
	
	$codigo = "";
	$descricao = "";
	$preco = "";
	$quantidade = "";
	
	if($tipoCad){
		$codProd = $_GET["id"];
		$conn = mysqli_connect("localhost", "root", "", "tecweb");
		$sql = "SELECT CODIGO, DESCRICAO, PRECO, QUANTIDADE FROM produtos WHERE CODIGO = $codProd";
		$result = mysqli_query($conn, $sql);
		// Recuperar Produto
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				$codigo = $row["CODIGO"];
				$descricao = $row["DESCRICAO"];
				$preco = $row["PRECO"];
				$quantidade = $row["QUANTIDADE"];
			}
		}
		mysqli_close($conn);
	}
?>
		<div id="corpoCad">
			<form name ="Cadastro" id="formLogin" method="post" action="include/cadastro.php">
			<input type="hidden" value="<?php echo $tipoCad ?>" name="tipoCad" id="tipoCad"/>
			<input type="hidden" value="<?php echo $codProd ?>" name="codProd" id="codProd"/>
				<div class="div_left">
					<label for="txt_codigo">Código:</label><br>
					<input type="text" name="CODIGO" id="txt_codigo" class="inputtext" maxlength="10" value="<?php echo $codigo?>" /><br>
					<label for="txt_descricao">Descrição:</label><br>
					<input type="text" name="DESCRICAO" id="txt_descricao" class="inputtext" maxlength="100" value="<?php echo $descricao?>" /> <br>
					<label for="txt_preco">Preço</label><br>
					<input type="text" name="PRECO" id="txt_preco" class="inputtext" maxlength="20" value="<?php echo $preco?>" /> <br>
					<label for="txt_quantidade">Quantidade:</label><br>
					<input type="text" name="QUANTIDADE" id="txt_quantidade" class="inputtext" maxlength="10" value="<?php echo $quantidade?>" /> <br><br>
					<input type="submit" value="Salvar" name="SALVAR" class="myButton" onclick="return validaCadastro()"/>
					<input type="button" id="btnVoltar" class="myButton" onclick="Voltar()" value="Voltar">
				</div>
			</form>
		</div>
		<br>		
<?php include ''.$root.'/include/footer.php'; ?>