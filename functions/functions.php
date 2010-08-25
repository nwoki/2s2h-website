<?php
    require( 'functions/WebClass.php' );


    function adminLogin( $nick, $pass )
    {
        $webClass = new WebClass();
        return $webClass->adminLogin( $nick, $pass );
    }

    function bottomPageInfo()
    {
        echo
        "<div id=bottomPageInfo>
            <hr width='50%'/>
            2Steps2Hell website made by [2s2h]zamy & [2s2h]n3m3s1s<br/>
            <a href='contactus.php'>Contact us</a> - <a href='adminlogin.php'>AdminCp</a> - <a href='awards.php'>Awards</a>
        </div>";
    }

    function isAdmin( $who )
    {

    }

?>
