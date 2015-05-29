<?php
    $root = getcwd();    
    include ''.$root.'/include/header.php';
?>
	<div>
		<ul>
			<li id="liAjuda"> Ajuda <br><p>O SISCOP é o sistema de controle de produtos responsável pela exibição de produtos cadastrados, com a possibilidade de novos cadastros, exclusões, edições de produtos e listagem dos mesmos.</p><div id="divAjuda" onclick="AbrirEsconderUL('liAjuda',this.id)"><img id="imgMais" src="images/button-mais-detalhes.png"></div>
				<ul>
					<li>Login: A tela de login tem o objetivo de atribuir permissões a determinados usuários do sistema. O usuário deve  preencher todos os campos do formulário (Usuário e senha) para acessar o sistema. Caso o usuário não exista ou algum campo fique sem o correto preenchimento será exibida uma mensagem de alerta.</li>
					<li>Página Inicial: Página já iniciada com a listagem dos produtos, e tendo um menu no qual você pode navegar entre LISTAGEM, RELATÓRIO, AJUDA e fazer logout pela opção SAIR.</li>
					<li id="liListagem">Listagem: Tem objetivo de listar os produtos com as seguintes opções: <div id="divListagem" onclick="AbrirEsconderUL('liListagem',this.id)"><img src="images/button-mais-detalhes.png"></div> <ul>
					<li>Novo Produto: Opção para cadastrar um novo produto, exibe uma nova tela de cadastro com os campos do produto, para cadastrar um novo basta preencher os campos e clicar em salvar.</li>
					<li>Editar: Opção para editar um novo produto, basta alterar os campos e clicar em salvar.</li>
					<li>Excluir: Opção para excluir um produto, ao clicar em excluir sera exibido uma mensagem de confirmação para que a ação seja efetuada.</li></ul></li>
					<li>Relatório: Tem objetivo de listar todos os produtos já cadastrados e permite fazer uma busca de acordo com os filtros.</li>
				</ul>
			</li>
		</ul>
	</div>
	<br>
		<input type="button" id="btrVoltar" class="myButton" onclick="Voltar()" value="Voltar">
<?php include ''.$root.'/include/footer.php'; ?>
