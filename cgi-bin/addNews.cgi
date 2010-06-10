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

# estraggo i dati passati col metodo post (title, body, author)

#print "caratteri letti: " . read(STDIN, $buffer, $ENV{'CONTENT_LENGTH'}) . "<br />\n";
#$buffer=<STDIN>;
#print "codio " . $buffer . " lenght: " . $ENV{'CONTENT_LENGTH'} . "<br />\n";
#@pairs = split(/&/, $buffer);
#foreach $pair (@pairs) {
#	($name, $value) = split(/=/, $pair);
#	$value =~ tr/+/ /;
#	$value =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/g;
#	$name =~ tr/+/ /;
#	$name =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C",hex($1))/g;
#	$input{$name} = $value;
#	print "$name $value <br /> \n";
#}

$cgi = new CGI;
foreach $param ($cgi->param()){
	$input{$param}=$cgi->param($param);
}


$id = 0;
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

#trovo il massimo id usato finora
foreach $articolo (@articoli) {
    if( $articolo->getAttribute( "id" ) > $id ) {
        $id = $articolo->getAttribute( "id" );
    }
}
# trovato il massimo, incremento di uno
$id += 1;
print "<p>\n";
print "Inserimento della news: <br />\n";
print "Titolo: $input{title}<br />\n";
print "Data: $date<br />\n";
print "Contenuto: $input{body}<br />\n";
print "Autore: $input{author}<br />\n";
print "</p>\n<br />\n";
#creo il nuovo nodo e lo inserisco
#creo il titolo
$testo_titolo=$doc->createTextNode($input{"title"});
$titolo=$doc->createElement("title");
$titolo->appendChild($testo_titolo);
#creo la data
$testo_data=$doc->createTextNode($date);
$data=$doc->createElement("date");
$data->appendChild($testo_data);
#creo il body
$contenuto=new XML::LibXML::CDATASection($input{"body"});
$corpo=$doc->createElement("body");
$corpo->appendChild($contenuto);
#creo l'autore
$testo_autore=$doc->createTextNode($input{"author"});
$autore=$doc->createElement("author");
$autore->appendChild($testo_autore);
#creo il nuovo nodo article, l'attributo id e linko il tutto
$article=$doc->createElement("article");
$article->setAttribute("id",$id);
$article->appendChild($titolo);
$article->appendChild($data);
$article->appendChild($corpo);
$article->appendChild($autore);
#aggiungo il nuovo nodo al documento
$root->appendChild($article);
$root->normalize();

#sistemo l'indentazione 
$all=$doc->toString();
#$tidy=XML::Tidy->new('xml' => $all);
#$tidy->tidy();
#$all=$tidy->toString();
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
