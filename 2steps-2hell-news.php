<?php
    session_start();
		$_SESSION["page"] = "news";
    require( 'functions/functions.php' );
    debugCode ( );
    $test = new WebClass(); /* used to check if database is setup right */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="description" content="<?php echo $description[$_SESSION["page"]]; ?>" />
    <title><?php echo $title[$_SESSION["page"]]; ?></title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />


</head>
<body>
    <div id="header">
      <a href="index.php" title="2step 2hell - Noleggio Server - BanBot"><img alt="" src="img/spacer.gif" width="800" height="235" /></a>
    </div>

    <div class="separate">
        <div id="menu-top"></div>
            <div id="menu-center"><div id="menu"><?php menuPages( $_SESSION["page"] )?></div></div>
        <div id="menu-bottom"></div>
    </div>

    <div id="content">
        <div id="padding">
            <h1 class="news"><span>News</span></h1>
                <?php loadNews( /* put count to see up to how many articles to load? */);?>
        </div>
    </div>

    <div class="separate sfondo-footer">
        <?php
            bottomPageInfo();
        ?>
    </div>

</body>
</html>
