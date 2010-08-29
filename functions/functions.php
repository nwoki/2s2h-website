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

    function loadNews()
    {
        $webClass = new WebClass();
        $query = "select *from 2s2h_news;";  /* get all articles here */

        $result = $webClass->executeQuery( $query );

        while( $row = mysql_fetch_assoc( $result ) ) {
            $title = $row['title'];
            $author = $row['author'];
            $article = $row['article'];

            echo "
            <legend>".$title."</legend>
                <p>
                    ".$article."
                    <br/>
                    By: ".$author."
                </p>
            </fieldset>
            <br/>"; /* extra spacing between articles */
        }
    }


/*******************
 * ADMIN FUNCTIONS *
 * ****************/

    function showAdminList()    /* list from where to choose from */
    {
        $webClass = new WebClass();
        $query = "select *from 2s2h_admins;";    /* nick, pass(md5) */

        $result = $webClass->executeQuery( $query );

        echo"
        <h2>Admin List</h2>";

        echo "
        <form method=post action=modadmins.php>
            <table align=center>";

        while( $row = mysql_fetch_assoc( $result ) ) {
            $nick = $row['nick'];

            echo "
            <tr>
                <td><p>".$nick."</p></td>
                <td></td>
                <td><input type=radio name=chosenAdmin value=".$nick."></td>
            </tr>";
        }

        echo "
            </table>
        <br/>
        <center><input type=submit value=submit></center>
        </form>";

        /* insert new admin button */
        echo"
        <form action=modadmins.php method=post>
            <center><input type=submit value=add_New_Admin></center>
            <input type=hidden name=addNewAdmin value=true>
        </form>";

        /* back button */
        echo"
        <form action=adminpage.php method=post>
            <center>
                <input type=submit value=back>
            </center>
        </form>";
    }

    function showModAdmin( $nick )  /* modify selected admin */
    {
        $webClass = new WebClass();
        $query = "select *from 2s2h_admins where nick=\"$nick\";";

        $result = $webClass->executeQuery( $query );

        echo"
        <form method=post action=modadmins.php>
            <table align=center>";

        $row = mysql_fetch_assoc( $result );
        $id = $row['id'];
        $nick = $row['nick'];

        echo"
        <h2>Mod Admin: ".$nick."</h2>";

        echo"
            <tr>
                <td><p>Nick</p></td>
                <td>
                    <input type=text name=modAdminName value=".$nick."
                </td>
            </tr>
            <tr>
                <td><p>New Pass</p></td>
                <td><input type=text name=modAdminPass value=''</td>
            </tr>
        </table>

        <input type=hidden name=adminToModId value=".$id.">

        <br/>
        <center>
            <input type=submit value=submit>
            <input type=reset value=reset>
        </center>
        </form>";

        /* delete button */
        echo"
        <form action=modadmins.php method=post>
            <center>
                <input type=submit value=delete>
                <input type=hidden name=adminToDeleteId value=".$id.">
            </center>
        </form>";

        /* back button */
        echo"
        <form action=adminpage.php method=post>
            <center>
                <input type=submit value=back>
            </center>
        </form>";

    }

    function submitModAdmin( $nick, $pass, $sessionUser ) /* submit to database the new admin info */
    {
        if( empty( $nick ) )    /* can't set empty nick for an admin */
            die( "Can't set empty nick for an admin " );

        $webClass = new WebClass();
        $query = "update 2s2h_admins set nick=\"$nick\"";

        if( !empty( $pass ) ) {
            $newPass = md5( $pass );
            $query = $query.",pass=\"$newPass\"";
        }

        $query = $query." where id=\"$sessionUser\";";

        $result = $webClass->executeQuery( $query );

        if( $result )
            echo"<p>ADMIN UPDATED</p>";

        else
            echo"<p>ADMIN NOT UPDATED</p>";

        /* back button */
        echo"
        <form action=adminpage.php method=post>
            <center>
                <input type=submit value=back>
            </center>
        </form>";
    }

    function deleteAdmin( $id )
    {
        $webClass = new WebClass();
        $query = "delete from 2s2h_admins where id=\"$id\"";

        $result = $webClass->executeQuery( $query );

        if( $result )
            echo"<p>ADMIN DELETED</p>";
        else
            echo"<p>ADMIN NOT DELETED</p>";

        /* back button */
        echo"
        <form action=adminpage.php method=post>
            <center>
                <input type=submit value=back>
            </center>
        </form>";
    }

    function addNewAdminForm()
    {
        echo"
        <center>
            <form action=modadmins.php method=post>
                <table>
                    <tr>
                        <td><p>new_nick</p></td>
                        <td><input type=text name=newAdminNick value=''></td>
                    </tr>
                    <tr>
                        <td><p>new_pass</p></td>
                        <td><input type=text name=newAdminPass value=''></td>
                    </tr>
                </table>
            <input type=hidden name=submitNewAdmin value='true'>
            <input type=submit value=submit><input type=reset value=reset>
            </form>
        </center>";
    }

    function insertNewAdmin( $nick, $pass )
    {
        if( empty( $nick ) && empty( $pass ) )
            print( "<p>Empty values not allowed!</p>" );

        else {
            $webClass = new WebClass();
            $cryptPass = md5( $pass );
            $query = "insert into 2s2h_admins values('',\"$nick\",\"$cryptPass\");";

            $result = $webClass->executeQuery( $query );

            if( $result )
                echo"<p>ADMIN ADDED SUCCCESSFULLY</p>";
            else
                echo"<p>ADMIN NOT ADDED </p>";
        }

        /* back button */
        echo"
        <form action=adminpage.php method=post>
            <center>
                <input type=submit value=back>
            </center>
        </form>";

    }


/*******************
 * NEWS  FUNCTIONS *
 * ****************/

    function showNewsList() /* shows list of news articles to choose from */
    {
        $webClass = new WebClass();
        $query = "select *from 2s2h_news;";

        $result = $webClass->executeQuery( $query );

        echo"
        <h2>News List</h2>";

        echo "
        <form method=post action=modnews.php>
            <table align=center>";

        while( $row = mysql_fetch_assoc( $result ) ) {
            $title = $row['title'];

            echo "
            <tr>
                <td><p>".$title."</p></td>
                <td></td>
                <td><input type=radio name=chosenTitle value=".$title."></td>
            </tr>";
        }

        echo "
            </table>
        <br/>
        <center><input type=submit value=submit></center>
        </form>";

        /* insert new article button */
        echo"
        <form action=modnews.php method=post>
            <center><input type=submit value=add_New_Article></center>
            <input type=hidden name=addNewArticle value=true>
        </form>";

        /* back button */
        echo"
        <form action=adminpage.php method=post>
            <center>
                <input type=submit value=back>
            </center>
        </form>";
    }
?>
