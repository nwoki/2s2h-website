// JavaScript Document

function daltonizza(){
	
	azione=document.getElementById('linkDaltonici').getAttribute('title');
	
	if(azione=="dalt"){
	alert("Visualizzazione Per Daltonici");
	document.getElementById('layout').setAttribute('href','daltonized.css');
	document.getElementById('linkDaltonici').setAttribute('title','nonDalt');
	}
	else {
		alert("Visualizzazione Classica");
		document.getElementById('layout').setAttribute('href','project.css');
		document.getElementById('linkDaltonici').setAttribute('title','dalt');
	}
	
}