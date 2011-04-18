<?php
    session_start();
		$_SESSION["page"] = "server";
    require( 'functions/functions.php' );
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
    <script src="js/language.js" type="text/javascript"></script>
		<script>
      $(document).ready(function() {
        $(".accordion").accordion({ active: false, collapsible: true, autoHeight: false });
				$('#tabs').tabs();
      });
    </script>
    <link type="text/css" href="css/theme-redblack/jquery-ui-1.8.4.custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
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

    <div id="content">
      <div id="padding">
        <h1 class="server"><span>Server rent</span></h1>
        <p class="center">
          <a href="#" rel="it" class="change"><img src="img/bandiera_italia.jpg" alt="" /> </a>
          <a href="#" rel="en" class="change"><img src="img/bandiera_inglese.jpg" alt="" /> </a>
        </p>
       	<div id="tabs">

          <ul>
            <li><a href="#tabs-1"><span class="it">Perch&egrave; scegliere 2s2h?</span><span class="en">Why choose 2s2h?</span></a></li>
            <li><a href="#tabs-6"><span class="it">Prezzi</span><span class="en">Prices</span></a></li>
            <li><a href="#tabs-2"><span class="it">Modalit&agrave; di pagamento</span><span class="en">Payment Types</span></a></li>
            <li><a href="#tabs-3"><span class="it">Note</span><span class="en">Notes</span></a></li>
            <li><a href="#tabs-4"><span class="it">FAQs</span><span class="en">FAQs</span></a></li>
            <li><a href="#tabs-5"><span class="it">Lista server</span><span class="en">Server's list</span></a></li>
          </ul>

          <div id="tabs-1">
          	<div class="it">
		        <p>2s2h &egrave; un clan che da anni gioca ad <strong>urban terror</strong> e partecipa a competizioni. Essendo noi diretti utilizzatori dei server di gioco che offriamo non possiamo <strong>venir meno sulla qualit&agrave;</strong>.</p>
		        <p>Ci&ograve che facciamo &egrave; dunque <strong>creare un'alternativa</strong> ai prodotti che ci propone il mercato
		        che spesso <strong>mancano</strong> della qualit&agrave; necessaria oppure hanno <strong>prezzi proibitivi</strong>.</p>
		        <p>Il nostro scopo &egrave; quindi il fornire dei veri server, in cui sia piacevole giocare, ad un <strong>prezzo accessibile a tutti</strong>.</p>
		        <p>Su tutti i nostri server &egrave; installata <strong>la patch</strong> che impedisce di prenderne il controllo tramite un voto.</p>
		        <p>In pi&ugrave su richiesta verr&agrave fornito gratuitamente <strong>BanBot</strong> sui <strong>server pubblici</strong>, indicati nei pacchetti.</p><br/>
		        <p>Disponiamo di un server italiano e di uno francese (quest'ultimo, <strong>ideale per i tornei</strong>).</p>
		    </div>
		    <div class="en">
		    	<p>2s2h is a clan that has played for years <strong>Urban Terror</strong> and still participates in competitions. Since we are direct users of game servers that we offer, <strong>we cannot fail on the quality</strong>.</p>
		        <p>What we do is therefore to <strong>create an alternative</strong> to the products that you can find on the market that often <strong>lack</strong> the necessary quality or have <strong>prohibitive prices</strong>.</p>
		        <p>Our aim is to provide real servers, where it is pleasant to play at a price <strong>accessible to all</strong>.</p>
		        <p>On all of our servers we have installed the <strong>patch</strong> that prevents the game servers from being exploited b a bug accessable via vote.</p>
		        <p>In addition to the request of a server we will provide free <strong>BanBot</strong> service on <strong>public servers</strong>, listed in the packages.</p><br/>
		        <p>We currently have two servers: an italian one and a french one ( the last one is <strong>ideal for tournaments</strong> ).</p>
		    </div>
          </div>

          <div id="tabs-6">
          	<div class="it">
				    <p>Le nostre offerte:<br/></p>
				    <div class="accordion">

				      <h3><a href="#">cw pack &euro; 13,00 </a></h3>
				      <div>
				        <p>Il pacchetto essenziale, consiste di un <strong>server di gioco privato</strong> con:</p>
				        <ul class="list" >
				            <li>11 slot = 5 giocatori per squadra pi&ugrave; un eventuale referee</li>
				            <li>Server voIP 10 slot codec speex 12,3kbps o superiore<br/><span class="small">[in base alla banda disponibile per garantire sempre le migliori prestazioni del game server]</span></li>
				            <li>Controllo server di gioco: <strong>rcon</strong></li>
				            <li>Controllo server voIP: <strong>server admin</strong></li>
				        </ul>
				        <p><strong>Confronto prezzi</strong>:<br/>
				        gamesclan.it -> &euro; 14.75 <span class="small">[12 game slot]</span>.<br/>
				        n1ping.com -> &euro; 13,00 con servizio awn <span class="small">[il server si arresta ogni volta che rimane vuoto e va riattivato via browser]</span>; &euro; 18,00 server standard, sempre attivo.
				        </p>
				      </div>

				      <h3><a href="#">cw pack essential &euro; 16,00</a></h3>
				      <div>
				        <ul class="list">
				          <li>Server di gioco <strong>pubblico</strong> da 12 slot</li>
				          <li>Server voIP da 15 slot, codec speex 16,3kbps o superiore<br/><span class="small">[in base alla banda disponibile per garantire sempre le migliori prestazioni del game server]</span></li>
				          <li>Controllo server di gioco: <strong>rcon</strong>, <strong>BanBot</strong></li>
				          <li>Controllo server voIP: <strong>server admin</strong></li>
				        </ul>
				        <strong>Confronto prezzi</strong>:<br/>
				        gamesclan.it -> &euro; 19,00<br/>
				        n1ping.com -> std &euro; 19,00<br/>
				      </div>

				      <h3><a href="#">cw pack plus  &euro; 18,00</a></h3>
				      <div>
				        <p>Questo pacchetto consiste in un <strong>server</strong> di <strong>gioco privato</strong></p>
				          <ul class="list">
				            <li>15 slot = 5 giocatori + 2 per squadra + referee</li>
				            <li>Server voIP da 20 slot codec speex 19,5kbps o superiore<br/><span class="small">[in base alla banda disponibile per garantire sempre le migliori prestazioni del game server]</span></li>
				            <li>Controllo server di gioco: <strong>rcon</strong></li>
				            <li>Controllo server voIP: <strong>server admin</strong></li>
				          </ul>
				          <strong>Confronto prezzi</strong>:<br/>
				          gamesclan.it -> &euro; 22,00 <span class="small">[16 games slot]</span><br/>
				          n1ping.com -> std &euro; 22,00

				      </div>

				      <h3><a href="#">clan pack 21&euro;</a></h3>
				      <div>
				        <ul class="list">
				          <li>Server di gioco pubblico da 14 slot + 4 slot privati</li>
				          <li>Server voIP da 20 slot, codec speex 19,5kbps o superiore<br/><span class="small">[in base alla banda disponibile per garantire sempre le migliori prestazioni del game server]</span></li>
				          <li>Controllo server di gioco: <strong>rcon, BanBot</strong></li>
				          <li>Controllo server voIP: <strong>server admin</strong></li>
				        </ul>
				        <strong>confronto prezzi</strong>:<br/>
				        gamesclan.it -> &euro; 27,00<br/>
				        n1ping.com -> std &euro; 23,00<br/>
				      </div>

				      <h3><a href="#">clan pack extra &euro; 26,00</a></h3>
				      <div>
				        <ul class="list">
				          <li>Server di <strong>gioco pubblico</strong> da 20 slot</li>
				          <li>Server voIP da 25 slot codec speex 25,9kbps o superiore<br/><span class="small">[in base alla banda disponibile per garantire sempre le migliori prestazioni del game server]</span></li>
				          <li>Controllo server di gioco: <strong>rcon, BanBot</strong></li>
				          <li>Controllo server voIP: <strong>server admin</strong></li>
				        </ul>
				        <strong>Confronto prezzi</strong>:<br/>
				        gamesclan.it -> &euro; 30,00<br/>
				        n1ping.com -> non concepisce server pi&ugrave; grandi di 18 slot
				        </p>
				      </div>

				    </div>

				    <p>Tutte le nostre offerte prevedono:</p>
				    <ul class="list" >
				      <li>Un game server di Urban Terror, pubblico o privato, con un numero di slot che varia a seconda del pacchetto scelto</li>
				      <li>Un server <strong>Teamspeak</strong> ( Ts2 o Ts3 ) con un numero di slot che varia a seconda del pacchetto scelto</li>
				      <li>Pi&ugrave; di <strong>5GB</strong> di spazio personale</li>
				      <li><strong>Controllo totale</strong> del server, con accesso <strong>SSH</strong> ed <strong>FTP</strong></li>
				      <li>Spazio <strong>FTP</strong> per il download automatico delle <strong>mappe extra</strong> messe sul proprio server (in comune tra tutti i server)</li>
				      <li>Possibilit&agrave; di accesso sia tramite <strong>ip</strong>, che <strong>dns</strong> ( <strong>server.2s2h.com</strong> )</li>
				      <li>I server sono <strong>SEMPRE ATTIVI</strong>, <strong>24 ore su 24</strong>, non on-demand</li>
				    </ul>
			</div>

			<div class="en">
				    <p>Our offers:<br/></p>
				    <div class="accordion">

				      <h3><a href="#">cw pack &euro; 13,00 </a></h3>
				      <div>
				        <p>The cw package consists of a <strong>private game server</strong> with:</p>
				        <ul class="list" >
				            <li>11 player slots = 5 players per team plus a possible referee</li>
				            <li>Server voIP 10 slots codec speex 12,3kbps or higher<br/><span class="small">[according to the available bandwidth to ensure the best performance of the game server]</span></li>
				            <li>Game server controls: <strong>rcon</strong></li>
				            <li>VoIP server controls: <strong>server admin via web</strong></li>
				        </ul>
				        <p><strong>Comparing prices</strong>:<br/>
				        gamesclan.it -> &euro; 14.75 <span class="small">[12 game slots]</span>.<br/>
				        n1ping.com -> &euro; 13,00 with awn service <span class="small">[the server goes down every time it is empty and must be reactivated via browser]</span>; &euro; 18,00 standard server, always active.
				        </p>
				      </div>

                    <h3><a href="#">cw essential pack &euro; 16,00</a></h3>
				      <div>
				        <ul class="list">
				          <li><strong>Public</strong> game server 12 slots</li>
				          <li>VoIP server 15 slot, codec speex 16,3kbps or higher<br/><span class="small">[according to the available bandwidth to ensure the best performance of the game server]</span></li>
				          <li>Game server controls: <strong>rcon, BanBot</strong></li>
				          <li>VoIP server controls: <strong>server admin</strong></li>
				        </ul>
				        <strong>Comparing prices</strong>:<br/>
				        gamesclan.it -> &euro; 19,00<br/>
				        n1ping.com -> std &euro; 19,00<br/>
				      </div>

				      <h3><a href="#">cw pack plus  &euro; 18,00</a></h3>
				      <div>
				        <p>The cw plus package consists of a <strong>private game server</strong> with:</p>
				          <ul class="list">
				            <li>15 slots = 5 players + 2 sub per team + referee</li>
				            <li>VoIP server 20 slot, codec speex 19,5kbps or higher<br/><span class="small">[according to the available bandwidth to ensure the best performance of the game server]</span></li>
				            <li>Game server controls: <strong>rcon</strong></li>
				            <li>VoIP server controls: <strong>server admin</strong></li>
				          </ul>
				          <strong>Comparing prices</strong>:<br/>
				          gamesclan.it -> &euro; 22,00 <span class="small">[16 game slots]</span><br/>
				          n1ping.com -> std &euro; 22,00

				      </div>

				      <h3><a href="#">clan pack 21&euro;</a></h3>
				      <div>
				        <ul class="list">
				          <li><strong>Public</strong> game server 14 slots + 4 private slots</li>
				          <li>VoIP server 20 slot, codec speex 19,5kbps or higher<br/><span class="small">[according to the available bandwidth to ensure the best performance of the game server]</span></li>
				          <li>Game server controls <strong>rcon, BanBot</strong></li>
				          <li>VoIP server controls: <strong>server admin</strong></li>
				        </ul>
				        <strong>Comparing prices</strong>:<br/>
				        gamesclan.it -> &euro; 27,00<br/>
				        n1ping.com -> std &euro; 23,00<br/>
				      </div>

				      <h3><a href="#">clan pack extra &euro; 26,00</a></h3>
				      <div>
				        <ul class="list">
				          <li><strong>Public</strong> game server 20 slots</li>
				          <li>VoIP server 25 slots, codec speex  25,9kbps or higher<br/><span class="small">[according to the available bandwidth to ensure the best performance of the game server]</span></li>
				          <li>Game server controls <strong>rcon, BanBot</strong></li>
				          <li>VoIP server controls: <strong>server admin</strong></li>
				        </ul>
				        <strong>Comparing prices</strong>:<br/>
				        gamesclan.it -> &euro; 30,00<br/>
				        n1ping.com -> doesn't sell servers with more than 18 slots
				        </p>
				      </div>

				    </div>

				    <p>All our packages include:</p>
				    <ul class="list" >
				      <li>An Urban Terror game server, public or private, with a number of slots depending on the package chosen</li>
				      <li>A <strong>Teamspeak</strong> server (TS2 or TS3) with slots depending on the package chosen</li>
				      <li>More than <strong>5GB</strong> of personal disk space</li>
				      <li><strong>Total control</strong> of the server, with <strong>SSH and FTP</strong> access</li>
				      <li>FTP space for the <strong>automatic download of extra maps</strong> installed on your server (shared between all servers)</li>
				      <li>Possibility of access via <strong>IP</strong> or <strong>dns</strong> domain name(like "server.2s2h.com")</li>
				      <li>Our servers are <strong>ALWAYS ACTIVE</strong>, 24 hours on 24, not on-demand</li>
				    </ul>
				</div>
          </div>

          <div id="tabs-2">
		      <div class="it">
		        <p>Accettiamo pagamenti via <strong>Paypal</strong> o versamento su carte <strong>Postepay</strong></p>
		      </div>
		      <div class="en">
		      	<p>We accept payments via <strong>Paypal</strong> or transfers to <strong>Postepay</strong></p>
		      </div>
          </div>

          <div id="tabs-3">
          	 <div class="it">
		        <ul class="list">
		          <li>Tutti i prezzi indicati si riferiscono al <strong>noleggio mensile</strong>.</li>
		          <li>I server privati <strong>devono</strong> avere sempre impostata una password per l'accesso.</li>
		          <li>I server pubblici possono essere usati con o senza password per l'accesso.</li>
		          <li>Gli slot privati sono degli slot speciali riservati ai membri del clan in possesso della password per il loro utilizzo (possono entrare anche se il server &egrave pieno).<br/>Possono esserne impostati di pi&ugrave di quelli indicati, ma il numero di slot totali non pu&ograve superare il limite indicato.</li>
		        </ul>
		     </div>
		     <div class="en">
		        <ul class="list">
		          <li>All prices refer to the <strong>monthly rental</strong>.</li>
		          <li>The private servers <strong>must</strong> always a password for access set.</li>
		          <li>Public servers can be used with or without a password for access.</li>
		          <li>The private slots are special slots reserved for members of the clan that have the password for their use (they can enter even if the server is full).<br/>They can be set to more than originally indicated, but the total number of slots cannot exceed the limit.</li>
		        </ul>
		     </div>
          </div>

      		<div id="tabs-4">
      			<div class="it">
				    <p>D - <strong>&Egrave; possibile lanciare script python tramite accesso ssh?</strong></p>
				    <p>R - yep. Attualmente non c'&egrave; python disponibile per tutti gli utenti, basta metterlo.
				    Se &egrave per uno script di qualche esotica utilit&agrave; per voi ok, se &egrave; per un bot, abbiamo
				    deciso di non accettarli.</p>
				    <br/>
				    <p>D - <strong>I gameserver girano su macchine virtuali o direttamente su server reali?</strong></p>
				    <p>R - Direttamente su server reali.</p>
				    <br/>
				    <p>D - <strong>Qual'&egrave; il rapporto RAM totale macchina/numero di gameserver?</strong></p>
				    <p>R - Sulla macchina italiana, 2GB/4gameserver (ovviamente non ci sono solo quelli, vedi servizi di sistema, ma c'&egrave; un
				    ampio margine, attualmente &egrave; libero ancora quasi un giga.
				    Non abbiamo intenzione comunque di salire di pi&ugrave; di 4 server per 2 giga, tranne rare eccezioni, per
				    esempio se sono server piccolissimi e privati, per un quinto.)<br/>
				    In ogni caso, se considerate che un singolo game server di UrT occupa circa 200MB,
				    vedete da soli che stiamo belli abbondanti :)</p>
				    <br/>
				    <p>D - <strong>&Egrave; ammesso personalizzare lo script bash di start del gameserver?</strong></p>
				    <p>R - Ovviamente si. Noi ne diamo gi&agrave; uno, ma &egrave; possibile cambiarlo tranquillamente.<br />Ovviamente se questo non compromette anche gli altri server.</p>
				</div>
				<div class="en">
				    <p>Q - <strong>Can we run python scripts via ssh access?</strong></p>
				    <p>A - yep. Currently, python is not available for all users, but we can easily add it. If it is for a personal script of some use to you ok, but if it's for a bot, we decided not to accept them.</p>
				    <br/>
				    <p>Q - <strong>Is the game server running on virtual machines or directly on real servers?</strong></p>
				    <p>A - Directly on real servers.</p>
				    <br/>
				    <p>Q - <strong>What is the relationship RAM total machine / number of gameserver?</strong></p>
				    <p>A - On the Italian machine, 2GB/4gameserver (obviously there are other services, see system services, but there is a wide margin between used and free ram that is almost 1GB).
				    We are not going to use more than 4 servers, with rare exceptions, for example, if servers are very small and private, there might be room for a fifth.)<br/>
				    In any case, if you consider that a single UrT game server takes up about 200MB, you can see for ourselves that we are abundant with free ram space :)</p>
				    <br/>
				    <p>Q - <strong>Am I allowed to customize the bash script used to start the game server?</strong></p>
				    <p>A - Obviously yes. We will give you one already, but you can change it according to your use.<br/>Of course only if this does not affect the other servers.</p>
				</div>
          </div>

          <div id="tabs-5">
            <div class="it">
             <p>Potete provare tranquillamente i nostri server, sia quelli italiani che quelli francesi.</p>
             <p>In particolare, per provare quello italiano:<br/>
             <strong>2s2h return ITA #1 : \connect it.2s2h.com</strong></p>
             <p>Mentre, per provare quello francese:<br/>
             <strong>2s2h EU ITA #1 : \connect eu.2s2h.com</strong></p>
             <p>Se trovate il server pieno o con la password, riprovate pi&ugrave; tardi.</p>
             
             <p>Attualmente sono disponibili:</P>
             <ul class="list">
             	<li>server italiani: <strong>3</strong></li>
             	<li>server francesi: <strong>4</strong></li>
             </ul>
            </div>
            <div class="en">
             <p>You can try out our servers, both italian and french ones.</p>
             <p>To try the italian one: <br/>
             <strong>2s2h return ITA #1 : \connect it.2s2h.com</strong></p>
             <p>To try the french one:<br/>
             <strong>2s2h EU ITA #1 : \connect eu.2s2h.com</strong></p>
             <p>If the servers are full or password protected, try again later</p>
             
             <p>Currently available:</P>
             <ul class="list">
             	<li>Italian servers: <strong>3</strong></li>
             	<li>French servers: <strong>4</strong></li>
             </ul>
            </div>
         </div>
          
          <div class="it">
            <p>Per ulteriori informazioni, scrivete sul nostro forum o contattateci direttamente nell'apposita sezione del sito:<a href = '2steps-2hell-contact-us.php' ><strong> QUI </strong></a></p>
          </div>
          <div class="en">
            <p>For more information write to us on our forum or contact us directly in the apposite section of our website:<a href="2steps-2hell-contact-us.php"><strong>HERE</strong></a></p>
          </div>

		  </div>

      </div>
    </div>

    <div class="separate sfondo-footer"><?php bottomPageInfo(); ?></div>

</body>
</html>
