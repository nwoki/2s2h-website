<?php
    session_start();
		$_SESSION["page"] = "bot";
    require( 'functions/functions.php' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="description" content="<?php echo $description[$_SESSION["page"]]; ?>" />
    <title><?php echo $title[$_SESSION["page"]]; ?></title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/BanBot.css" type="text/css" />


</head>
<body>
    <div id="header">
      <a href="index.php" title="2step 2hell - Noleggio Server - BanBot"><img alt="" src="img/spacer.gif" width="800" height="235" /></a>
    </div>

    <div class="separate">
      <div id="menu-top"></div>
      <div id="menu-center"><div id="menu"><?php menuPages( $_SESSION["page"] ) ?></div></div>
      <div id="menu-bottom"></div>
    </div>

    <div id="content">
      <div id="padding">
        <h1 class="bot"><span>BanBot</span></h1>
        <p class="center"><img src="img/banbot.jpg" align="center" alt="BanBot"></p>
<!-- italiano -->        
        <div class="col1" lang="it">
        	<h1 class="italiano"></h1>
		    <p class="center">Un bot che mira ad essere semplice e ad occupare poche risorse della macchina che lo hosta evitando quindi di provocare "lag" non voluti del server.</p>
		    <p class="center">Fatto per controllare il gioco di URBAN TERROR 4.1, integra ed utilizza la libreria SQLite3 per contenere i suoi dati: nonstante questo &egrave completamente indipendente, non necessita di alcun software preinstallato.</p>
		    <p class="center">Pensato anche per chi affitta server di gioco, &egrave in grado di controllare pi&ugrave di un server con una sola istanza, in maniera totalmente isolata l'uno dall'altro: noi l'abbiamo testato fino a 5.</p>
		    <p class="center">Offre molti strumenti utili per gli amministratori dei server, per esempio:</p>
		    <ul class="botList">
		    	<li>Anticheat, con diversi livelli di sicurezza</li>
		    	<li>Ban permamenti (anche con motivazione)</li>
		    	<li>Kick, slap, ecc.</li>
		    	<li>Spostamento di team per i giocatori</li>
		    	<li>Backup automatico dei file di log</li>
		    	<li>Comandi che accettano anche parti di nick</li>
		    	<li>Cambio mappa attuale e successiva</li>
		    	<li>Riconoscimento amministratori (possono usare anche fake)</li>
		    <ul><br/>
		    <p class="center">Riassumendo, se ne sta buono e silenzioso, tranne in caso di bisogno, e tiene i vostri server puliti.</p>
		    <p class="center">Per maggiori informazioni, leggete la documentazione.</p>
		    <p class="center">Aiutaci a migliorare BanBot indicandoci bug o dandoci dei suggerimenti: apri un ticket sul nostro <a href="bugtracker/index.php">BugTracker</a>.</p>
		    <p class="center"><a href="banbotDownloads/banbot_1.1.zip"><img src="imghold/download.png" alt=""></a></p> 
		    <p class="center"><a href="banbotDownloads/banbot_1.1.zip">Banbot_ver1.1(ITA)</a> - <a href="banbotDownloads/ChangeLog_ver1.1.txt" target="_blank">(ChangeLog)</a></p>
		    <br/>
		    <p class="center">I beta-tester dicono di BanBot:</p>
		    <p class="quote">"&egrave semplice e funziona bene, meglio di b3 e cagate varie."</p>
		    <br/> 
		    <p class="quote">"BanBot &egrave un eccellente bot per server Urt. Non bisogna essere esperti per poterlo usare, &egrave alla portata di tutti poich&egrave i comandi sono semplici ed essenziali. Utilissimo per gestire il proprio server in maniera facile ed efficace. Inoltre &egrave dotato di un buon anticheat: nel mio server sono gi&agrave stati bannati 5 players, di cui 2 di clan importanti. Sarebbe perfetto con l'aggiunta di un comando per impostare password nel server, ma penso che presto arriver&agrave anch'esso. Un ottimo bot, lo consiglio a tutti."</p>
		    
		</div>
		
		<div class="separatore"> </div>
<!-- inglese -->
		<div class="col2" lang="en">
			<h1 class="inglese"></h1>
		    <p class="center">A bot that is designed to be simple and to use few resources of the machine thus to avoid causing unwanted "lags" on server.</p>
		    <br/>
		    <p class="center">Made to control the game Urban Terror 4.1, it integrates and uses the SQLite3 library to contain your data: spite this is completely independent, requires no preinstalled software.</p>
		    <br/>
		    <p class="center">Designed also for those who rent game servers, it can controls more than one server with only one instance, in a totally isolated manner from each other: we tested it up to 5.</p>
		    <p class="center">It offers many useful tools for server administrators, for example:</p>  
		    <ul class="botList">
		    	<li>Anticheat, with different levels of security</li>
		    	<li>Permanently bans (also with motive)</li>
		    	<li>Kick, slap, etc.</li>
		    	<li>Force players to change team</li>
		    	<li>Automated backup of log files</li>
		    	<li>Comands accepts as well parts of nick</li>
		    	<li>Change actual map and the next one</li>
		    	<li>Recognition of admins (they can use fakes)</li>
		    <ul><br/>
		    <p class="center">Summary, it is good and quiet, except in case of need, and keep your servers clean.</p>
		    <p class="center">For more information, read the documentation.</p>
		    <p class="center">Help us improve BanBot indicating bug or give us suggestions: open a ticket on our <a href="bugtracker/index.php">BugTracker</a>.</p>
		    <p class="center"><a href="banbotDownloads/banbot_1.1.zip"><img src="imghold/download.png" alt=""></a></p> 
		    <p class="center"><a href="banbotDownloads/banbot_1.1.zip">Banbot_ver1.1(ENG)</a> - <a href="banbotDownloads/ChangeLog_ver1.1.txt" target="_blank">(ChangeLog)</a></p>
		    <br/>
		    <p class="center">Beta-testers tells about BanBot:</p>
		    <p class="quote">"It is simple and works well, better than b3 and various crap."</p>
		    <p class="quote">"BanBot is an excellent bot server Urt. We don't need to be experts to use, it is to everyone as the controls are simple and essential. Useful to manage your server easily and effectively. It also comes with a good anticheat: in my server have already been banned five players, including two of major clans. It would be perfect with the addition of a command to set passwords on the server, but I think it will come soon too. A good bot, I recommend it to everyone."</p>
		</div>
		
		<div id="fineBot">
			<p class="center"><a href="banbotReadme.txt"><img src="imghold/download.png" alt=""></a></p> 
			<p class="center"><a href="banbotReadme.txt">documentazione - documentation</a></p>
		</div>
		
      </div>
    </div>

    <div class="separate sfondo-footer"><?php bottomPageInfo(); ?></div>

</body>
</html>
