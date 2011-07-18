<?php
    ob_start();
    session_start();
    require( 'functions/functions.php' );
    checkLanguage();
    ob_end_flush();
	$_SESSION["page"] = "server";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="description" content="<?php echo $description[$_SESSION["page"]]; ?>" />
    <meta name="keywords" content="server rent, server renting, server hosting, server host, urban terror, urt, urt server hosting, server hosting urt" />
    <title><?php echo $title[$_SESSION["page"]]; ?></title>
		<script src="js/jquery-1.4.2.min.js" type="text/javascript" ></script>
		<script src="js/jquery-ui-1.8.4.custom.min.js" type="text/javascript" ></script>
    <?php if ( isset($_SESSION['status']) && $_SESSION['status'] == 'admin') {?>
		<script src="js/slide-admin.js" type="text/javascript"></script>
    <?php } else {?>
		<script src="js/slide.js" type="text/javascript"></script>
		<?php }?>
    <script src="js/login.js" type="text/javascript"></script>
    <!--<script src="js/language.js" type="text/javascript"></script> -->
		<script>
      $(document).ready(function() {
        $(".accordion").accordion({ active: false, collapsible: true, autoHeight: false });
				$('#tabs').tabs();
      });
    </script>
    <link type="text/css" href="css/theme-redblack/jquery-ui-1.8.4.custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/modulo.css" type="text/css" />


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19353394-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

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

<?php
	if (languageSelection())
	{
?>
<div id="content">
  <div id="padding">
    <h1 class="server"><span>Server rent</span></h1>
   	<div id="tabs">
	      <ul>
	      <?php if($_SESSION['language']=="it"){?>
	        <li><a href="#tabs-6">Perch&egrave; scegliere 2s2h?</a></li>
	        <li><a href="#tabs-2">Prezzi</a></li>
	        <li><a href="#tabs-3">Note</a></li>
	        <li><a href="#tabs-4">FAQs</a></li>
	        <li><a href="#tabs-5">Lista server</a></li>
	        <li><a href="#tabs-1">Ordina un server</a></li>
	      <?php }else {?>
	      	<li><a href="#tabs-6"><span class="it">Perch&egrave; scegliere 2s2h?</span><span class="en">Why choose 2s2h?</span></a></li>
	        <li><a href="#tabs-2">Prices</a></li>
	        <li><a href="#tabs-3">Notes</a></li>
	        <li><a href="#tabs-4">FAQs</a></li>
	        <li><a href="#tabs-5">Server's list</a></li>
	        <!--<li><a href="#tabs-1">Order a server</a></li>-->
		  <?php }?>
	      </ul>

	      <div id="tabs-6">
	      	<?php include("servers/why.php"); ?>
	      </div>

	      <div id="tabs-2">
	      	<?php include("servers/offerte.php"); ?>
	      </div>

	      <div id="tabs-3">
	      	 <?php include("servers/note.php"); ?>
	      </div>
	      
		  <div id="tabs-4">
	  		 <?php include("servers/FAQs.php"); ?>
	      </div>

	      <div id="tabs-5">
	         <?php include("servers/listaservers.php"); ?>
	      </div>
	      
	      <!--<div id="tabs-1">
	         <?php include("servers/modulo.php"); ?>
	      </div>-->
	      
	      <div>
  	      <?php if($_SESSION['language']=="it"){?>
	        <p>Per ulteriori informazioni, scrivete sul nostro forum o contattateci direttamente nell'apposita sezione del sito:<a href = '2steps-2hell-contact-us.php' ><strong> QUI </strong></a></p>
	      <?php }else {?>
	        <p>For more information write to us on our forum or contact us directly in the apposite section of our website:<a href="2steps-2hell-contact-us.php"><strong>HERE</strong></a></p>
	      <?php }?>
	      </div>
		<br/>
	  </div>
  </div>
</div>
<?php
	}
?>
<?php bottomPageInfo(); ?>

</body>
</html>
