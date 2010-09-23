<?php
    //ob_start();

    session_start();
    $_SESSION["page"] = "admin";
    
    //error_reporting( E_ALL );
    //ini_set( 'display_errors', '1' );

    if( !empty( $_SESSION['status'] ) && $_SESSION['status'] == 'admin' )   /* if already logged in, redirect to adminpage */
        header( 'Location: adminpage.php' );

    if( !empty( $_POST['user'] ) && !empty( $_POST['pass'] ) ) {
        $_SESSION['user'] = $_POST['user']; /* set session variables */
        $_SESSION['pass'] = $_POST['pass'];
        header( 'Location: adminpage.php' );
    }

	require( '../functions/functions.php' );
    //ob_end_flush();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta name="description" content="<?php echo $description[$_SESSION["page"]]; ?>" />

        <title>
            2s2h.com - Admin Login
        </title>

        <link rel="stylesheet" href="../css/style.css" type="text/css" />
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


        <center>
        <form action='adminlogin.php' method='post' >
            <table>
                <tr>
                    <th><p>nick </p></th>
                    <th><input type=text name=user maxlength=15></th>
                </tr>
                <tr>
                    <th><p>pass </p></th>
                    <th><input type=password name=pass maxlength=15></th>
                </tr>
            </table>

            </br>

            <div align='center'><input type='submit' value='enter'></div>
        </form>
        </center>

        <!-- some info -->
        <div id="content">
            <br/>
            Login to modify news and perosnell
        </div>

        <div class="separate sfondo-footer">
            <?php
                bottomPageInfo();
            ?>
        </div>


	</body>
</html>
