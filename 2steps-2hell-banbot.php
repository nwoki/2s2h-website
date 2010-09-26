<?php
    session_start();
		$_SESSION["page"] = "bot";
    require( 'functions/functions.php' );
    
	// open the directory 
	$myDirectory = opendir("BanBot/last_release/");

	// get each entry
	while($entryName = readdir($myDirectory)) {
		$dirArray[] = $entryName;
	}

	// close directory
	closedir($myDirectory);

	//	count elements in array
	$indexCount	= count($dirArray);

	// sort 'em
	sort($dirArray);

	// print 'em
	print("<TABLE border=1 cellpadding=5 cellspacing=0 class=whitelinks>\n");
	print("<TR><TH>Filename</TH><th>Filetype</th><th>Filesize</th></TR>\n");
	// loop through the array of files and print them all
	for($index=0; $index < $indexCount; $index++) {
		    if (substr("$dirArray[$index]", 0, 1) != "."){ // don't list hidden files
			print("<TR><TD><a href=\"$dirArray[$index]\">$dirArray[$index]</a></td>");
			print("<td>");
			print(filetype($dirArray[$index]));
			print("</td>");
			print("<td>");
			print(filesize($dirArray[$index]));
			print("</td>");
			print("</TR>\n");
		}
	}
	print("</TABLE>\n");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="description" content="<?php echo $description[$_SESSION["page"]]; ?>" />
    <title><?php echo $title[$_SESSION["page"]]; ?></title>
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script src="js/slide.js" type="text/javascript"></script>
    <script src="js/login.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/BanBot.css" type="text/css" />
</head>
<body>
    
    <!-- Panel -->
    <div id="toppanel">
      <div id="panel">
        <div class="content clearfix">
          <div class="left all">
            <?php restrictedArea($_SESSION['status']) ?>
          </div>
        </div>
      </div> 
      <!-- The tab on top -->	
      <div class="tab">
        <ul class="login">
          <li class="left">&nbsp;</li>
          <li id="toggle">
            <a id="open" class="open" href="#">Admin Area</a>
            <a id="close" style="display: none;" class="close" href="#">Close</a>			
          </li>
          <li class="right">&nbsp;</li>
        </ul> 
      </div> <!-- / top -->
    </div> <!--panel -->
    
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
		    	<li>Comands accept parts of a players nick</li>
		    	<li>Change current map and the next one</li>
		    	<li>Recognition of admins (they can use fakes)</li>
		    <ul><br/>
		    <p class="center">Summarizing: it stays good and quiet when not needed and keeps your server clean.</p>
		    <p class="center">For more information, read the documentation.</p>
		    <p class="center">Help us improve BanBot indicating bugs or giving us suggestions: open a ticket on our <a href="bugtracker/index.php">BugTracker</a>.</p>
		    <p class="center"><a href="banbotDownloads/banbot_1.1.zip"><img src="imghold/download.png" alt=""></a></p>
		    <p class="center"><a href="banbotDownloads/banbot_1.1.zip">Banbot_ver1.1(ENG)</a> - <a href="banbotDownloads/ChangeLog_ver1.1.txt" target="_blank">(ChangeLog)</a></p>
		    <br/>
		    <p class="center">What beta-testers say about BanBot:</p>
		    <p class="quote">"It's simple and works well, better than b3 and various crappy bots around."</p>
		    <p class="quote">"BanBot is an excellent bot for Urt servers.You don't need to be an expert to use it. Its controls are simple and essential. Useful to manage your server easily and effectively. It also comes with a good anticheat: in my server it has already banned five players, including two of major clans. It would be perfect with the addition of a command to set passwords on the server, but I think it will come soon too. A good bot, I recommend it to everyone."</p>
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
