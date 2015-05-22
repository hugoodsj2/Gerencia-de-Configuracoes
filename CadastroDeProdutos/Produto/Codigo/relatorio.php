<?php
    $root = getcwd();    
    include ''.$root.'/include/header.php';
?>
	<div id="relConteudo">
		<table id="tabela" cellspacing="0" cellpadding="2px">
			<thead>
				<tr>
					<th align="center">
						Código
					</th>
					<th align="center" class="w500"> 
						Descrição
					</th>
					<th align="center" class="w200">
						Preço
					</th>
					<th align="center" class="w100">
						Quantidade
					</th>
				</tr>
				<tr>
					<th>Filtro</th>
					<th width="5%"><input name="filt" type="text" onKeyUp="filter(this, 'tabela', '1')"></th>
					<th></th>
					<th width="5%"><input name="filt4" type="text" onKeyUp="filter(this, 'tabela', '3')"></th>
				</tr>				
			</thead>
			<tbody>
			<?php
				$conn = mysqli_connect("localhost", "root", "", "tecweb");
				$sql = "SELECT CODIGO, DESCRICAO, PRECO, QUANTIDADE FROM produtos";
				$result = mysqli_query($conn, $sql);
				// Listar os produtos
				if (mysqli_num_rows($result) > 0) { // Verifica se existem registros
 				// Percorre dados de retorno da consulta SQL
 				 while($row = mysqli_fetch_assoc($result)) {
 			?>
				<tr>
					<td align="center">
						<?php echo " " . $row["CODIGO"] . " ";?>
					</td>
					<td align="center">
						<?php	echo " " . $row["DESCRICAO"] . " ";?>
					</td>
					<td align="center">
						<?php echo " " . $row["PRECO"] . " ";?>
					</td>
					<td align="center">
						<?php echo " " . $row["QUANTIDADE"] . "<br>";?>
					</td>
			<?php

				 }
				}
			?>
				</tr>
			</tbody>
		</table>
	</div>
	<br>
		<input type="button" id="btrExibe" class="myButton" onclick="Relatorio()" value="Exibir Tudo">
		<input type="button" id="btrVoltar" class="myButton" onclick="Voltar()" value="Voltar">
<?php include ''.$root.'/include/footer.php'; ?>