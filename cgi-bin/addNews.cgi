#!/usr/bin/perl
print "Content-type: text/plain\n\n";
use XML::LibXML;

$dbFile = "output.xml";
$head = "<?xml version='1.0'?>
<news
xmlns='http://www.2s2h.com'
xmlns:xs='http://www.w3.org/2001/XMLSchema-instance'
xs:schemaLocation='http://www.2s2h.com newsDB.xsd'>\n";

# get info from form and save in these variables
my $newId = 0;
my $newTitle = "title";
my $newDate = "2010-05-02",
my $newBody = "this is the body";
my $newAuthor = "test-author";


my $parser = new XML::LibXML;
#apertura file e lettura input
my $doc = $parser->parse_file( $dbFile );
my $root= $doc->getDocumentElement;    #get's root
my @articoli = $root->getElementsByTagName( 'article' );    #got all articles in hash

open( WDATA, ">".$dbFile ) or die( "missing $dbFile or can't write to file" );
print WDATA $head;    #print head info to file

for( my $i = 0; $i < @articoli; $i++ ) {
    # save max id while i check them all
    if( @articoli[$i]->getAttribute( "id" ) > $newId ) {
        $newId = @articoli[$i]->getAttribute( "id" );
        print "new id is now ".$newId;
    }

    print "\n";
    print WDATA @articoli[$i]->toString."\n";
}

# create new "article"
# newId is max id + 1
$newId += 1;

print WDATA "<article id='$newId'>\n";
print WDATA "   <title>$newTitle</title>\n";
print WDATA "   <date>$newDate</date>\n";
print WDATA "   <body>$newBody</body>\n";
print WDATA "   <author>$newAuthor</author>\n";
print WDATA "</article>\n";

print WDATA "</news>";

close( WDATA ); 