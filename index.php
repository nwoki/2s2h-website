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
	
<?php
	if (languageSelection())
	{
?>
    <div id="content">
      <div id="padding">
      <?php if($_SESSION['language']=="it"){?>
      	<p class="center">Fu nella calda estate del 2008 che all'universit&agrave; di Padova, dall'incontro di poche menti brillanti, prese vita il progetto conosciuto come 2steps2hell...</p>
        <p class="center">Quel piccolo clan, che allora contava giusto pochi membri, oggi si &egrave; affermato nel panorama nazionale diventando uno dei maggiori sostenitori del tanto semplice quanto entusiasmante fps Urban Terror!</p>
        <p class="center">I 2s2h partecipano alle competizioni indette dalle maggiori leghe quali <strong>ESL</strong>, <strong>ClanBase</strong> e <strong>UrbanZone</strong> conseguendo risultati apprezzabili e si allenano regolarmente per migliorare.</p>
        <p class="center">La nostra community mette a disposizione <strong>server pubblici</strong> in cui testare la propria abilit&agrave; o giocare per il semplice piacere di farlo ed ora offre anche la possibilit&agrave; agli altri clan di prendere in affitto server di qualit&agrave; a prezzi convenienti per poter iniziare o continuare la propria avventura con i giusti strumenti!</p>
        <p class="center"><strong>Enjoy 2s2h</strong></p>
        <br/><br/>
        <p class="center"><strong>Regole dei server</strong></p>
        <ol>
        	<li> I cheat sono severamente proibiti (e puniti col ban a vista).
        	<li> Chiunque pu&ograve; giocare, purch&egrave; rispetti gli altri giocatori.
        	<li> Quando chiamate un voto di kick, spiegate sempre il motivo.
        	<li> Se non sapete riconoscere i cheat, evitate di chiamare un kick per ogni player che &egrave; pi&ugrave; bravo di voi: se &egrave; presente un admin, provate a chiedere a lui.
        	<li> In ogni caso, prima di sparare sentenze, provate a osservare il sospetto cheater da spettatori per un po'.
        	<li> Per il server dethrun: giocate SIA nei blue, SIA nei rossi, mai in una sola delle due squadre. Questo perch&egrave; se voi state sempre rossi, ci sar&agrave; qualcun altro che sar&agrave; sempre blu: vi piacerebbe essere voi?
        	<li> Tutti i dati dei giocatori bannati vengono pubblicati sul nostro sito, nella lista dei ban.
        	<li> Dal momento in cui giocate sui nostri server, acconsentite tacitamente a queste regole e a tutte le loro conseguenze. Se non siete d'accordo su una o pi&ugrave; regole, evitate di giocare sui nostri server.
        	<li> In particolare, la non lettura o non conoscenza di queste regole non &egrave; accettata. Il regolamento viene pubblicizzato ad ogni connessione al server, quindi &egrave; solo responsabilit&agrave; vostra se non lo leggete.
        </ol>
        <br/><br/>
        <div id="donazioni">
        	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="E6M9R7GX33PNW">
			<input type="hidden" name="item_name" value="2Steps2Hell UrT Clan">
			<input type="image" src="https://www.paypal.com/it_IT/IT/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - Il sistema di pagamento online più facile e sicuro!">
			<img alt="" border="0" src="https://www.paypal.com/it_IT/i/scr/pixel.gif" width="1" height="1">
			</form>
		</div>
      <?php }else {?>
        <p class="center">It was in the hot summer of 2008 that at the University of Padua, from the encounter of a few brilliant minds, came to life the project known as 2steps2hell...</p>
        <p class="center">That small clan, which had just a few members, today has emerged on the national scene to become one of the biggest supporters of both simple and exciting FPS game called Urban Terror!</p>
        <p class="center">The 2s2h participate in competitions organized by the major leagues such as <strong>ESL</strong>, <strong>ClanBase</strong> and <strong>UrbanZone</strong> achieving significant results, and exercise regularly to improve.</p>
        <p class="center">Our community provides <strong>public servers</strong> in which test your skills or play for the simple pleasure of it, and now also offers the opportunity for other clans to rent quality servers at affordable prices in order to start or continue your adventure with the right tools!</p>
        <p class="center"><strong>Enjoy 2s2h</strong></p>
        <br/><br/>
        <p class="center"><strong>Servers rules</strong></p>
        <ol>
        	<li> Cheats are strictly forbidden (and punished with an instant ban).
        	<li> Anyone can play, as long as he/she respects the other players.
        	<li> When you call a kick vote, always explain why.
        	<li> If you're not able to recognize cheats, do not call a kick for every player that's better than you: if there is an admin, try asking him.
        	<li> In every case, before firing decisions, try to go spectator and observe the suspected cheater for a while.
        	<li> For the dethrun server: both play in blue and in red, never all the map in one of the teams. This is because if you always are red, there will be someone else who will always be blue. I don't like to be that one: and you?
        	<li> All the data of the banned players are posted on our website in the ban list.
        	<li> From the moment that you play on our servers, you agree silently to these rules and all their consequences. If you do not agree on one or more rules, avoid playing on our servers.
        	<li> In particular, do not read or do not know about these rules is not accepted. These rules are advertised every time you connect to the server, so it's only your responsibility if you do not read them.
        </ol>
        <br/><br/>
        <div id="donazioni">
		    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="E6M9R7GX33PNW">
			<input type="hidden" name="item_name" value="2Steps2Hell UrT Clan">
			<input type="image" src="https://www.paypal.com/en_US/GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online.">
			<img alt="" border="0" src="https://www.paypal.com/it_IT/i/scr/pixel.gif" width="1" height="1">
			</form>
		</div>
      <?php }?>
        </div>  
    </div>

<?php
	}
?>
    <?php bottomPageInfo(); ?>


</body>
</html>
