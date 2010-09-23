<?php
    //ob_start();

    session_start();
    $_SESSION["page"] = "admin";
    require( '../functions/functions.php' );
    //error_reporting( E_ALL );
    //ini_set( 'display_errors', '1' );

    if( !empty( $_SESSION['user'] ) && !empty( $_SESSION['pass'] ) ) {
        if( adminLogin( $_SESSION['user'], $_SESSION['pass'] ) )
            $_SESSION['status'] = "admin";
    }

    //ob_end_flush();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta name="description" content="<?php echo $_SESSION["page"]; ?>" />
        <link rel="stylesheet" href="../css/style.css" type="text/css" />
    </head>

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="css/main.css" type="text/css" />
    <link rel="stylesheet" href="css/dropdown.css" type="text/css" />

    <title>2Steps2Hell - AdminPage</title>

    </head>

    <body>
        <div id="header">
            <a href="../index.php"><img alt="" src="../img/spacer.gif" width="800" height="235" /></a>
        </div>

        <div class="separate">
            <div id="menu-top" />
            <div id="menu-center">
                <?php
                    menuPages( $_SESSION["page"] );
                ?>
            </div>
            <div id="menu-bottom" />
        </div>

        <div id="content">
            <?php

            /* check if already logged else show login form */
            if( $_SESSION['status'] != 'admin' )    /* show access denied */
                echo "<center><img src='../imghold/fail.jpg'/></center>";

            else {  /* else welcome the admin */
                echo "<h2>Welcome : ".$_SESSION['user']."!</h2>";

                /* list admin options */
                echo "
                <ul>
                    <li><a href='modadmins.php'>Mod Admins</a></li>
                    <li><a href='modnews.php'>Mod News</a></li>
                </ul>";
                
                echo "<br><br><a href='logout.php'>Logout</a>";
                
            }
            ?>
        </div>

        <div class="separate sfondo-footer">
            <?php
                bottomPageInfo();
            ?>
        </div>
    </body>
</html>
