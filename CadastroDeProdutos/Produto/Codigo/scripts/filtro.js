var imported = document.createElement('script');
imported.src = 'scripts/utils.js';
document.head.appendChild(imported);

function filter (phrase, id, cellNr){
  var pal = phrase.value.toLowerCase();
  var table = document.getElementById(id);
  var dado;
  for (var r = 1; r < table.rows.length; r++){
  	dado = table.rows[r].cells[cellNr].innerHTML.replace(/<[^>]+>/g,"");
  	if (dado.toLowerCase().indexOf(pal)>=0 )
    	table.rows[r].style.display = '';
  	else table.rows[r].style.display = 'none';
  }
}