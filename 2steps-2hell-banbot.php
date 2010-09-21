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
      <div id="menu-center"><?php menuPages( $_SESSION["page"] ) ?></div>
      <div id="menu-bottom"></div>
    </div>


    <div id="content">
      <div id="padding">
      <center>
          <img src="img/banbot.jpg" align="center" width="18%">
          <p>
            Un bot fatto in C++ che mira ad essere semplice e ad occupare poche risorse
            della macchina che lo hosta limitando ( addirittura eliminando ) "lag"
            non voluti del server spesso provocati dai bot.
            Controlla il gioco di URBAN TERROR 4.1 e utilizza un database SQLite3 per contenere i suoi dati
            ( la libreria SQLite3 &egrave intergata nel bot, quindi non &egrave richiesto che sia installata sulla macchina ).
            Controlla periodicamente per giocatori bannati e li elimina automaticamente dal server
            evitando il loro rientro nel futuro.
            <br/>
            <br/>
            <a href="banbotReadme.txt"><u>Readme</u></a> completo del bot
            <br/>
            <br/>
            Aiutaci a migliorare il bot indicandoci bug o modi per migliorarlo che secondo voi sono utili aprendo
            un ticket sul nostro <a href="bugtracker/index.php"><u>bugtracker</u></a>
            <br/>
            <br/>
            <img src="imghold/download.png">
            <!-- list banbot versions here -->
            <ul>
                <li><a href="banbotDownloads/banbot_1.1.zip">Banbot_ver1.1</a> - <a href="banbotDownloads/ChangeLog_ver1.1.txt">(ChangeLog)</a></li>
            </ul>
          </p>
      </center>

      </div>
    </div>

    <div class="separate sfondo-footer"><?php bottomPageInfo(); ?></div>


</body>
</html>
