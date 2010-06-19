<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="html" version="1.0" encoding="UTF-8" indent="yes"/>

<xsl:template match="/">
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
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
                <span class="button"><a href="index.html" accesskey="h" tabindex="4"><span class="key">H</span>ome</a></span>
                <span class="button"><a href="game.html" accesskey="g" tabindex="5">Il <span class="key">G</span>ioco</a></span>
                <span class="button"><a href="clan.html" accesskey="c" tabindex="6"><span class="key">C</span>lan</a></span>
                <span class="button">News</span>
                <span class="button"><a href="cgi-bin/listaNews.cgi" accesskey="n" tabindex="8">Gestione <span class="key">N</span>otizie</a></span>
            </div>

            <div id="content">
                <h2>News</h2>
                <!-- output notizie -->
                <xsl:for-each select="news/article">
                <xsl:sort select="date"/>
                    <fieldset>
                        <legend class="newsLgd" >
                            <xsl:value-of select="title"/>
                        </legend>

                        <p class="newsPar" >
                            <xsl:value-of select="body"/><br/>
                            Autore: <xsl:value-of select="author"/><br/>
                            In Data: <xsl:value-of select="date"/><br/>
                        </p>
                    </fieldset>
                    <br/>   <!-- linea vuota per dividere le notizie -->
                </xsl:for-each>

            </div>
        </body>
    </html>
</xsl:template>
</xsl:stylesheet>
