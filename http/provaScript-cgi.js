
// JavaScript Document

function daltonizza(){
	

	var cookieVal=getCookie("daltonizzato");
	
	if(cookieVal=="dalt"){
		alert("Visualizzazione Classica");
		delCookie("daltonizzato");
		document.getElementById('layout').setAttribute('href','../http/project.css');
		setCookie("daltonizzato","nonDalt",9999);
	}
	else {
		alert("Visualizzazione Per Daltonici");
		delCookie("daltonizzato");
		document.getElementById('layout').setAttribute('href','../http/daltonized.css');
		setCookie("daltonizzato","dalt",9999);
		
	}
	
}

function leggiCookie(){
	var cookieVal=getCookie("daltonizzato");
	if(cookieVal=="dalt") {
		document.getElementById('layout').setAttribute('href','../http/daltonized.css');
	}
}

function setCookie(nome, valore, giorni) {
	var oggi = new Date()
	var scadenza= new Date()
	scadenza.setTime(oggi.getTime() + 24 * giorni * 3600000)
	document.cookie = nome + "=" + escape(valore) + "; expires=" + scadenza.toGMTString() + "; path=/";
}

function delCookie(nome) {
setCookie(nome, "");
}

function getCookie(nome) {
	var asCookies = document.cookie.split("; ");
	var stringa="";
	for (var i = 0; i < asCookies.length; i++){
	var info = asCookies[i].split("=");
		if (nome == info[0]) {
		stringa = unescape(info[1]);
		}
	}
return stringa;
}


window.onload=leggiCookie();
