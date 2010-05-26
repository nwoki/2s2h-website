#!/usr/bin/perl

use XML::LibXML;
use XML::LibXSLT;use File::Copy;
use CGI qw(:standard);


print "Content-type: text/html\n\n";
$test=0;
my  $page=new CGI;
my  $nome=$page->param('nome');
my  $commento=$page->param('commento');

($sec,$min,$hour,$mday,$mon,$year,$wday,$yday,$isdst)=localtime(time);
my $data=localtime();
$year += 1900;
$mon+=1; 

#controlli
	if (length($commento)>1000){
	 
		$url="errore.cgi";
		print "<meta http-equiv=refresh content=\"0;url=$url\">\n";	
		$test=1;
	}
	if (length($commento)==0)
  	{
	guestbook.html
		$url="errore.cgi";
		print "<meta http-equiv=refresh content=\"0;url=$url\">\n";	
       		$test=1;
  	}
	if (length($nome)==0)
  		{
    		$nome = 'scongosciuto';
  	}	
if($test==0){

	my $file="guestbook.xml";
	my $parser=XML::LibXML->new();
	my $doc=$parser->parse_file($file);
	my $commenti=$doc->getDocumentElement;


	my $testo = XML::LibXML::Element->new('testo');

	my $data1 = XML::LibXML::Element->new('data');
        $data1->appendText( $data );
        $testo->appendChild($data1);

	my $nome1 = XML::LibXML::Element->new('nome');
    	$nome1->appendText( $nome );
    	$testo->appendChild($nome1);
	my $commento1 = XML::LibXML::Element->new('commento');
   	$commento1->appendText( $commento );
   	$testo->appendChild($commento1);

	my $anno = XML::LibXML::Element->new('anno');
    	$anno->appendText($year);
    	$testo->appendChild($anno);
	my $mese = XML::LibXML::Element->new('mese');
	$mese->appendText($mon);
    	$testo->appendChild($mese);
	my $giorno = XML::LibXML::Element->new('giorno');
    	$giorno->appendText($mday);
    	$testo->appendChild($giorno);

	my $ora = XML::LibXML::Element->new('ora');
	    $ora->appendText($hour);
	    $testo->appendChild($ora);
	my $minuto = XML::LibXML::Element->new('minuto');
	    $minuto->appendText($min);
	    $testo->appendChild($minuto);
	my $secondo = XML::LibXML::Element->new('secondo');
	    $secondo->appendText($sec);
	    $testo->appendChild($secondo);

	$commenti->appendChild($testo);

	#scrittura su file handler
	open(OUT,">$file");
	print OUT $doc->toString;
	close(OUT);


	my $filexsl="guestbook.xsl";
	my $filehtm="guestbook.html";

	my $xslt = XML::LibXSLT->new();
	my $style = $parser->parse_file($filexsl);
	my $stylesheet = $xslt->parse_stylesheet($style);
	my $results = $stylesheet->transform($doc);

	my $stringa=$stylesheet->output_file($results,$filehtm);
	print "$stringa";
	my $destinazione="../";
	move($filehtm , $destinazione);

print <<EOF;

<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="it" lang="it">

	<head>
		<title>Home Page - fluidaMente</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link href="../fotografo.css" rel="stylesheet" type="text/css" media="all"/>
    		<script type="text/javascript" src="javascript/niftycube.js"></script>
		<script type="text/javascript" src="javascript/NiftyLayout.js"></script>
	</head>

	<body>	
	
		<div id="header"><div id="fotoheader" alt="logo-fluidamente"></div></div>
		<div id="navigation">
				<ul>
					<li><a href="../index.html">home</a></li>
					<li><a href="../biografia.html">Biografia</a></li>
					<li><a href="#">Portfolio</a></li>
 						<li class="activelink"><a href="../guestbook.html">Guestbook</a></li>
		       			<li><a href="../contatti.html">Contatti</a></li>
				</ul>
	
		</div>	
		<div id="centrale">
			<h3>Inserimento Avvenuto.</h3>
                        <p> Il commento: $commento di $nome è stato salvato ed è ora visibile </p>
                        <p><a href="../guestbook.html" title="">torna ai commenti </a><p>
   		</div>
		<div id="piede">
			<p>Rampazzo Alessandro - Padova - Recapito 3479469835 </p>
		</div>
	</body>

</html>
EOF
exit;
}
