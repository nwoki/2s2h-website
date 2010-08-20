<?php
    session_start();
    require( "functions.php" );
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
    <hr size="1" width="100%" />
        <div align='center'>
            <a href='index.php' accesskey='o'>H<u>o</u>me</a>
            <a href='news.php' accesskey='n'><u>N</u>ews</a>
            <a href='noleggioserver.php' accesskey='i'>Nolegg<u>i</u>oServer</a>
            <span class="currentPageLink" >BanBot</span>
            <a href='roster.php' accesskey='r'><u>R</u>oster</a>
        </div>
    <hr size="1" width="100%" />
<!-- menubar -->


</body>
</html>
