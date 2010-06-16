#!/usr/bin/perl
use CGI::Carp qw(fatalsToBrowser);
use CGI qw(:standard);
print "Content-type: text/html; charset=iso-8859-1\n\n";
#inizializzo la pagina xhtml
open (HTML, "<head.html");
print <HTML>;
close (HTML);

use XML::LibXML;

$file = '../http/newsDB.xml';

$buffer = $ENV{'QUERY_STRING'};
@pairs = split(/&/, $buffer);

#estraggo l'id passato col metodo get
foreach $pair (@pairs) {
   ($name, $value) = split(/=/, $pair);
    $value =~ tr/+/ /;
    $value =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/g;
    $name =~ tr/+/ /;
    $name =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C",hex($1))/g;
    $input{$name} = $value;
}

#creazione oggetto parser
$parser = XML::LibXML->new();
#apertura file e lettura input
$doc = $parser->parse_file($file) or die( "Non trovo il file xml su cui lavorare." );
$root= $doc->getDocumentElement; #estrazione radice
@articoli = $root->getElementsByTagName('article');

#cerco quello da eliminare
$found=0;
foreach $articolo (@articoli) {
	if ($articolo->getAttribute( "id" )==$input{"id"})
	{
		#trovato, lo elimino
		$root->removeChild($articolo);
		print "<fieldset><legend>Dati della news eliminata</legend>\n<label>Titolo: </label>" 
		. $articolo->getElementsByTagName("title")->string_value()
		. "<br /> <label>Inserita il: </label>" . $articolo->getElementsByTagName("date")->string_value() . "<br /> <label>Autore: </label> " 
		. $articolo->getElementsByTagName("author")->string_value() . "<br /></fieldset><br />";
		$found=1;
	}
}
if ($found == 0) {
	print "News non trovata. <br />";
}
else
{
	#la news è stata trovata e il contenuto xml modificato, salvo
	open( WDATA, ">".$file ) or die( "Non trovo il file xml su cui lavorare, o non posso scriverci." );
	print WDATA $doc->toString();
	close ( WDATA );
}
print "Fatto! <br /><a href=\"../index.html\" accesskey=\"H\">torna alla Home page</a>";
open (HTML, "<foot.html");
print <HTML>;
close (HTML);