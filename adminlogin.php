<?php
    session_start();
    require( 'functions/functions.php' );
    error_reporting( E_ALL );
    ini_set( 'display_errors', '1' );

    if( !empty( $_SESSION['status'] ) ) {   /* if already logged in, redirect to adminpage */
        if( $_SESSION['status'] == 'admin' )
            header( 'Location: adminpage.php' );
    }

?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="css/main.css" type="text/css" />

    <title>2Steps2Hell - AdminLogin</title>

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

    <br/>

    <?php
    if( empty( $_POST['user'] ) && empty( $_POST['pass'] ) ) {
        /* show login form */
        echo"
        <form action='adminlogin.php' method='post' >
            <table align='center'>
                <tr>
                    <th><p>nick </p></th>
                    <th><input type='text' name='user' maxlength='15'></th>
                </tr>
                <tr>
                    <th><p>pass </p></th>
                    <th><input type='password' name='pass' maxlength='15'></th>
                </tr>
            </table>

            </br>

            <div align='center'><input type='submit' value='enter'></div>
        </form>";
    }
    else {
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['pass'] = $_POST['pass'];
        header( 'refresh: 5; adminpage.php' );
    }
    ?>

</body>
</head>
