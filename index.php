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
        Fu nella calda estate del 2008 che all'universit&agrave di padova, dall'incontro di poche menti brillanti, prese vita il progetto conosciuto come 2steps2hell..
        Quel piccolo clan, che allora contava giusto pochi membri, oggi si &egrave affermato nel panorama nazionale diventando uno dei maggiori sostenitori del tanto semplice quanto entusiasmante fps Urban Terror!
        I 2s2h partecipano alle competizioni indette dalle maggiori leghe quali ESL, ClanBase e UrbanZone conseguendo risultati apprezzabili e si allenano regolarmente per migliorare.
        La nostra community mette a disposizione server pubblici in cui testare la propria abilit&agrave o giocare per il semplice piacere di farlo ed ora offre anche la possibilit&agrave agli altri clan di prendere in affitto server di qualit&agrave a prezzi convenienti per poter iniziare o continuare la propria avventura con i giusti strumenti!

        Enjoy 2s2h
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
