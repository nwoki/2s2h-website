<?php
    session_start();
		$_SESSION["page"] = "server"; 
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

    <ul>
        <li><a href="#why">Perch&egrave scegliere 2s2h?</a></li>
        <li><a href="#banbot">Cos'&egrave BanBot?</a></li>
        <li><a href="#cw13">cw pack 13&euro </a></li>
        <li><a href="#cw16">cw pack essential 16&euro </a></li>
        <li><a href="#cw18">cw pack plus 18&euro </a></li>
        <li><a href="#cw21">clan pack 21&euro </a></li>
        <li><a href="#cw26">clan pack extra 26&euro </a></li>
        <li><a href="#pay">Modalit&agrave di pagamento</a></li>
        <li><a href="#faq">Domande comuni</a></li>
        <li><a href="#server">Lista server</a></li>
    </ul>

    <br/>
    <br/> <!-- a bit of spacing -->
    <br/>

    <!-- YES, TEXTWALL!!! MUAHAHAAHA! -->
    <h3 id="why" >Perch&egrave scegliere 2s2h?</h3>
    <p>
        2s2h &egrave un clan che da anni gioca ad urban terror e partecipa a competizioni. Essendo noi diretti utilizzatori dei server di gioco che offriamo non possiamo venir meno sulla qualit&agrave.
        Ci&ograve che facciamo &egrave dunque creare un'alternativa ai prodotti che ci propone il mercato
        che spesso mancano della qualit&agrave necessaria oppure hanno prezzi proibitivi.
        Il nostro scopo &egrave quindi il fornire dei veri server, in cui sia piacevole giocare, ad un
        prezzo accessibile a tutti.
        Su tutti i nostri server &egrave installata la patch che impedisce di prenderne il controllo
        tramite un voto.<br/>

        Tutte le nostre offerte prevedono:

        <ul type="square" >
            <li>un game server di Urban Terror, pubblico o privato, con un numero di slot che varia a seconda del pacchetto scelto</li>
            <li>un server Teamspeak ( Ts2 o Ts3 ) con un numero di slot che varia a seconda del pacchetto scelto</li>
            <li>5GB di spazio personale</li>
            <li>controllo totale del server, con accesso ssh ed ftp</li>
            <li>spazio ftp per il download automatico delle mappe extra messe sul proprio server ( in comune tra tutti i server )</li>
            <li>possibilit&agrave di accesso sia tramite ip, che dns ( server.2s2h.com )</li>
            <li>i server sono SEMPRE ATTIVI, 24 ore su 24, non on-demand</li>
        </ul>

        In pi&ugrave su richiesta, appena sar&agrave rilasciata la versione ufficiale, verr&agrave fornito gratuitamente BanBot sui server pubblici, indicati nei pacchetti.
    </p>
    <br/><a href='#topOfPage' ><u><i>GoToTop</i></u></a>

    <h3 id="banbot" >Cos'&egrave BanBot?</h3>
    <p>
        BanBot &egrave un utilissimo tool sviluppato dai nostri membri [2s2h]Zamy e [2s2h]n3m3s1s in grado di individuare
        autonomamente alcuni cheater e di bannare con maggiore efficacia rispetto ad rcon sfruttando sistemi incrociati.
        In BanBot sono state implemenentate altre comode funzionalit&agrave quali mute, kick e altre arriveranno con le prossime versioni.
        BanBot &egrave stato inoltre concepito per utilizzare pochissime risorse in modo da non influire minimamente sul server di gioco.
        Elenchiamo di seguito i nostri pacchetti ( &egrave naturalmente possibile trovare un accordo, se avete bisogno di un servizio ad hoc ):
    </p>
    <br/><a href='#topOfPage' ><u><i>GoToTop</i></u></a>

    <br/>

    <h3 id="cw13" >cw pack 13&euro </h3>
    <p>
        il pacchetto essenziale, consiste di un server di gioco privato
        <ul type="square" >
            <li>11 slot (5 giocatori per squadra pi&ugrave un eventuale referee)</li>
            <li>server voIP 10 slot codec speex 12,3kbps o superiore (in base alla banda disponibile per garantire sempre le migliori prestazioni del game server)</li>
            <li>controllo server di gioco: rcon</li>
            <li>controllo server voIP: server admin</li>
        </ul>

        confronto prezzi:
        gamesclan.it -> 14.75€ [12 game slot].
        n1ping.com -> 13€ con servizio awn [il server si arresta ogni volta che rimane vuoto e va riattivato via browser]; 18€ server standard, sempre attivo.
    </p>
    <br/><a href='#topOfPage' ><u><i>GoToTop</i></u></a>

    <h3 id="cw16" >clan pack formato essential 16&euro </h3>
    <p>
        <ul>
            <li>server di gioco pubblico da 12 slot</li>
            <li>server voIP da 15 slot, codec speex 16,3kbps o superiore[in base alla banda disponibile per garantire sempre le migliori prestazioni del game server]</li>
            <li>controllo server di gioco: rcon, BanBot</li>
            <li>controllo server voIP: server admin</li>
        </ul>
        confronto prezzi:
        gamesclan.it -> 19€
        n1ping.com -> std 19€
        <br/>
        <a href='#topOfPage'><u><i>GoToTop</i></u></a>
    </p>

    <h3 id="cw18" >cw pack plus 18 &euro </h3>
    <p>
        questo pacchetto consiste in un server di gioco privato
        <ul type="square" >
            <li>15 slot [5 giocatori + 2 per squadra + referee]</li>
            <li>server voIP da 20 slot codec speex 19,5kbps o superiore [in base alla banda disponibile per garantire sempre le migliori prestazioni del game server]</li>
            <li>controllo server di gioco: rcon</li>
            <li>controllo server voIP: server admin</li>
        </ul>

        confronto prezzi:
        gamesclan.it -> 22€ [16 games slot]
        n1ping.com -> std 22€
    </p>
    <br/><a href='#topOfPage' ><u><i>GoToTop</i></u></a>

    <h3 id="cw21" >clan pack 21&euro </h3>
    <p>
        <ul>
            <li>server di gioco pubblico da 14 slot + 4 slot privati (18 in tutto)</li>
            <li>server voIP da 20 slot, codec speex 19,5kbps o superiore [in base alla banda disponibile per garantire sempre le migliori prestazioni del game server]</li>
            <li>controllo server di gioco: rcon, BanBot</li>
            <li>controllo server voIP: server admin</li>
        </ul>

        confronto prezzi:
        gamesclan.it -> 27€
        n1ping.com -> std 23€
    </p>
    <br/><a href='#topOfPage' ><u><i>GoToTop</i></u></a>

    <h3 id="cw26" >clan pack extra 26&euro </h3>
    <p>
        <ul>
            <li>server di gioco pubblico da 20 slot</li>
            <li>server voIP da 25 slot codec speex 25,9kbps o superiore [in base alla banda disponibile per garantire sempre le migliori prestazioni del game server]</li>
            <li>controllo server di gioco: rcon, BanBot</li>
            <li>controllo server voIP: server admin</li>
        </ul>

        confronto prezzi:
        gamesclan.it -> 30€
        n1ping.com -> nn concepisce server pi&ugrave grandi di 18 slot
    </p>
    <br/><a href='#topOfPage' ><u><i>GoToTop</i></u></a>

    <p>
        Tutti i prezzi indicati si riferiscono al noleggio mensile.
        I server privati devono avere sempre impostata una password per l'accesso.
        I server pubblici possono essere usati con o senza password per l'accesso.
        Gli slot privati sono degli slot speciali riservati ai membri del clan
        in possesso della password per il loro utilizzo (possono entrare anche se
        il server &egrave pieno). Possono esserne impostati di pi&ugrave di quelli indicati,
        ma il numero di slot totali non pu&ograve superare il limite indicato.
    </p>

    <hr size=5 width="50%" />
    <br/>

    <h3 id="pay" >Modalit&agrave di pagamento </h3>
    <p>
        Accettiamo Paypal o versamento su carte Postepay
    </p>
    <br/><a href='#topOfPage' ><u><i>GoToTop</i></u></a>

    <br/>

    <h3 id="faq" >Domande comuni </h3>
    <p>
        <br/>
        <b>D - &egrave possibile lanciare script python tramite accesso ssh?</b><br/>

        yep. Attualmente non c'&egrave python disponibile per tutti gli utenti, basta metterlo.
        Se &egrave per uno script di qualche esotica utilit&agrave per voi ok, se &egrave per un bot, abbiamo
        deciso di non accettarli.<br/>

        <br/>

        <b>D - i gameserver girano su macchine virtuali o direttamente su server reali?</b><br/>

        Direttamente su server reali.<br/>

        <br/>

        <b>D - qual'&egrave il rapporto RAM totale macchina / numero di gameserver?</b><br/>

        2 Giga/4 gameserver (ovviamente non ci sono solo quelli, vedi servizi di sistema, ma c'&egrave un
        ampio margine, attualmente &egrave libero ancora quasi un giga.
        Non abbiamo intenzione comunque di salire di pi&ugrave di 4 server per macchina, tranne rare eccezioni, per
        esempio se sono server piccolissimi e privati, per un quinto.)
        In ogni caso, se considerate che un singolo game server di urt occupa circa 200M,
        vedete da soli che stiamo belli abbondanti :)<br/>

        <br/>

        <b>D - &egrave ammesso personalizzare lo script bash di start del gameserver?</b><br/>

        Ovviamente si. Noi ne diamo gi&agrave uno, ma &egrave possibile cambiarlo tranquillamente.
        Ovviamente se questo non compromette anche gli altri server.<br/>
    </p>
    <br/><a href='#topOfPage' ><u><i>GoToTop</i></u></a>

    <br/>

    <h3 id="server" >Lista server (se volete provarli)</h3>
    <ol>
        <li>2s2h return ITA #1 (\connect server.2s2h.com o \connect 95.110.227.172) NON IN VENDITA</li>
        <li>2s2h server in sale 1 ITA (\connect server.2s2h.com:27961 o \connect 95.110.227.172:27961) venduto</li>
        <li>2s2h server in sale 2 ITA (\connect server.2s2h.com:27962 o \connect 95.110.227.172:27962) venduto</li>
        <li>2s2h server in sale 3 ITA (\connect server.2s2h.com:27963 o \connect 95.110.227.172:27963) venduto</li>
    </ol>
    <p>
        Per ulteriori info, scrivete sul nostro forum o contattateci direttamente nell'apposita sezione del sito:
        <a href = 'contactus.php' > QUI </a>
    </p>
    <br/><a href='#topOfPage' ><u><i>GoToTop</i></u></a>
      </div>
    </div>

    
    <div class="separate sfondo-footer"><?php bottomPageInfo(); ?></div>
    
    
</body>
</html>