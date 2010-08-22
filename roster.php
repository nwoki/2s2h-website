<?php
    session_start();
    //require( "functions.php" );
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
            <a accesskey='b' href='banbot.php' ><u>B</u>anBot</a>
            <span class="currentPageLink" >Roster</a>
        </div>
    <hr/>
<!-- menubar -->
    <!-- only admins and soldiers, too much hastle in adding new perople on wannabe ecc -->
    <h3>Admin</h3>

    <div align='center'>
        <a href='#n3m3s1s' >N3m3s1s</a>
        <a href='#zamy' >Zamy</a>
        <a href='#heresyarch' >Heresyarch</a>
    </div>

    <br/>

    <div id="n3m3s1s" >
        <fieldset>
            <legend>n3m3s1s</legend>
            <img src="img/people/n3m3s1s.jpg" align="left" alt="nemesis-foto" width="20%"/>
            <p>
                inserire descrizione
            </p>
        </fieldset>
    </div>

    <br/>

    <div id="zamy" >
        <fieldset>
            <legend align='right' >Zamy</legend>
            <img src="img/people/anonymous.jpg" align="right" alt="nemesis-foto" width="20%"/>
            <p>
                inserire descrizione
            </p>
        </fieldset>
    </div>

    <br/>

    <div id="heresyarch" >
        <fieldset>
            <legend>Heresyarch/Cityhunter</legend>
            <img src="img/people/nic.jpg" align="left" alt="nemesis-foto" width="20%"/>
            <p>
                inserire descrizione
            </p>
        </fieldset>
    </div>

    <br/>
    <br/>

    <h3>Soldati</h3>

    <div align='center'>
        <a href='#revan' >Revan</a>
        <a href='#kolbebo' >Kolbebo</a>
        <a href='#roger' >Roger</a>
    </div>

    <br/>

    <div id="revan" >
        <fieldset>
            <legend align='right' >Revan</legend>
            <img src="img/people/revan.jpg" align="right" alt="nemesis-foto" width="20%"/>
            <p>
                inserire descrizione
            </p>
        </fieldset>
    </div>

    <br/>

    <div id="kolbebo" >
        <fieldset>
            <legend>Kolbebo</legend>
            <img src="img/people/anonymous.jpg" align="left" alt="nemesis-foto" width="20%"/>
            <p>
                inserire descrizione
            </p>
        </fieldset>
    </div>

    <br/>

    <div id="roger" >
        <fieldset>
            <legend align='right' >Roger</legend>
            <img src="img/people/roger.jpg" align="right" alt="nemesis-foto" width="20%"/>
            <p>
                inserire descrizione
            </p>
        </fieldset>
    </div>

    <br/>


</body>
</html>
