<?php
	ob_start();
    session_start();
    require( 'functions/functions.php' );
    checkLanguage();
    ob_end_flush();
    $_SESSION["page"] = "index";
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
	
<?PHP
	if (languageSelection())
	{
?>
    <div id="content">
      <div id="padding">
        <p class="center">Fu nella calda estate del 2008 che all'universit&agrave di Padova, dall'incontro di poche menti brillanti, prese vita il progetto conosciuto come 2steps2hell...</p>
        <p class="center">Quel piccolo clan, che allora contava giusto pochi membri, oggi si &egrave affermato nel panorama nazionale diventando uno dei maggiori sostenitori del tanto semplice quanto entusiasmante fps Urban Terror!</p>
        <p class="center">I 2s2h partecipano alle competizioni indette dalle maggiori leghe quali <strong>ESL</strong>, <strong>ClanBase</strong> e <strong>UrbanZone</strong> conseguendo risultati apprezzabili e si allenano regolarmente per migliorare.</p>
        <p class="center">La nostra community mette a disposizione <strong>server pubblici</strong> in cui testare la propria abilit&agrave o giocare per il semplice piacere di farlo ed ora offre anche la possibilit&agrave agli altri clan di prendere in affitto server di qualit&agrave a prezzi convenienti per poter iniziare o continuare la propria avventura con i giusti strumenti!</p>
        <p class="center"><strong>Enjoy 2s2h</strong></p>
        </div>  
    </div>

<?PHP
	}
?>
    <?php bottomPageInfo(); ?>


</body>
</html>
