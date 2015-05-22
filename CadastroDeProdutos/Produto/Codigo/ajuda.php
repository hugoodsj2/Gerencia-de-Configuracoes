<?php
    $root = getcwd();    
    include ''.$root.'/include/header.php';
?>
	<div>
		<ul>
			<li id="liAjuda"> Ajuda <div id="divAjuda" onclick="AbrirEsconderUL('liAjuda',this.id)">+</div>
				<ul>
					<li>Login: A tela de login tem o objetivo de atribuir permissoes a determinados usuarios de sistemas.</li>
					<li>Pagina Inicial: Pagina ja iniciada com a listagem dos produtos, e tendo um menu no qual voce pode navegar.</li>
					<li id="liListagem">Listagem: Tem objetivo de listar os produtos e tem as opções: <div id="divListagem" onclick="AbrirEsconderUL('liListagem',this.id)">+</div> <ul>
					<li>Novo Produto: Opção para adicionar um novo produto, basta preencher os campos e clicar em salvar.</li>
					<li>Editar: Opção para editar um novo produto, basta alterar os campos e clicar em salvar.</li>
					<li>Excluir: Opção para excluir um produto, ao clicar em excluir sera exibido uma mensagem de confirmação para que a ação seja efetuada.</li></ul></li>
					<li>Relatório: Tem objetivo de listar todos os produtos e pode fazer uma busca de acordo com os filtros.</li>
				</ul>
			</li>
		</ul>
	</div>
	<br>
		<input type="button" id="btrVoltar" class="myButton" onclick="Voltar()" value="Voltar">
<?php include ''.$root.'/include/footer.php'; ?>