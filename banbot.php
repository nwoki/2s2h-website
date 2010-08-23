<?php
    session_start();
    require( 'functions/functions.php' );
    error_reporting( E_ALL );
    ini_set( 'display_errors', '1' );
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="css/main.css" type="text/css" />
    <link rel="stylesheet" href="css/dropdown.css" type="text/css" />

    <title>2Steps2Hell - BanBot</title>

</head>
<body>
    <div id="banner" align="center" >
        <img src="img/logo_scaled.jpg" >
    </div>

<!-- menubar -->
    <hr/>
        <div align='center'>
            <a accesskey='h' href='index.php' ><u>H</u>ome</a>
            <a accesskey='n' href='news.php' ><u>N</u>ews</a>
            <a accesskey='s' href='noleggioserver.php' >Noleggio<u>S</u>erver</span>
            <span class="currentPageLink" >BanBot</a>
            <a accesskey='r' href='roster.php' ><u>R</u>oster</a>
            <a accesskey='f' href='forum/index.php' ><u>F</u>orum</a>
            <a accesskey='t' href='bugtracker/index.php' >Bug<u>T</u>racker</a>
        </div>
    <hr/>
<!-- menubar -->

    <div align="center">
        <img src="img/banbot.jpg" align="center" width="25%">
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
            <img src="img/download.png">
            <!-- list banbot versions here -->
            <ul>
                <li><a href="banbotDownloads/banbot_1.1.zip">Banbot_ver1.1</a> - <a href="banbotDownloads/ChangeLog_ver1.1.txt">(ChangeLog)</a></li>
            </ul>
        </p>

    </div>

    <?php
        bottomPageInfo();
    ?>

</body>
</html>
