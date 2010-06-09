#!/usr/bin/perl
use CGI::Carp qw(fatalsToBrowser);
use CGI qw(:standard);
print "Content-type: text/html; charset=iso-8859-1\n\n";
#inizializzo la pagina xhtml
print start_html(              # inizio pagina HTML
       -title => '2Steps2Hell - Delete news',
       -dtd=>[ '-//W3C//DTD XHTML 1.0 Strict//EN',
        'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'],
        -lang =>'it'
);

use XML::LibXML;

$file = 'newsDB.xml';

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
	@porcodio=$articolo->getAttributes; 
	foreach $attributo (@porcodio){
		if ($attributo->value==$input{"id"})
		{
			#trovato, lo elimino
			$root->removeChild($articolo);
			print "Eliminazione della news \"" 
			. $articolo->getElementsByTagName("title")->string_value()
			. "\" inserita il " . $articolo->getElementsByTagName("date")->string_value() . " da " 
			. $articolo->getElementsByTagName("author")->string_value() . " in corso... <br />";
			$found=1;
		}
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
print "Finito!";
print end_html;
