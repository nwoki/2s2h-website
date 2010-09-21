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
    <title><?php echo $title[$_SESSION["page"]]; ?></title>
		<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.4.custom.min.js"></script>
    <script>
      $(document).ready(function() {
        $("#accordion").accordion({ active: false, collapsible: true, autoHeight: false });
				$('#tabs').tabs();
      });
    </script>
    <link type="text/css" href="css/theme-redblack/jquery-ui-1.8.4.custom.css" rel="stylesheet" />
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
        <h1 class="server"><span>Noleggio Server</span></h1>
       	<div id="tabs">

          <ul>
            <li><a href="#tabs-1">Perch&egrave; scegliere 2s2h?</a></li>
            <li><a href="#tabs-6">Offerte</a></li>
            <li><a href="#tabs-2">Modalit&agrave; di pagamento</a></li>
            <li><a href="#tabs-3">Note</a></li>
            <li><a href="#tabs-4">FAQs</a></li>
            <li><a href="#tabs-5">Lista Server</a></li>
          </ul>

          <div id="tabs-1">
            <p>2s2h &egrave; un clan che da anni gioca ad <strong>urban terror</strong> e partecipa a competizioni. Essendo noi diretti utilizzatori dei server di gioco che offriamo non possiamo <strong>venir meno sulla qualit&agrave;</strong>.</p>
            <p>Ci&ograve che facciamo &egrave; dunque <strong>creare</strong> un'<strong>alternativa</strong> ai prodotti che ci propone il mercato
            che spesso <strong>mancano</strong> della qualit&agrave; necessaria oppure hanno <strong>prezzi proibitivi</strong>.</p>
            <p>Il nostro scopo &egrave; quindi il fornire dei veri server, in cui sia piacevole giocare, ad un <strong>prezzo accessibile a tutti</strong>.</p>
            <p>Su tutti i nostri server &egrave; installata <strong>la patch</strong> che impedisce di prenderne il controllo tramite un voto.</p>
            <p>In pi&ugrave su richiesta, appena sar&agrave rilasciata la versione ufficiale, verr&agrave fornito gratuitamente <strong>BanBot</strong> sui <strong>server pubblici</strong>, indicati nei pacchetti.</p>
          </div>

          <div id="tabs-6">
            <p>Le nostre offerte:<br/></p>
            <div id="accordion">

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
              <li><strong>5GB</strong> di spazio personale</li>
              <li><strong>Controllo totale</strong> del server, con accesso <strong>SSH</strong> ed <strong>FTP</strong></li>
              <li>Spazio <strong>FTP</strong> per il download automatico delle <strong>mappe extra</strong> messe sul proprio server (in comune tra tutti i server)</li>
              <li>Possibilit&agrave; di accesso sia tramite <strong>ip</strong>, che <strong>dns</strong> ( <strong>server.2s2h.com</strong> )</li>
              <li>I server sono <strong>SEMPRE ATTIVI</strong>, <strong>24 ore su 24</strong>, non on-demand</li>
            </ul>

          </div>

          <div id="tabs-2">
            <p>Accettiamo <strong>Paypal</strong> o versamento su carte <strong>Postepay</strong></p>
          </div>

          <div id="tabs-3">
            <ul class="list">
              <li>Tutti i prezzi indicati si riferiscono al <strong>noleggio mensile</strong>.</li>
              <li>I server privati <strong>devono</strong> avere sempre impostata una password per l'accesso.</li>
              <li>I server pubblici possono essere usati con o senza password per l'accesso.</li>
              <li>Gli slot privati sono degli slot speciali riservati ai membri del clan in possesso della password per il loro utilizzo (possono entrare anche se il server &egrave pieno).<br/>Possono esserne impostati di pi&ugrave di quelli indicati, ma il numero di slot totali non pu&ograve superare il limite indicato.</li>
            </ul>
          </div>

      		<div id="tabs-4">
            <p>D - <strong>&Egrave; possibile lanciare script python tramite accesso ssh?</strong></p>
            <p>R - yep. Attualmente non c'&egrave; python disponibile per tutti gli utenti, basta metterlo.
            Se &egrave per uno script di qualche esotica utilit&agrave; per voi ok, se &egrave; per un bot, abbiamo
            deciso di non accettarli.</p>
            <br/>
            <p>D - <strong>I gameserver girano su macchine virtuali o direttamente su server reali?</strong></p>
            <p>R - Direttamente su server reali.</p>
            <br/>
            <p>D - <strong>Qual'&egrave; il rapporto RAM totale macchina/numero di gameserver?</strong></p>
            <p>R - 2GB/4gameserver (ovviamente non ci sono solo quelli, vedi servizi di sistema, ma c'&egrave; un
            ampio margine, attualmente &egrave; libero ancora quasi un giga.
            Non abbiamo intenzione comunque di salire di pi&ugrave; di 4 server per macchina, tranne rare eccezioni, per
            esempio se sono server piccolissimi e privati, per un quinto.)
            In ogni caso, se considerate che un singolo game server di UrT occupa circa 200MB,
            vedete da soli che stiamo belli abbondanti :)</p>
            <br/>
            <p>D - <strong>&Egrave; ammesso personalizzare lo script bash di start del gameserver?</strong></p>
            <p>Ovviamente si. Noi ne diamo gi&agrave; uno, ma &egrave; possibile cambiarlo tranquillamente.<br />Ovviamente se questo non compromette anche gli altri server.</p>

          </div>

          <div id="tabs-5">
            <ul class="list">
              <li>2s2h return ITA #1 (\connect server.2s2h.com o \connect 95.110.227.172) <strong>NON IN VENDITA</strong></li>
              <li>2s2h server in sale 1 ITA (\connect server.2s2h.com:27961 o \connect 95.110.227.172:27961) <strong>venduto</strong></li>
              <li>2s2h server in sale 2 ITA (\connect server.2s2h.com:27962 o \connect 95.110.227.172:27962) <strong>venduto</strong></li>
              <li>2s2h server in sale 3 ITA (\connect server.2s2h.com:27963 o \connect 95.110.227.172:27963) <strong>venduto</strong></li>
            </ul>
            <p>Per ulteriori informazioni, scrivete sul nostro forum o contattateci direttamente nell'apposita sezione del sito:<a href = '2steps-2hell-contact-us.php' ><strong> QUI </strong></a></p>

          </div>

		  </div>

      </div>
    </div>


    <div class="separate sfondo-footer"><?php bottomPageInfo(); ?></div>

</body>
</html>
