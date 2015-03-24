var imported = document.createElement('script');
imported.src = 'scripts/utils.js';
document.head.appendChild(imported);

function ValidarLogin(){
	var usuario = value("txt_usuario");
	var senha = value("txt_senha");
	
	if(usuario == "" || senha == ""){
		alert("Dados invalidos!");
	}
	else
	{
		alert("Sucesso!");
		location.href = "index.html";
	}
}
