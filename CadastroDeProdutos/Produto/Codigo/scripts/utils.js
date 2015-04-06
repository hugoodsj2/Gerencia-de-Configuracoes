function value(idElemento) {
	return document.getElementById(idElemento).value;
}
function innerHtml(idElemento) {
	return document.getElementById(idElemento).innerHtml;
}
function Sair() {
    var r = confirm("Deseja sair?");
    if (r) {
        location.href = "login.html";
    }
}