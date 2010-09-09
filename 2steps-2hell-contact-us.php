<?php
    session_start();
    $_SESSION["page"] = "contact";
    require( 'functions/functions.php' );
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
        <h1 class="contact"><span>Contact Us</span></h1>

        <div class="box-alto">
          <div class="box-basso">
    				<div class="box-medio">
      				<div class="box-testo">

                <h2><span class="irc">irc-icon</span>IRC: You can find all of us on "<em>irc.quakenet.org</em>" @ <em>#2s2h</strong>.</em>
      					<h4>system admins + devs( server renting, bugs ecc )</h4>

                <ul>
                  <li><strong>N3m3s1s</strong> -<span class="email">email</span> n3m3sis<span class="symb">(at)</span>email<span class="symb">(dot)</span>it (BanBot, WebSite)</li>
                  <li><strong>Zamy</strong> -<span class="email">email</span> skyled<span class="symb">(at)</span>alice<span class="symb">(dot)</span>it (BanBot, WebSite)</li>
                  <li><strong>Rambo</strong> -<span class="email">email</span> urt.ks.rambo<span class="symb">(at)</span>gmail<span class="symb">(dot)</span>com (WebSite)</li>
                </ul>

      				</div>
    				</div>
  				</div>
			  </div>

        <div class="box-alto">
          <div class="box-basso">
    				<div class="box-medio">
      				<div class="box-testo">

                 <h2><span class="ts">ts2</span> teamspeak admins</h2>
                 <ul>
                 <li><strong>Heresyarch/Tsujigiri</strong> - <span class="email">@@@</span>heresyarch<span class="symb">(at)</span>hotmail<span class="symb">(dot)</span>it</li></li>
                  <li><strong>Revan</strong> - <span class="email">@@@</span> andre.88<span class="symb">(at)</span>hotmail<span class="symb">(dot)</span>it</li>
                </ul>

      				</div>
    				</div>
  				</div>
			  </div>

       <div class="box-alto">
          <div class="box-basso">
    				<div class="box-medio">
      				<div class="box-testo">
                <h2>BanBot admins 2s2h server</h2>
                <h4>See "IRC" above. All the opped people are also admins on our servers BanBot</h4>
      				</div>
    				</div>
  				</div>
			  </div>

     </div>

  </div>
  <div class="separate sfondo-footer"><?php bottomPageInfo(); ?></div>


</body>
</html>