<?php
    ob_start();
    session_start();
    if ( !isset($_SESSION['status']) || $_SESSION['status']!="admin" )
      header('location: ../index.php');
    require( '../functions/functions.php' );
    $_SESSION["page"] = "admin";
    ob_end_flush();
    //error_reporting( E_ALL );
    //ini_set( 'display_errors', '1' );
    //$test = new WebClass(); /* used to check if database is setup right */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta name="description" content="<?php echo $description[$_SESSION["page"]]; ?>" />
        <title><?php echo $title[$_SESSION["page"]]; ?></title>
        <script src="../js/jquery-1.4.2.min.js" type="text/javascript"></script>
        <script src="../js/login.js" type="text/javascript"></script>
        <?php if ( isset($_SESSION['status']) && $_SESSION['status'] == 'admin') {?>
        <script src="../js/slide-admin.js" type="text/javascript"></script>
        <?php } else {?>
        <script src="../js/slide.js" type="text/javascript"></script>
        <?php }?>
        <link href="../css/style.css" type="text/css" rel="stylesheet"/>
        <link href="../css/slide.css" type="text/css" rel="stylesheet" media="screen" />
    </head>

    <body>
    <!-- Panel -->
    <div id="toppanel">
      <div id="panel">
        <div class="content clearfix">
          <div class="left all">
            <?php restrictedArea( $_SESSION['status'] ) ?>
          </div>
        </div>
      </div>
      <!-- The tab on top -->
      <div class="tab">
        <ul class="login">
          <li class="left">&nbsp;</li>
          <li id="toggle">
            <a id="open" class="open" href="#">Admin Area</a>
            <a id="close" class="close" href="#">Close</a>
          </li>
          <li class="right">&nbsp;</li>
        </ul>
      </div> <!-- / top -->
    </div> <!--panel -->

        <div id="header">
            <a href="../index.php"><img alt="" src="../img/spacer.gif" width="800" height="235" /></a>
        </div>

        <div class="separate">
            <div id="menu-top" />
            <div id="menu-center">
                <?php menuPages( $_SESSION["page"] );?>
            </div>
            <div id="menu-bottom" />
        </div>

        <div id="content">
            <?php
                if( isset( $_POST['chosenArticle'] ) )   /* show input fields to mod article */
                    showModArticle( $_POST['chosenArticle'] );  /* got article by it's id */

                elseif( isset( $_POST['articleToModId'] ) )  /* submit article mod */
                    submitModArticle( $_POST['modArticleTitle'], $_SESSION['username']/* set by login made by MATTEO*/, $_POST['modArticleText'], $_POST['articleToModId'] );

                elseif( isset( $_POST['articleToDeleteId'] ) ) /* id of admin to delete */
                    deleteArticle( $_POST['articleToDeleteId'] );

                elseif( isset( $_POST['addNewArticle'] ) )    /* show addNewAdmin form */
                    addNewArticleForm();

                elseif( isset( $_POST['submitNewArticle'] ) )     /* insert new article to database */
                    insertNewArticle( $_POST['newTitle'], $_SESSION['username'], $_POST['newArticle'] );

                else   /* show news selection form */
                    showNewsList();
            ?>
        </div>

        <div class="separate sfondo-footer"><?php bottomPageInfo();?></div>

</body>
</html>
