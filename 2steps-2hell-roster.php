<?php
    session_start();
    $_SESSION["page"] = "roster";
    require( 'functions/functions.php' );
		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="description" content="<?php echo $description[$_SESSION["page"]]; ?>" />
    <title><?php echo $title[$_SESSION["page"]]; ?></title>
		<script src="js/jquery-1.4.2.min.js" type="text/javascript" ></script>
		<script src="js/jquery-ui-1.8.4.custom.min.js" type="text/javascript" ></script>
    <script src="js/slide.js" type="text/javascript"></script>
    <script src="js/login.js" type="text/javascript"></script>
		<script>
      $(document).ready(function() {
        $("#accordion").accordion({ active: false, collapsible: true, autoHeight: false });
				$('#tabs').tabs();
      });
    </script>
    <link type="text/css" href="css/theme-redblack/jquery-ui-1.8.4.custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" /></head>
</html>
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
            <a id="close" style="display: none;" class="close" href="#">Close</a>			
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
      <div id="menu-center"><?php menuPages( $_SESSION["page"] ) ?></div>
      <div id="menu-bottom"></div>
    </div>


    <div id="content">
      <div id="padding">
      
        <h1 class="roster"><span>Roster</span></h1>
       	<div id="tabs">

          <ul>
            <li><a href="#tabs-1">Admins & Devs</a></li>
            <li><a href="#tabs-2">Soldati</a></li>
          </ul>
          
          <div id="tabs-1"><? listRoster(0,3)?></div>
          <div id="tabs-2"><? listRoster(3); ?></div>
            
        </div>
            
      </div>
    </div>


    <div class="separate sfondo-footer"><?php bottomPageInfo(); ?></div>


</body>
</html>