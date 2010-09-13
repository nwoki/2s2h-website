<?php
    session_start();
    require( '../functions/functions.php' );
    //require( 'functions/WebClass.php' );    /* temp, delete after hacking */
    error_reporting( E_ALL );
    ini_set( 'display_errors', '1' );
    $test = new WebClass(); /* used to check if database is setup right */
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="css/main.css" type="text/css" />
    <link rel="stylesheet" href="css/dropdown.css" type="text/css" />

    <title>2Steps2Hell - ModAdmins</title>

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
            <a accesskey='b' href='banbot.php' ><u>B</u>anBot</a>
            <a accesskey='r' href='roster.php' ><u>R</u>oster</a>
            <a accesskey='f' href='forum/index.php' ><u>F</u>orum</a>
            <a accesskey='t' href='bugtracker/index.php' >Bug<u>T</u>racker</a>
        </div>
    <hr/>
<!-- menubar -->

    <?php
        if( isset( $_POST['chosenArticle'] ) )   /* show input fields to mod admin */
            showModArticle( $_POST['chosenArticle'] );  /* got article by it's id */

        //elseif( isset( $_POST['adminToModId'] ) )  /* submit admin mod */
        //    submitModAdmin( $_POST['modAdminName'], $_POST['modAdminPass'], $_POST['adminToModId'] );

        //elseif( isset( $_POST['adminToDeleteId'] ) ) /* id of admin to delete */
        //    deleteAdmin( $_POST['adminToDeleteId'] );

        //elseif( isset( $_POST['addNewAdmin'] ) )    /* show addNewAdmin form */
        //    addNewAdminForm();

        //elseif( isset( $_POST['submitNewAdmin'] ) )     /* submit new admin to database */
        //    insertNewAdmin( $_POST['newAdminNick'], $_POST['newAdminPass'] );

        else   /* show news selection form */
            showNewsList();

        bottomPageInfo();
    ?>



</body>
</html>
