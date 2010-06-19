#!/usr/bin/perl
use CGI::Carp qw(fatalsToBrowser);
use CGI qw(:standard);
print "Content-type: text/html; charset=iso-8859-1\n\n";
#inizializzo la pagina xhtml
open (HTML, "<head.html");
print <HTML>;
close (HTML);

		print "<fieldset><legend>Inserisci news: </legend><form name=\"datiNews\" action=\"addNews.cgi\" method=\"POST\">\n";
		print "<label>Autore: <input name=\"author\" type=\"text\" tabindex=\"6\"/></label><br />\n";
		print "<label>Titolo: <input name=\"title\" type=\"text\"  tabindex=\"7\"/></label><br />\n";
		print "<label>Contenuto:<br /><textarea name=\"body\" rows=\"20\" cols=\"60\" tabindex=\"8\"></textarea></label><br />\n";
		print "<input type=\"submit\" value=\"Invia\" tabindex=\"9\"/>";
		print "<a href=\"listaNews.cgi\" accesskey=\"A\" tabindex=\"10\">Annulla</a>";
		print "</form></fieldset>";
		$found = 1;

print "<a href=\"listaNews.cgi\" accesskey=\"I\" tabindex=\"11\">torna all'Inizio</a>";
open (HTML, "<foot.html");
print <HTML>;
close (HTML);
