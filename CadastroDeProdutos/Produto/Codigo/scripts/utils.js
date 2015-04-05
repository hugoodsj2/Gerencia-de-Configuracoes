function value(idElemento) {
	return document.getElementById(idElemento).value;
}

function Sair() {
    var r = confirm("Deseja sair?");
    if (r) {
        location.href = "login.html";
    }
}