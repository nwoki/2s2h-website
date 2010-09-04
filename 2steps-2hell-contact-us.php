<?php
    session_start();
		$_SESSION["page"] = "contact"; 
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
      <div id="menu-center"><?php menuPages( $_SESSION["page"] ) ?></div>
      <div id="menu-bottom"></div>
    </div>  
	
    	
    <div id="content">
      <div id="padding">
      <h4> IRC </h4>
      <p>
          You can find all of us on "irc.quakenet.org" @ #2s2h.
      </p>
  
      <br/>
  
      <h4>system admins + devs( server renting, bugs ecc )</h4>
      <p>
          <u>N3m3s1s</u> - n3m3sis( at )email( dot )it<br/>
          <u>Zamy</u> - skyled( at )alice( dot )it<br/>
      </p>
  
      <br/>
  
      <h4>teamspeak admins</h4>
      <p>
          <u>Heresyarch/Tsujigiri</u> -<br/>
          <u>Revan</u> - andre.88( at )hotmail( dot )it<br/>
      </p>
  
      <br/>
  
      <h4>BanBot admins 2s2h server</h4>
      <p>
          See "IRC" above. All the opped people are also admins on our servers BanBot
      </p>
    	</div>
    </div>

    
    <div class="separate sfondo-footer"><?php bottomPageInfo(); ?></div>
    
    
</body>
</html>