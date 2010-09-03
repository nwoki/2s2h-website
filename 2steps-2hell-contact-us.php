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

    <title>2Steps2Hell - Contacts</title>

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
            <a accesskey='s' href='noleggioserver.php' >Noleggio<u>S</u>erver</a>
            <a accesskey='b' href='banbot.php' ><u>B</u>anBot</a>
            <a accesskey='r' href='roster.php' ><u>R</u>oster</a>
            <a accesskey='f' href='forum/index.php' ><u>F</u>orum</a>
            <a accesskey='t' href='bugtracker/index.php' >Bug<u>T</u>racker</a>
        </div>
    <hr/>
<!-- menubar -->

    <h4> IRC </h4>
    <p>
        You can find all of us on "irc.quakenet.org" @ #2s2h.
    </p>

    <br/>

    <h4>system admins + devs( server renting, bugs ecc )</h4>
    <p>
        <u>N3m3s1s</u> - n3m3sis( at )email( dot )it<br/>
        <u>Zamy</u> - skyled( at )alice( dot )it<br/>
    </p>

    <br/>

    <h4>teamspeak admins</h4>
    <p>
        <u>Heresyarch/Tsujigiri</u> -<br/>
        <u>Revan</u> - andre.88( at )hotmail( dot )it<br/>
    </p>

    <br/>

    <h4>BanBot admins 2s2h server</h4>
    <p>
        See "IRC" above. All the opped people are also admins on our servers BanBot
    </p>

    <?php
        bottomPageInfo();
    ?>
</body>
</html>

