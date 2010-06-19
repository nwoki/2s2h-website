#!/usr/bin/perl
use CGI::Carp qw(fatalsToBrowser);
use CGI qw(:standard);
print "Content-type: text/html; charset=iso-8859-1\n\n";
#inizializzo la pagina xhtml
open (HTML, "<head.html");
print <HTML>;
close (HTML);

use XML::LibXML;
use XML::Twig;

$XMLFile = "../http/newsDB.xml";
$XMLSchema = "../http/newsDB.xsd";

# estraggo i dati passati col metodo post (title, body, author, id)

$cgi = new CGI;
foreach $param ($cgi->param()){
	$input{$param}=$cgi->param($param);
}

$date = `date +%F`;
chomp($date);

#faccio i test sui dati in input
#elimino le eventuali tag all'interno di titolo e nick
$input{"title"}=~ s/[<|>]+//g;
$input{"author"}=~ s/[<|>]+//g;

#apertura file
my $parser = new XML::LibXML;
my $doc = $parser->parse_file( $XMLFile );
my $root= $doc->getDocumentElement;    #nodo radice
my @articoli = $root->getElementsByTagName( 'article' );    #Prendo tutti gli elementi i tipo 'article'

#trovo il nodo da modificare
foreach $articolo (@articoli) {
    if( $articolo->getAttribute( "id" ) == $input{"id"} ) {
        @elemento=$articolo->getChildrenByTagName('date');
        @elemento[0]->firstChild->setData($date);
        @elemento=$articolo->getChildrenByTagName('title');
        @elemento[0]->firstChild->setData($input{'title'});
        @elemento=$articolo->getChildrenByTagName('body');
        @elemento[0]->firstChild->setData($input{'body'});
        @elemento=$articolo->getChildrenByTagName('author');
        @elemento[0]->firstChild->setData($input{'author'});
        
		print "<fieldset><legend>Dati modificati della news: </legend>\n";
		print "<label>Titolo: </label>$input{title}<br />\n";
		print "<label>Data: </label>$date<br />\n";
		print "<label>Autore: </label>$input{author}<br />\n";
		print "</fieldset>\n<br />\n";
    }
}

#sistemo l'indentazione 
$all=$doc->toString();
$twig=XML::Twig->new(pretty_print => 'indented');
$twig->parse($all);
$all=$twig->sprint();

#controllo che dopo la modifica il documento resti valido
my $doc = $parser->parse_string( $all );
$schema=XML::LibXML::Schema->new( location => $XMLSchema );
eval { $schema->validate( $doc ) };
if ($@) {
	#schema non valido
	print $@;
	die;
}

#salvo su file
open( WDATA, ">".$XMLFile ) or die( "Non trovo il file xml su cui lavorare, o non posso scriverci." );
print WDATA $all;
close ( WDATA );
print "Finito! <br />";
print "<a href=\"listaNews.cgi\" accesskey=\"I\" tabindex=\"6\">torna all'Inizio</a>";
open (HTML, "<foot.html");
print <HTML>;
close (HTML);
