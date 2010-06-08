// JavaScript Document

var j=1;

function setcookie(nome, valore, giorni) {
	var oggi = new Date()
	var scadenza= new Date()
	scadenza.setTime(oggi.getTime() + 24 * giorni * 3600000)
	document.cookie = nome + "=" + escape(valore) +"; expires=" + scadenza.toGMTString();
}
			
function delcookie(nome) {
	setcookie(nome, "");
}

function getcookie(nome) {
	var ascookies = document.cookie.split("; ");
	var stringa="";	
	for (var i=0; i<ascookies.length; i++){		
		var info=ascookies[i].split("=");
		if (nome==info[0]) {
			stringa=unescape(info[1]);
		}
	}
	return stringa;
}
				  
function enable_css(k){		
        for (var i =0; i<document.styleSheets.length-1; i++)
        document.styleSheets[i].disabled = !(i == k);
        delcookie("variabile");
        setcookie("variabile",j,10000);
	j++;
        if (j==2) j=0;			
}

function leggi(){
	j=getcookie("variabile");
	if (j=="") j=1; 
}
      			
leggi();
enable_css(j);