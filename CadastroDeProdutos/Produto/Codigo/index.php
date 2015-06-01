<?php
    $root = getcwd();    
    include ''.$root.'/include/header.php';
?>
		<table cellspacing="0" cellpadding="2px">
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
				<th align="center">
					Opções
				</th>
			</tr>
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
						<?php echo " " . $row["CODIGO"] . " "; $idProd = $row["CODIGO"];?>
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
					<td align="center">
						<?php echo "<a href='cadastro.php?edit=1&id=$idProd'><img src='images/edit_icon.png' width='15px'/></a> / <a onclick='confirmaExluir($idProd)'><img src='images/delete_icon.png' width='15px'/></a>" ?>
					</td>
			<?php
				 }
				}
			?>
			</tr>
		</table>
		<br>
		<input type="button" id="btnNovo" class="myButton" onclick="NovoProduto()" value="Novo Produto">		
		
<?php include ''.$root.'/include/footer.php'; ?>