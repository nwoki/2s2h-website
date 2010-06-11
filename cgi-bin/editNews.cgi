#!/usr/bin/perl
use CGI::Carp qw(fatalsToBrowser);
use CGI qw(:standard);
print "Content-type: text/html; charset=iso-8859-1\n\n";
#inizializzo la pagina xhtml
print start_html(              # inizio pagina HTML
       -title => '2Steps2Hell - Add news',
       -dtd=>[ '-//W3C//DTD XHTML 1.0 Strict//EN',
        'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'],
        -lang =>'it'
);

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
        
        print "<p>\n";
		print "Modifica della news: <br />\n";
		print "Titolo: $input{title}<br />\n";
		print "Data: $date<br />\n";
		print "Autore: $input{author}<br />\n";
		print "</p>\n<br />\n";
    }
}

#sistemo l'indentazione 
$all=$doc->toString();
print $all;
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
print "Finito! <br /><a href=\"../index.html\" accesskey=\"H\">torna alla Home page</a>";
print end_html;
