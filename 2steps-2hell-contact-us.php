<?php
    ob_start();
    session_start();
    require( 'functions/functions.php' );
    checkLanguage();
    ob_end_flush();
    $_SESSION["page"] = "contact";
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
      <a href="index.php"><img alt="" src="img/spacer.gif" width="800" height="235" /></a>
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
        <h1 class="contact"><span>Contact Us</span></h1>

		<div class="box-alto">
			<div class="box-basso">
				<div class="box-medio">
					<div class="box-testo">
						<?php if ($_SESSION["language"]=="it") { ?>
						<h2><span class="irc">irc-icon</span>IRC: Puoi trovarci tutti sul canale <em>#2s2h</strong></em> @ "<em>irc.quakenet.org</em>".
						<h4>amministratori + programmatori ( noleggio server, bugs, ecc )</h4>
						<ul>
						<li><strong>N3m3s1s</strong> -<span class="email">email</span> n3m3s1s<span class="symb">(at)</span>2s2h<span class="symb">(dot)</span>com (Noleggio server & admin, BanBot, WebSite)</li>
						<li><strong>Zamy</strong> -<span class="email">email</span> zamy<span class="symb">(at)</span>2s2h<span class="symb">(dot)</span>com (Noleggio server & admin, BanBot, WebSite)</li>
						<li><strong>Rambo</strong> -<span class="email">email</span> urt.ks.rambo<span class="symb">(at)</span>gmail<span class="symb">(dot)</span>com (WebSite)</li>
						</ul>
						<?php }else { ?>
						<h2><span class="irc">irc-icon</span>IRC: You can find all of us on <em>#2s2h</strong></em> @ "<em>irc.quakenet.org</em>".
						<h4>system admins + devs ( server renting, bugs etc )</h4>
						<ul>
						<li><strong>N3m3s1s</strong> -<span class="email">email</span> n3m3s1s<span class="symb">(at)</span>2s2h<span class="symb">(dot)</span>com (Server renting & admin, BanBot, WebSite)</li>
						<li><strong>Zamy</strong> -<span class="email">email</span> zamy<span class="symb">(at)</span>2s2h<span class="symb">(dot)</span>com (Server renting & admin, BanBot, WebSite)</li>
						<li><strong>Rambo</strong> -<span class="email">email</span> urt.ks.rambo<span class="symb">(at)</span>gmail<span class="symb">(dot)</span>com (WebSite)</li>
						</ul>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>

		<div class="box-alto">
			<div class="box-basso">
				<div class="box-medio">
					<div class="box-testo">
						<?php if ($_SESSION["language"]=="it") { ?>
						<h2><span class="ts">ts2</span> admins di teamspeak </h2>
						<ul>
						<li><strong>Heresyarch/Tsujigiri</strong> - <span class="email"></span>heresy<span class="symb">(at)</span>2s2h<span class="symb">(dot)</span>com</li></li>
						<li><strong>Revan</strong> - <span class="email"></span>revan<span class="symb">(at)</span>2s2h<span class="symb">(dot)</span>com</li>
						</ul>
						<?php }else { ?>
						<h2><span class="ts">ts2</span> teamspeak admins</h2>
						<ul>
						<li><strong>Heresyarch/Tsujigiri</strong> - <span class="email"></span>heresy<span class="symb">(at)</span>2s2h<span class="symb">(dot)</span>com</li></li>
						<li><strong>Revan</strong> - <span class="email"></span>revan<span class="symb">(at)</span>2s2h<span class="symb">(dot)</span>com</li>
						</ul>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>

		<div class="box-alto">
			<div class="box-basso">
				<div class="box-medio">
					<div class="box-testo">
						<?php if ($_SESSION["language"]=="it") { ?>
				        <h2>BanBot admins dei server 2s2h</h2>
				        <h4>Guardate "IRC" qua sopra. Tutte le persone che sono amministratori del canale sono anche amministratori dei server.</h4>
				        <?php }else { ?>
				        <h2>BanBot admins 2s2h server</h2>
				        <h4>See "IRC" above. All the opped people are also admins on our servers BanBot</h4>
				        <?php } ?>
	  				</div>
				</div>
			</div>
		</div>
	</div>

  </div>
<?php
	}
?>
<?php bottomPageInfo(); ?>


</body>
</html>
