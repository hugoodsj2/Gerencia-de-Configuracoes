<?php
    $root = getcwd();    
    include ''.$root.'/include/header.php';
?>
		<div id="corpoCad">
			<form name ="Cadastro" id="formLogin" method="post" action="include/cadastro.php">
				<div class="div_left">
					<label for="txt_codigo">Código:</label><br>
					<input type="text" name="CODIGO" id="txt_codigo" class="inputtext" maxlength="10" /><br>
					<label for="txt_descricao">Descrição:</label><br>
					<input type="text" name="DESCRICAO" id="txt_descricao" class="inputtext" maxlength="100" /> <br>
					<label for="txt_preco">Preço</label><br>
					<input type="text" name="PRECO" id="txt_preco" class="inputtext" maxlength="20" /> <br>
					<label for="txt_quantidade">Quantidade:</label><br>
					<input type="text" name="QUANTIDADE" id="txt_quantidade" class="inputtext" maxlength="10" /> <br><br>
					<input type="submit" value="Cadastrar" name="SALVAR" class="myButton" onclick="return validaCadastro();Salvar()"/>
					<!--<input type="submit" name="SALVAR" id="btnSalvar" class="myButton" onclick="Salvar()" value="Salvar">-->
					<input type="button" id="btnVoltar" class="myButton" onclick="Voltar()" value="Voltar">
				</div>
			</form>
		</div>
		<br>		
<?php include ''.$root.'/include/footer.php'; ?>