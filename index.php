<?php
    session_start();
    require( 'functions/functions.php' );
    require( 'functions/WebClass.php' );
    error_reporting( E_ALL );
    ini_set( 'display_errors', '1' );
    $test = new WebClass();
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="css/main.css" type="text/css" />
    <link rel="stylesheet" href="css/dropdown.css" type="text/css" />

    <title>2Steps2Hell - Home</title>

</head>
<body>
    <div id="banner" align="center" >
        <img src="img/logo_scaled.jpg" >
    </div>

<!-- menubar -->
    <hr/>
        <div align='center'>
            <span class="currentPageLink" >Home</span>
            <a accesskey='n' href='news.php' ><u>N</u>ews</a>
            <a accesskey='s' href='noleggioserver.php' >Noleggio<u>S</u>erver</a>
            <a accesskey='b' href='banbot.php' ><u>B</u>anBot</a>
            <a accesskey='r' href='roster.php' ><u>R</u>oster</a>
            <a accesskey='f' href='forum/index.php' ><u>F</u>orum</a>
            <a accesskey='t' href='bugtracker/index.php' >Bug<u>T</u>racker</a>
        </div>
    <hr/>
<!-- menubar -->

    <p>
        Cercate un clan in cui ci si possa divertire, impegnare e vincere? Vi domandate se siete nel posto giusto? se avete un'età compresa tra i 16 e i 25 anni si.
        La storia 2s2h è cominciata con l'incrontro di poche ma brillanti menti all'università di padova più un infiltrato di provvenienza sconosciuta ( c'è chi dice mantova boh? ).
        Partendo da un piccolo gruppo di amici che non disponeva nemmeno di un server privato proprio per potersi allenare, oggi i 2s2h sono diventati uno dei pochi clan seri presenti
        in questo gioco, allargandosi sia per quanto riguarda discorso membri sia per l'acquisizione server di gioco. Il clan è attivo in molte competizioni vedi esempi ESL, clanbase, UZ
        gocate principalmente in modalità team survivor. Ora se avete voglia di giocare, accrescere le vostre abilità di gioco e siete assolutamente persone serie, FORSE avete la
        possibilità di entrare a far parte di questo gruppo di persone speciali. Buona fortuna
    </p>

    <h4>
        AWARDS
    </h4>

    <center>
        <img src="img/awards/esl/DD3.jpg" >
    </center>

    <?php
        bottomPageInfo();
    ?>
</body>
</html>
