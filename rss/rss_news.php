<?php
    header( "Content-type: text/xml" );

    require( '../functions/WebClass.php' );

    $link = "http://www.2s2h.com/2steps-2hell-news.php";
    echo "<?xml version='1.0' encoding='ISO-8859-1'?>
        <rss version='2.0'>
        <channel>
        <title>2s2h news</title>
        <link>".$link."</link>
        <description>2Step2Hell's news</description>";

    $webClass = new WebClass();
    $newsQuery = "select *from 2s2h_news;";
    $result = $webClass->executeQuery( $newsQuery );

    if( $result ) {
        while( $row = mysql_fetch_assoc( $result ) ) {
            $id = $row['id'];
            $title = $row['title'];
            $weblink = $link."#".$id;
            $article = $row['article'];
            $author = $row['author'];
            $pubdate = $row['time'];

            echo "<item>
            <title>".$title."</title>
            <link>".$weblink."</link>
            <description>".nl2br( $article )."</description>
            <author>".$author."</author>
            <pubDate>".$pubdate."</pubDate>
            </item>";
        }

        // finish rss file
        echo
        "</channel>
        </rss>";
    }

    $webClass->close();
?>