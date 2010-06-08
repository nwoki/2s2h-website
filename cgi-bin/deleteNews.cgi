#!/usr/bin/perl
use CGI::Carp qw(fatalsToBrowser);
print "Content-type: text/html; charset=iso-8859-1\n\n";
use XML::LibXML;

$buffer = $ENV{'QUERY_STRING'};
@pairs = split(/&/, $buffer);

foreach $pair (@pairs) {
   ($name, $value) = split(/=/, $pair);
    $value =~ tr/+/ /;
    $value =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/g;
    $name =~ tr/+/ /;
    $name =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C",hex($1))/g;
    $input{$name} = $value;
}
print "value: " . $input{"id"} . "</br>";

my $file = 'newsDB.xml';

#creazione oggetto parser
my $parser = XML::LibXML->new();
#apertura file e lettura input
my $doc = $parser->parse_file($file);
my $root= $doc->getDocumentElement; #estrazione radice
my @articoli = $root->getElementsByTagName('article');

