<?php
    session_start();
		$_SESSION["page"] = "bot";
    require( 'functions/functions.php' );
    
    
	// open the directory 
    $last_dir = "BanBot/last_release/";
    $old_dir = "BanBot/old/";
    
    if ( is_dir($last_dir) ) {
	  	$myDirectory = opendir($last_dir);
	
		// get each entry
		while($entryName = readdir($myDirectory))
		{
			// salvo i link all'ultima versione
			if ( strpos($entryName,'ITA')>-1 ) $last_ita=$entryName;
			else if ( strpos($entryName,'ENG')>-1 ) $last_eng=$entryName;
			else if (substr($entryName, 0, 1) != ".") $last_Array[] = $entryName;
		}

		if (($last_indexCount = count($last_Array) ) > 0) {sort($last_Array);}
		
		closedir($myDirectory);	
	}
	
	if ( is_dir($old_dir) ) {
	  	$myDirectory = opendir($old_dir);
	
		// get each entry
		while($entryName = readdir($myDirectory))
		{
			// salvo i link delle versioni vecchie
			if (substr($entryName, 0, 1) != ".") $old_Array[] = $entryName;
		}

		if (($old_indexCount = count($old_Array) ) > 0) sort($old_Array);
		
		closedir($myDirectory);
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="description" content="<?php echo $description[$_SESSION["page"]]; ?>" />
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

    <div id="content">
      <div id="padding">
        <p class="center"><img src="img/banbot.jpg" align="center" alt="BanBot"></p>
        <div id="tabs">
 
<!-- italiano -->       
        	<ul>
				<li><a href="#tabs-1">BanBot V. 1.1</a></li>
				<li><a href="#tabs-2">Changelog</a></li>
				<li><a href="#tabs-3">Vecchie versioni</a></li>
				<li><a href="#tabs-4">Il futuro</a></li>
		    </ul>
		    <div id="tabs-1" lang="it">
				<p class="center">Un bot che mira ad essere semplice e ad occupare poche risorse della macchina che lo hosta evitando quindi di provocare "lag" non voluti del server.</p>
				<p class="center">Fatto per controllare il gioco di URBAN TERROR 4.1, integra ed utilizza la libreria SQLite3 per contenere i suoi dati: nonstante questo &egrave completamente indipendente, non necessita di alcun software preinstallato.</p>
				<p class="center">Pensato anche per chi affitta server di gioco, &egrave in grado di controllare pi&ugrave di un server con una sola istanza, in maniera totalmente isolata l'uno dall'altro: noi l'abbiamo testato fino a 5.</p>
				<p class="center">Offre molti strumenti utili per gli amministratori dei server, per esempio:</p>
				<br/>
				<ul class="botList">
					<li>Anticheat, con diversi livelli di sicurezza</li>
					<li>Ban permamenti (anche con motivazione)</li>
					<li>Kick, slap, ecc.</li>
					<li>Spostamento di team per i giocatori</li>
					<li>Backup automatico dei file di log</li>
					<li>Comandi che accettano anche parti di nick</li>
					<li>Cambio mappa attuale e successiva</li>
					<li>Riconoscimento amministratori (possono usare anche fake)</li>
				<ul><br/>
				<p class="center">Riassumendo, se ne sta buono e silenzioso, tranne in caso di bisogno, e tiene i vostri server puliti.</p>
				<br/>
				<p class="center">I beta-tester dicono di BanBot:</p>
				<p class="quote">"&egrave semplice e funziona bene, meglio di b3 e cagate varie."</p>
				<p class="quote">"BanBot &egrave un eccellente bot per server Urt. Non bisogna essere esperti per poterlo usare, &egrave alla portata di tutti poich&egrave i comandi sono semplici ed essenziali. Utilissimo per gestire il proprio server in maniera facile ed efficace. Inoltre &egrave dotato di un buon anticheat: nel mio server sono gi&agrave stati bannati 5 players, di cui 2 di clan importanti. Sarebbe perfetto con l'aggiunta di un comando per impostare password nel server, ma penso che presto arriver&agrave anch'esso. Un ottimo bot, lo consiglio a tutti."</p>
				<br/>
				<p class="center">Per maggiori informazioni, leggete la documentazione.</p>
				<p class="center"><a href="<?php echo $last_dir.$last_ita; ?>"><img src="imghold/download.png" alt=""></a></p>
				<p class="center"><a href="<?php echo $last_dir.$last_ita; ?>"><?php echo $last_ita; ?></a> - <a href="#tabs-2">(ChangeLog)</a></p>
				<p class="center">Aiutaci a migliorare BanBot indicandoci bug o dandoci dei suggerimenti: apri un ticket sul nostro <a href="bugtracker/index.php">BugTracker</a>.</p>
				<br/><br/>
				<p class="center">Download correlati:</p>
				<p class="center"><a href="<?php echo $last_dir.$last_eng; ?>"><img src="imghold/download.png" alt=""></a></p>
				<p class="center"><a href="<?php echo $last_dir.$last_eng; ?>"><?php echo $last_eng; ?></a></p>
				<?php
					for($index=0; $index < $last_indexCount; $index++)
						echo '  <p class="center"><a href="'.$last_dir.$last_Array[$index].'"><img src="imghold/download.png" alt=""></a></p>
								<p class="center"><a href="'.$last_dir.$last_Array[$index].'">'.$last_Array[$index].'</a></p>';
				?>

			</div>

			<div id="tabs-2">
				<p class="center"> Changelog: </p>
				<br/>
				<?php 
					include("BanBot/changelog.php");
					$i_indexCount = count($versions);
					for($i=0; $i < $i_indexCount; $i++)
					{
						echo '  <p class="center">'.$versions[$i]['nome'].'</p>';
						echo '<dl>';
						$j_indexCount = count($versions[$i]['info']);
						for($j=0; $j < $j_indexCount; $j++)
						{
							echo '
								<dt>'.$versions[$i]['info'][$j]['data'].'</dt>
								<dd>'.$versions[$i]['info'][$j]['modifica'].'</dt>';
						}
						echo '</dl>';	
					}
				?>
			</div>

			<div id="tabs-3">
				<p class="center"> Downloads delle versioni precedenti: </p>
				<?php 
					//vecchie versioni
					for($index=0; $index < $old_indexCount; $index++)
						echo '  <p class="center"><a href="'.$old_dir.$old_Array[$index].'">'.$old_Array[$index].'</a></p>';
				?>
			</div>
			
			<div id="tabs-4">
				<p class="center"> Caratteristiche che verranno probabilmente aggiunte alle prossime versioni: </p>
				<br/>
				<?php 
					include("BanBot/future.php");
					$i_indexCount = count($future);
					for($i=0; $i < $i_indexCount; $i++)
					{
						echo '  <p class="center">In '.$future[$i]['version'].' :</p>';
						echo '<ul>';
						$j_indexCount = count($future[$i]['info']);
						for($j=0; $j < $j_indexCount; $j++)
						{
							echo '<li>'.$future[$i]['info'][$j]['it'].'</li>';
						}
						echo '</ul><br/>';	
					}
				?>
			</div>
			
		</div>

      </div>
    </div>

    <div class="separate sfondo-footer"><?php bottomPageInfo(); ?></div>

</body>
</html>

<!-- inglese 
			<div class="col2" lang="en">
				<h1 class="inglese"></h1>
				<p class="center">A bot that is designed to be simple and to use few resources of the machine thus to avoid causing unwanted "lags" on server.</p>
				<br/>
				<p class="center">Made to control the game Urban Terror 4.1, it integrates and uses the SQLite3 library to contain your data: spite this is completely independent, requires no preinstalled software.</p>
				<br/>
				<p class="center">Designed also for those who rent game servers, it can controls more than one server with only one instance, in a totally isolated manner from each other: we tested it up to 5.</p>
				<p class="center">It offers many useful tools for server administrators, for example:</p>
				<ul class="botList">
					<li>Anticheat, with different levels of security</li>
					<li>Permanently bans (also with motive)</li>
					<li>Kick, slap, etc.</li>
					<li>Force players to change team</li>
					<li>Automated backup of log files</li>
					<li>Comands accept parts of a players nick</li>
					<li>Change current map and the next one</li>
					<li>Recognition of admins (they can use fakes)</li>
				<ul><br/>
				<p class="center">Summarizing: it stays good and quiet when not needed and keeps your server clean.</p>
				<p class="center">For more information, read the documentation.</p>
				<p class="center">Help us improve BanBot indicating bugs or giving us suggestions: open a ticket on our <a href="bugtracker/index.php">BugTracker</a>.</p>
				<p class="center"><a href="<?php echo $last_dir.$last_eng; ?>"><img src="imghold/download.png" alt=""></a></p>
				<p class="center"><a href="<?php echo $last_dir.$last_eng; ?>"><?php echo $last_eng; ?></a> - <a href="banbotDownloads/ChangeLog_ver1.1.txt" target="_blank">(ChangeLog)</a></p>
				<br/>
				<p class="center">What beta-testers say about BanBot:</p>
				<p class="quote">"It's simple and works well, better than b3 and various crappy bots around."</p>
				<p class="quote">"BanBot is an excellent bot for Urt servers.You don't need to be an expert to use it. Its controls are simple and essential. Useful to manage your server easily and effectively. It also comes with a good anticheat: in my server it has already banned five players, including two of major clans. It would be perfect with the addition of a command to set passwords on the server, but I think it will come soon too. A good bot, I recommend it to everyone."</p>
			</div>-->
