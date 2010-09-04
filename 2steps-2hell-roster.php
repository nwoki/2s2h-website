<?php
    session_start();
		$_SESSION["page"] = "roster"; 
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
    <!-- only admins and soldiers, too much hastle in adding new perople on wannabe ecc -->
    <h3>Admins & Devs</h3>

    <div align='center'>
        <a href='#n3m3s1s' >N3m3s1s</a>
        <a href='#zamy' >Zamy</a>
        <a href='#heresyarch' >Heresyarch</a>
    </div>

    <br/>

    <div id="n3m3s1s" >
        <fieldset>
            <legend>n3m3s1s</legend>
            <img src="img/people/n3m3s1s.jpg" align="left" alt="nemesis-foto" width="20%"/>
            <p>
                inserire descrizione
            </p>
        </fieldset>
    </div>

    <br/>

    <div id="zamy" >
        <fieldset>
            <legend align='right' >Zamy</legend>
            <img src="img/people/anonymous.jpg" align="right" alt="nemesis-foto" width="20%"/>
            <p>
                inserire descrizione
            </p>
        </fieldset>
    </div>

    <br/>

    <div id="heresyarch" >
        <fieldset>
            <legend>Heresyarch/Cityhunter</legend>
            <img src="img/people/nic.jpg" align="left" alt="nemesis-foto" width="20%"/>
            <p>
                inserire descrizione
            </p>
        </fieldset>
    </div>

    <br/>
    <br/>

    <h3>Soldati</h3>

    <div align='center'>
        <a href='#revan' >Revan</a>
        <a href='#kolbebo' >Kolbebo</a>
        <a href='#roger' >Roger</a>
    </div>

    <br/>

    <div id="revan" >
        <fieldset>
            <legend align='right' >Revan</legend>
            <img src="img/people/revan.jpg" align="right" alt="nemesis-foto" width="20%"/>
            <p>
                inserire descrizione
            </p>
        </fieldset>
    </div>

    <br/>

    <div id="kolbebo" >
        <fieldset>
            <legend>Kolbebo</legend>
            <img src="img/people/anonymous.jpg" align="left" alt="nemesis-foto" width="20%"/>
            <p>
                inserire descrizione
            </p>
        </fieldset>
    </div>

    <br/>

    <div id="roger" >
        <fieldset>
            <legend align='right' >Roger</legend>
            <img src="img/people/roger.jpg" align="right" alt="nemesis-foto" width="20%"/>
            <p>
                inserire descrizione
            </p>
        </fieldset>
    </div>

      </div>
    </div>

    
    <div class="separate sfondo-footer"><?php bottomPageInfo(); ?></div>
    
    
</body>
</html>