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
		    <p class="center">Offre molti strumenti utili per gli amministratori dei server, per esempio ban permanenti e un anti-cheat.</p>  
		    <p class="center">Per maggiori informazioni, leggete la documentazione.</p>
		    <p class="center">Aiutaci a migliorare il bot indicandoci bug o dandoci dei suggerimenti: apri un ticket sul nostro <a href="bugtracker/index.php">BugTracker</a>.</p>
		    <p class="center"><a href="banbotDownloads/banbot_1.1.zip"><img src="imghold/download.png" alt=""></a></p> 
		    <p class="center"><a href="banbotDownloads/banbot_1.1.zip">Banbot_ver1.1(ITA)</a> - <a href="banbotDownloads/ChangeLog_ver1.1.txt" target="_blank">(ChangeLog)</a></p>
		</div>
		
		<div class="separatore"> </div>
<!-- inglese -->
		<div class="col2" lang="en">
			<h1 class="inglese"></h1>
		    <p class="center">A bot that is designed to be simple and to use few resources of the machine thus to avoid causing unwanted "lags" on server.</p>
		    <br/>
		    <p class="center">Made to control the game Urban Terror 4.1, it integrates and uses the SQLite3 library to contain your data: spite this is completely independent, requires no preinstalled software.</p>
		    <br/>
		    <p class="center">It offers many useful tools for server administrators, for example permanent ban and an anti-cheat.</p>  
		    <p class="center">For more information, read the documentation.</p>
		    <p class="center">Help us improve the bot indicating bug or give us suggestions: open a ticket on our <a href="bugtracker/index.php">BugTracker</a>.</p>
		    <p class="center"><a href="banbotDownloads/banbot_1.1.zip"><img src="imghold/download.png" alt=""></a></p> 
		    <p class="center"><a href="banbotDownloads/banbot_1.1.zip">Banbot_ver1.1(ENG)</a> - <a href="banbotDownloads/ChangeLog_ver1.1.txt" target="_blank">(ChangeLog)</a></p>
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
