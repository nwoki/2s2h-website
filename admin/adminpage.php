<?php
    ob_start();
		
    session_start();
    require( '../functions/functions.php' );
    error_reporting( E_ALL );
    ini_set( 'display_errors', '1' );

    if( !empty( $_SESSION['user'] ) && !empty( $_SESSION['pass'] ) ) {
        if( adminLogin( $_SESSION['user'], $_SESSION['pass'] ) )
            $_SESSION['status'] = "admin";
    } 
		
		ob_end_flush();
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="css/main.css" type="text/css" />
    <link rel="stylesheet" href="css/dropdown.css" type="text/css" />

    <title>2Steps2Hell - AdminPage</title>

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

    <?php

    /* check if already logged else show login form */
    if( $_SESSION['status'] != 'admin' )    /* show access denied */
        echo "<center><img src='img/fail.jpg'/></center>";

    else {  /* else welcome the admin */
        echo "<h2>Welcome : ".$_SESSION['user']."!</h2>";

        /* list admin options */
        echo "
        <ul>
            <li><a href='modadmins.php'>Mod Admins</a></li>
            <li><a href='modnews.php'>Mod News</a></li>
        </ul>
        ";
    }

    bottomPageInfo();
    ?>

</body>
</html>
