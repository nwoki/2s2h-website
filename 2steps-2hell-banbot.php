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
        <p class="center">Un bot fatto in C++ che mira ad essere semplice e ad occupare poche risorse della macchina che lo hosta limitando ( addirittura eliminando ) "lag" non voluti del server spesso provocati dai bot.</p>
        <p class="center">Controlla il gioco di URBAN TERROR 4.1 e utilizza un database SQLite3 per contenere i suoi dati ( la libreria SQLite3 &egrave intergata nel bot, quindi non &egrave richiesto che sia installata sulla macchina ).</p>
        <p class="center">Controlla periodicamente per giocatori bannati e li elimina automaticamente dal server evitando il loro rientro nel futuro.</p>  
        <p class="center"><a href="banbotReadme.txt">Readme</a> completo del bot</p>
        <p class="center">Aiutaci a migliorare il bot indicandoci bug o modi per migliorarlo che secondo voi sono utili aprendo un ticket sul nostro <a href="bugtracker/index.php">bugtracker</a></p>
        <p class="center"><a href="banbotDownloads/banbot_1.1.zip"><img src="imghold/download.png" alt=""></a></p> 
        <p class="center"><a href="banbotDownloads/banbot_1.1.zip">Banbot_ver1.1</a> - <a href="banbotDownloads/ChangeLog_ver1.1.txt" target="_blank">(ChangeLog)</a></p>
      </div>
    </div>

    <div class="separate sfondo-footer"><?php bottomPageInfo(); ?></div>

</body>
</html>
