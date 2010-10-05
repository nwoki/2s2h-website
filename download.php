<?php
    session_start();
	$_SESSION["page"] = "index";
	header( "Refresh:5;".$_GET['d'] );
    require( 'functions/functions.php' );
    updateDownload($_GET['d']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="description" content="<?php echo $description[$_SESSION["page"]]; ?>" />
    <title><?php echo $title[$_SESSION["page"]]; ?></title>
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script src="js/login.js" type="text/javascript"></script>
		<?php if ( isset($_SESSION['status']) && $_SESSION['status'] == 'admin') {?>
		<script src="js/slide-admin.js" type="text/javascript"></script>
    <?php } else {?>
		<script src="js/slide.js" type="text/javascript"></script>
		<?php }?>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />

</head>
<body>
    
    <!-- Panel -->
    <div id="toppanel">
      <div id="panel">
        <div class="content clearfix">
          <div class="left all">
            <?php restrictedArea($_SESSION['status']) ?>
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
      <a href="index.php" title="2step 2hell - Noleggio Server - BanBot"><img alt="" src="img/spacer.gif" width="800" height="235" /></a>
    </div>

    <div class="separate">
      <div id="menu-top"></div>
      <div id="menu-center"><div id="menu"><?php menuPages( $_SESSION["page"] ) ?></div></div>
      <div id="menu-bottom"></div>
    </div>

    <div id="content">
      <div id="padding">
        <p class="center">Download will start automatically in 5 seconds: click <a href="<?php echo $_GET['d']; ?>">here</a> if not.</p>
        </div>  
    </div>


    <div class="separate sfondo-footer"><?php bottomPageInfo(); ?></div>


</body>
</html>
