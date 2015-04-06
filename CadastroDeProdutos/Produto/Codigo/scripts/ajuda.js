var imported = document.createElement('script');
imported.src = 'scripts/utils.js';
document.head.appendChild(imported);
window.onload = function() {
  EsconderUL(1);
  EsconderUL(2);
};
function AbrirEsconderUL(id,idDiv){
	var li = document.getElementById(id);
	var ul = li.getElementsByTagName("ul")[0];
	var div = document.getElementById(idDiv);
	if(window.getComputedStyle(ul).display === 'none'){
		ul.style.display = "block";
		div.innerHTML = "-";
	}
	else {
		ul.style.display = "none";
		div.innerHTML = "+";
	}
}
function EsconderUL(indexUL){
	var ul = document.getElementsByTagName("ul")[indexUL];
	ul.style.display = "none";
}
