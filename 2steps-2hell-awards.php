<?php
    session_start();
		$_SESSION["page"] = "index"; 
    require( 'functions/functions.php' );
    debugCode ( ); 
    $test = new WebClass(); /* used to check if database is setup right */
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <title>2Steps2Hell - Home</title>

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
        <h2>
            AWARDS
        </h2>
    
        <center>
            <img src="img/awards/esl/DD3.jpg" >
        </center>

    </div>
    </div>

    
    <div class="separate sfondo-footer"><?php bottomPageInfo(); ?></div>
    
    
</body>
</html>