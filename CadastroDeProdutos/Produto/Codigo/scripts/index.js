var imported = document.createElement('script');
imported.src = 'scripts/utils.js';
document.head.appendChild(imported);

function NovoProduto(){
		location.href = "cadastro.php?edit=0";
}
function Voltar(){
	location.href = "index.php"
}
function Relatorio(){
	location.href = "relatorio.php"
}
function confirmaExluir(idProd) {
    var r=confirm("Você tem certeza?");
    if (r==true)
    {     
             document.location.href= 'include/excluir.php?codProd='+idProd;              
    }
    else
    {                    
         return false;
    }
}
