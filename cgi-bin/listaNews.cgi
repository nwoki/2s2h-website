#!/usr/bin/perl
use CGI::Carp qw(fatalsToBrowser);
print "Content-type: text/html; charset=iso-8859-1\n\n";
#inizializzo la pagina xhtml
open (HTML, "<head.html");
print <HTML>;
close (HTML);

use XML::LibXML;

$file = '../http/newsDB.xml';

#$buffer = $ENV{'QUERY_STRING'};
#@pairs = split(/&/, $buffer);

#estraggo l'id passato col metodo get
#foreach $pair (@pairs) {
#   ($name, $value) = split(/=/, $pair);
#    $value =~ tr/+/ /;
#    $value =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/g;
#    $name =~ tr/+/ /;
#    $name =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C",hex($1))/g;
#    $input{$name} = $value;
#}

#creazione oggetto parser
$parser = XML::LibXML->new();
#apertura file e lettura input
$doc = $parser->parse_file($file) or die( "Non trovo il file xml su cui lavorare." );
$root= $doc->getDocumentElement; #estrazione radice
@articoli = $root->getElementsByTagName('article');

for ($i=0;$i<@articoli-1;$i++){
	for ($j=$i+1;$j<@articoli;$j++){
		@data1=@articoli[$i]->getChildrenByTagName('date');
		@data2=@articoli[$j]->getChildrenByTagName('date');
		($anno1,$mese1,$giorno1)=split(/-/,@data1[0]->textContent);
		($anno2,$mese2,$giorno2)=split(/-/,@data2[0]->textContent);
		if ($anno1 lt $anno2 or ($anno1 eq $anno2 and $mese1 lt $mese2) or ($anno1 eq $anno2 and $mese1 eq $mese2 and $giorno1 lt $giorno2)){
			#faccio lo scambio
			(@articoli[$i],@articoli[$j])=(@articoli[$j],@articoli[$i]);
		}
	}
}

#stampo la lista
$index=6;
print "<a href=\"newFormNews.cgi\" tabindex=\"".$index++."\">Inserisci una nuova news</a><br/>";
foreach $articolo (@articoli) {
		#scrivo le info della news
		@elemento=$articolo->getChildrenByTagName('title');
		print "<fieldset><legend>".@elemento[0]->textContent."</legend>\n";
		@elemento=$articolo->getChildrenByTagName('author');
		print "<p>Scritta da ".@elemento[0]->textContent.", il ";
		@elemento=$articolo->getChildrenByTagName('date');
		print @elemento[0]->textContent." </p><br/>\n";
		@elemento=$articolo->getChildrenByTagName('body');
		print "<p>". @elemento[0]->textContent ."</p><br />\n";
		print "<a href=\"editFormNews.cgi?id=".$articolo->getAttribute( "id" )."\" tabindex=\"".$index++."\">modifica</a>
		 <a href=\"deleteNews.cgi?id=".$articolo->getAttribute( "id" )."\" tabindex=\"".$index++."\">elimina</a><br/>";
		print "</fieldset><br/>";
}

open (HTML, "<foot.html");
print <HTML>;
close (HTML);
