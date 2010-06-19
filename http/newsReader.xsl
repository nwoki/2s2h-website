<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="html" version="1.0" encoding="UTF-8" indent="yes"/>
<xsl:template match="/">
    <html xmlns="http://www.w3.org/1999/xhtml">
        <!--head>
            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
            <title>2Steps2Hell - HomePage</title>
            <link  id="layout" href="project.css" rel="stylesheet" type="text/css" media="screen"  />
            <link href="print.css" rel="stylesheet" type="text/css" media="print"/>
            <link href="handheld.css" rel="stylesheet" type="text/css" media="handheld" />
            <meta name="description" content="La home del sito su cui trovate un pò di info utili e contatti" />
            <meta name="keywords" content="2s2h,2Steps2Hell,URT,Urban Terror, home,contatti e info" />
            <meta name="author" content="Daniele Lovato, Francesco Nwokeka, Simone Daminato, Alessandro Capogna" />
            <meta name="language" content="italian it" />
            <script type="text/javascript" src="provaScript.js"></script>
        </head>

        <body>
            <div id="header">
                <span id="logo1">
                    <span id="titoloimg"><img src="img/scritta.png" alt="2Steps2Hell logo" align="middle" width="50%"/><br /></span>
                        <span id="scrittatitolo">
                            <span xml:lang="en">2Steps2Hell<br />
                            Urban Terror Clan
                            </span>
                        </span>
                    </span>
                <span id="logo2"></span>
            </div>

            <div id="posizione">
                Ti trovi in: News
                <div id="linkDaltonici">
                    <a href="#" onclick="daltonizza()" tabindex="1" accesskey="v">Cambia <span class="key">V</span>isualizzazione(Colori per Daltonici)</a>
                </div>
            </div>

            <div id="nav">
                <span class="button"><a href="home.html" accesskey="h" tabindex="4"><span class="key">H</span>ome</a></span>
                <span class="button"><a href="game.html" accesskey="g" tabindex="5">Il <span class="key">G</span>ioco</a></span>
                <span class="button"><a href="clan.html" accesskey="c" tabindex="6"><span class="key">C</span>lan</a></span>
                <span class="button"><a href="news.html" accesskey="w" tabindex="7">Ne<span class="key">w</span>s</a></span>
                <span class="button"><a href="inserisciNews.html" accesskey="n" tabindex="8">Gestione <span class="key">N</span>otizie</a></span>
            </div>

            <div id="content">
                <h2>News</h2>
asdasd<br/-->
                <xsl:apply-templates/>
                <!-- qui comincio la stampa delle ultime 5/6 news >
                <xsl:for-each select="./article">
                    <xsl:sort select="date"/>
                        <fieldset>
                        asasddasd
                            <legend><xsl:value-of select="title"/></legend>
                            <p><xsl:value-of select="body"/></p>
                        </fieldset>
                </xsl:for-each-->
            <!--/div>
        </body-->
    </html>
</xsl:template>

<!-- templates per articolo -->
<xsl:template match="article">
    <fieldset>
    prova
        <!--xsl:apply-templates select="title"/-->
        <!--xsl:apply-templates select="body"/>
        <xsl:apply-templates select="author"/>
        <xsl:apply-templates select="date"/-->
    </fieldset>
</xsl:template>

<!-- templates per titolo -->
<xsl:template match="title">
    <legend>
        <xsl:value-of select="."/>
        sdfghjk
    </legend>
</xsl:template>



</xsl:stylesheet>
