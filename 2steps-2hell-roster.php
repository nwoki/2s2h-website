<?php
    session_start();
    $_SESSION["page"] = "roster";
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
            <img src="imghold/people/n3m3s1s.jpg" align="left" alt="nemesis-foto" width="30%"/>
            <p>
                inserire descrizione
            </p>
        </fieldset>
    </div>

    <br/>

    <div id="zamy" >
        <fieldset>
            <legend align='right' >Zamy</legend>
            <img src="imghold/people/zamy.jpg" align="right" alt="zamy-foto" width="30%"/>
            <p>
                inserire descrizione
            </p>
        </fieldset>
    </div>

    <br/>

    <div id="heresyarch" >
        <fieldset>
            <legend>Heresyarch/Cityhunter</legend>
            <img src="imghold/people/nic.jpg" align="left" alt="heresyarch-foto" width="30%"/>
            <p>
                inserire descrizione
            </p>
        </fieldset>
    </div>

    <br/>
    <br/>

    <h3>Soldati</h3>

    <div>
        <a href='#revan' >Revan</a>
        <a href='#kolbebo' >Kolbebo</a>
        <a href='#roger' >Roger</a>
        <a href='#arca' >Arca</a>
        <a href='#logout' >Logout</a>
        <a href='#ranker' >Ranker</a>
        <a href='#seifer' >Seifer</a>
        <a href='#savo' >Savo</a>
    </div>

    <br/>

    <div id="revan" >
        <fieldset>
            <legend align='right' >Revan</legend>
            <img src="imghold/people/revan.jpg" align="right" alt="nemesis-foto" width="30%"/>
            <p>
                inserire descrizione
            </p>
        </fieldset>
    </div>

    <br/>

    <div id="kolbebo" >
        <fieldset>
            <legend>Kolbebo</legend>
            <img src="imghold/people/kolbebo.jpg" align="left" alt="kolbebo-foto" width="30%"/>
            <p>
                La prima donna ad essere entrato nel clan. Regina dello spam e delle cazzate. Si diletta facendo scherzi un p&ograve a tutti
                in particolare al boss, n3m3s1s.
            </p>
            <br/>
            <p class="quote">
                "Do what you want cause a pirate is free,you are a
                pirate! Le Gocciole sono I biscotti migliori del mondo, I <3 Gocciole"
            </p>
        </fieldset>
    </div>

    <br/>

    <div id="roger" >
        <fieldset>
            <legend align='right' >Roger</legend>
            <img src="imghold/people/roger.jpg" align="right" alt="nemesis-foto" width="30%"/>
            <p>
                inserire descrizione
            </p>
        </fieldset>
    </div>

    <br/>

    <div id="arca" >
        <fieldset>
            <legend>Arca</legend>
            <img src="imghold/people/arca.jpg" align="left" alt="arca-foto" width="30%"/>
            <p>
                Donna che incute timore nelle sue prede. Mafiosa e alcolizzata, questa ragazza tiene testa a molti
                sbruffoni che si trovano in giro
            </p>
            <br/>
            <p class="quote">
                "Sono rossa, ubriacona e cattiva. Nel mio tempo libero prendo per il culo Revan e cerco di fargli
                ammettere l'omosessualit&agrave e il ritardo mentale"
            </p>
        </fieldset>
    </div>

    <br/>

    <div id="logout" >
        <fieldset>
            <legend  align="right">Logout</legend>
            <img src="imghold/people/logout.jpg" align="right" alt="logout-foto" width="30%"/>
            <p>
                Dovrebbe prendere spunto dal suo nome e fare un favore al mondo staccando la
                spina al proprio computer e modem
            </p>
            <br/>
            <p class="quote">
                "Wei zio come va?? l'altro giorno ho giocato cn un babbo assurdo"
            </p>
        </fieldset>
    </div>

    <br/>

    <div id="ranker" >
        <fieldset>
            <legend>Ranker</legend>
            <img src="imghold/people/anonymous.jpg" align="right" alt="logout-foto" width="30%"/>
            <p>
                Questo nerdone si &egrave autoproclamato il simpaticone del clan( almeno, cos&igrave mi dice la Kolbebo ).Dotato di una fortissima "R" moscia
                egli fa copia con Rambo, due elementi presi spesso di mira da Arca
            </p>
            <br/>
            <p class="quote">
                "Ho un fratello gemello e sono molto ma molto ma molto bello!"
            </p>
        </fieldset>
    </div>

    <br/>

    <div id="seifer" >
        <fieldset>
            <legend align="right">Seifer</legend>
            <img src="imghold/people/seifer.jpg" align="right" alt="seifer-foto" width="30%"/>
            <p>
                Chitarrista e metallaro italo-inglese. Il segugio del clan sempre pronto a fiutare noobs e cheaters sul server.<br/> La sua arte: Seek & Destroy!
            </p>
            <br/>
            <p class="quote">
                "M K KZZ V?? T SPKK L KL STRNZ! T MDR ZKKL!"
            </p>
        </fieldset>
    </div>

    <br/>

    <div id="savo" >
        <fieldset>
        <legend>Savo</legend>
        <img src="imghold/people/savo.jpg" align="right" alt="savo-foto" width="30%"/>
        <p>
            Ex bimbominchia che grazie alla protezione di Heresyarch &egrave riuscito a crescere e a diventare una persona seria (o quasi)
        </p>
        <br/>
        <p class="quote">
            "daiiiii neme, accetta la mia amicizia su facebook"
        </p>
        </fieldset>
    </div>



</div>
</div>

    <div class="separate sfondo-footer"><?php bottomPageInfo(); ?></div>


</body>
</html>