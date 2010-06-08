// JavaScript Document

function daltonizza(){
	
	//azione=document.getElementById('linkDaltonici').getAttribute('title');
	var cookieVal=getCookie("daltonizzato");
	
	if(cookieVal=="dalt"){
		alert("Visualizzazione Classica");
		delCookie("daltonizzato");
		document.getElementById('layout').setAttribute('href','project.css');
		//document.getElementById('linkDaltonici').setAttribute('title','dalt');
		setCookie("daltonizzato","nonDalt",9999);
	}
	else {
		alert("Visualizzazione Per Daltonici");
		delCookie("daltonizzato");
		document.getElementById('layout').setAttribute('href','daltonized.css');
		//document.getElementById('linkDaltonici').setAttribute('title','nonDalt');
		setCookie("daltonizzato","dalt",9999);
		
	}
	
}

function leggiCookie(){
	var cookieVal=getCookie("daltonizzato");
	if(cookieVal=="dalt") {
		document.getElementById('layout').setAttribute('href','daltonized.css');
	}
}

function setCookie(nome, valore, giorni) {
	var oggi = new Date()
	var scadenza= new Date()
	scadenza.setTime(oggi.getTime() + 24 * giorni * 3600000)
	document.cookie = nome + "=" + escape(valore) + "; expires=" + scadenza.toGMTString();
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


leggiCookie();
