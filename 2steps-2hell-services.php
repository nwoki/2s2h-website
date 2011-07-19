<?php
    ob_start();
    session_start();
    require( 'functions/functions.php' );
    checkLanguage();
    ob_end_flush();
	$_SESSION["page"] = "otherservices";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="description" content="<?php echo $description[$_SESSION["page"]]; ?>" />
    <meta name="keywords" content="server rent, server renting, server hosting, server host, urban terror, urt, urt server hosting, server hosting urt, BanBot, anticheat, ban, list, banlist, service, email, webmail, 2s2h, 2steps2hell" />
    <title><?php echo $title[$_SESSION["page"]]; ?></title>
		<script src="js/jquery-1.4.2.min.js" type="text/javascript" ></script>
		<script src="js/jquery-ui-1.8.4.custom.min.js" type="text/javascript" ></script>
    <?php if ( isset($_SESSION['status']) && $_SESSION['status'] == 'admin') {?>
		<script src="js/slide-admin.js" type="text/javascript"></script>
    <?php } else {?>
		<script src="js/slide.js" type="text/javascript"></script>
		<?php }?>
    <script src="js/login.js" type="text/javascript"></script>
		<script>
      $(document).ready(function() {
        $("#accordion").accordion({ active: false, collapsible: true, autoHeight: false });
				$('#tabs').tabs();
      });
    </script>
    <link type="text/css" href="css/theme-redblack/jquery-ui-1.8.4.custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/services.css" type="text/css" />
    <link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />


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
      	<br/> 
      	<?php if($_SESSION['language']=="it"){?>
        <div id="tabs">
          <ul>
            <li><a href="#tabs-1"><span class="it">2s2h email</span><span class="en">2s2h email</span></a></li>
            <li><a href="#tabs-2"><span class="it">Lista ban</span><span class="en">Ban list</span></a></li>
            <li><a href="#tabs-3"><span class="it">Host mappe</span><span class="en">Maps host</span></a></li>
          </ul>
		    
          <div id="tabs-1">
            <?PHP include('services/email.php') ?>
          </div>
      
          <div id="tabs-2">
            <?PHP include('services/banlist.php') ?>  
          </div>
          
          <div id="tabs-3">
            <?PHP include('services/maps.php') ?>  
          </div>		
		</div>
        
        <!-- Bottone per le donazioni -->
        <br/><br/>
        <div class="donazioni">
        	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="E6M9R7GX33PNW">
			<input type="hidden" name="item_name" value="2Steps2Hell UrT Clan">
			<input type="image" src="https://www.paypal.com/it_IT/IT/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - Il sistema di pagamento online più facile e sicuro!">
			<img alt="" border="0" src="https://www.paypal.com/it_IT/i/scr/pixel.gif" width="1" height="1">
			</form>
			<p class="donate"> Se apprezzi il nostro lavoro e vuoi in qualche modo darci una mano, per favore fai una donazione al nostro clan. <br/>
			Ti ringraziamo infinitamente =)</p>
		</div>
		<?php }else {?>
		<div id="tabs">
          <ul>
            <li><a href="#tabs-1">2s2h email</a></li>
            <li><a href="#tabs-2">Ban list</a></li>
            <li><a href="#tabs-3">Maps host</a></li>
          </ul>
		    
          <div id="tabs-1">
            <?PHP include('services/email.php') ?>
          </div>
      
          <div id="tabs-2">
            <?PHP include('services/banlist.php') ?>  
          </div>
          
          <div id="tabs-3">
            <?PHP include('services/maps.php') ?>  
          </div>		
		</div>
        
        <!-- Bottone per le donazioni -->
        <br/><br/>
		<div class="donazioni">
		    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="E6M9R7GX33PNW">
			<input type="hidden" name="item_name" value="2Steps2Hell UrT Clan">
			<input type="image" src="https://www.paypal.com/en_US/GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online.">
			<img alt="" border="0" src="https://www.paypal.com/it_IT/i/scr/pixel.gif" width="1" height="1">
			</form>
			<p class="donate"> If you appreciate our work and want to somehow give us a hand, please make a donation to our clan.<br/>
			Thank you =)</p>
		</div>
		<?php }?>
		<br/>
      </div>
    </div>
<?php
	}
?>
<?php bottomPageInfo(); ?>

</body>
</html>
