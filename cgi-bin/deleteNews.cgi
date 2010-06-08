#!/usr/bin/perl

use XML::LibXML;

my $file = 'newsDB.xml';

#creazione oggetto parser
my $parser = XML::LibXML->new();
#apertura file e lettura input
my $doc = $parser->parse_file($file);
my $radice= $doc->getDocumentElement; #estrazione radice
my @elementi = $radice->getElementsByTagName('article');
print @elementi[0]->toString;
