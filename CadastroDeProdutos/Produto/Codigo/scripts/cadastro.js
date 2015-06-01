var imported = document.createElement('script');
imported.src = 'scripts/utils.js';
document.head.appendChild(imported);

function Voltar(){
		location.href = "index.php";
}

function validaCadastro(){
	var erro = "";
	if(document.getElementById("txt_codigo").value == ""){
		erro = "Preencha o Código!";
	}
	if(document.getElementById("txt_descricao").value == ""){
		erro += "\nPreencha a Descrição!";
	}
	if(document.getElementById("txt_preco").value == ""){
		erro += "\nPreencha o Preço!";
	}
	if(document.getElementById("txt_quantidade").value == ""){
		erro += "\nPreencha a Quatidade!";
	}
	if(erro == ""){
		alert("Salvo com sucesso!");
		return true;
	}
	else{
		alert(erro);
		return false;
	}
}