<?php
    require( 'WebClass.php' );
    require( 'configuration.php' );

		function debugCode ( $check = false)
		{
				if ( $check ) {
						error_reporting( E_ALL );
						ini_set( 'display_errors', '1' );
				}
		else
				return true;
		}


    function adminLogin( $nick, $pass )
    {

				$webClass = new WebClass();
				return $webClass->adminLogin( $nick, $pass );

    }

    function bottomPageInfo()
    {
        if ($_SESSION["page"]!="admin")
            echo
            '<div id="bottomPageInfo">
                &copy; 2Steps 2Hell '.date("Y").' website made by [2s2h]zamy &amp; [2s2h]n3m3s1s &amp; [2s2h]Rambo<br/>
                <a href="2steps-2hell-contact-us.php">Contact us</a> -
                <a href="2steps-2hell-news.php" >News</a> -
                <a href="2steps-2hell-noleggio-server.php" >Server</a> -
                <a href="2steps-2hell-banbot.php" >BanBot</a> -
                <a href="2steps-2hell-roster.php" >Roster</a> -
                <a href="forum/index.php" >Forum</a> -
                <a href="bugtracker/index.php" >BugTracker</a> -
                <a href="2steps-2hell-awards.php">Awards</a> -
								<a href="/vwar/war.php?action=nextaction">VWar</a> -
								<a href="#" id="show" class="adminTab">AdminCP</a> 
								<a href="#" id="hide" class="adminTab">CloseTab</a>
            </div>';
        else    //se sono nella sezione admin, i link sono diversi
            echo
            '<div id="bottomPageInfo">
                &copy; 2Steps 2Hell '.date("Y").' website made by [2s2h]zamy &amp; [2s2h]n3m3s1s &amp; [2s2h]Rambo<br/>
                <a href="../2steps-2hell-contact-us.php">Contact us</a> -
                <a href="../2steps-2hell-news.php" >News</a> -
                <a href="../2steps-2hell-noleggio-server.php" >Server</a> -
                <a href="../2steps-2hell-banbot.php" >BanBot</a> -
                <a href="../2steps-2hell-roster.php" >Roster</a> -
                <a href="../forum/index.php" >Forum</a> -
                <a href="../bugtracker/index.php" >BugTracker</a> -
                <a href="../2steps-2hell-awards.php">Awards</a> -
                <a href="../vwar/admin/index.php">VWar</a>
            </div>';
    }

    function menuPages( $page ) {
        // if use "admin" for $page variable to set the menu
        // for when i'm in the admin section

        switch ( $page ) {
            case "contact":
                echo
                '<div id="menu" class="clearfix">
                    <a class="active" href="2steps-2hell-contact-us.php" >Contact Us</a>
                    <a href="2steps-2hell-news.php" >News</a>
                    <a href="2steps-2hell-noleggio-server.php" >Server</a>
                    <a href="2steps-2hell-banbot.php" >BanBot</a>
                    <a href="2steps-2hell-roster.php" >Roster</a>
                    <a href="forum/index.php" >Forum</a>
                    <a href="bugtracker/index.php" >BugTracker</a>
                </div>';
                break;

            case "news":
                echo
                '<div id="menu" class="clearfix">
                    <a href="2steps-2hell-contact-us.php" >Contact Us</a>
                    <a class="active" href="2steps-2hell-news.php" >News</a>
                    <a href="2steps-2hell-noleggio-server.php" >Server</a>
                    <a href="2steps-2hell-banbot.php" >BanBot</a>
                    <a href="2steps-2hell-roster.php" >Roster</a>
                    <a href="forum/index.php" >Forum</a>
                    <a href="bugtracker/index.php" >BugTracker</a>
                </div>';
                break;

            case "server":
                echo
                '<div id="menu" class="clearfix">
                    <a href="2steps-2hell-contact-us.php" >Contact Us</a>
                    <a href="2steps-2hell-news.php" >News</a>
                    <a class="active" href="2steps-2hell-noleggio-server.php" >Server</a>
                    <a href="2steps-2hell-banbot.php" >BanBot</a>
                    <a href="2steps-2hell-roster.php" >Roster</a>
                    <a href="forum/index.php" >Forum</a>
                    <a href="bugtracker/index.php" >BugTracker</a>
                </div>';
                break;

            case "bot":
                echo
                '<div id="menu" class="clearfix">
                    <a href="2steps-2hell-contact-us.php" >Contact Us</a>
                    <a href="2steps-2hell-news.php" >News</a>
                    <a href="2steps-2hell-noleggio-server.php" >Server</a>
                    <a class="active" href="2steps-2hell-banbot.php" >BanBot</a>
                    <a href="2steps-2hell-roster.php" >Roster</a>
                    <a href="forum/index.php" >Forum</a>
                    <a href="bugtracker/index.php" >BugTracker</a>
                </div>';
                break;

            case "roster":
                echo
                '<div id="menu" class="clearfix">
                    <a href="2steps-2hell-contact-us.php" >Contact Us</a>
                    <a href="2steps-2hell-news.php" >News</a>
                    <a href="2steps-2hell-noleggio-server.php" >Server</a>
                    <a href="2steps-2hell-banbot.php" >BanBot</a>
                    <a class="active" href="2steps-2hell-roster.php" >Roster</a>
                    <a href="forum/index.php" >Forum</a>
                    <a href="bugtracker/index.php" >BugTracker</a>
                </div>';
                break;

            case "admin":
                echo
                '<div id="menu" class="clearfix">
                    <a href="../2steps-2hell-contact-us.php" >Contact Us</a>
                    <a href="../2steps-2hell-news.php" >News</a>
                    <a href="../2steps-2hell-noleggio-server.php" >Server</a>
                    <a href="../2steps-2hell-banbot.php" >BanBot</a>
                    <a href="../2steps-2hell-roster.php" >Roster</a>
                    <a href="../forum/index.php" >Forum</a>
                    <a href="../bugtracker/index.php" >BugTracker</a>
                </div>';
                break;

            default:
                echo
                '<div id="menu" class="clearfix">
                    <a class="first" href="2steps-2hell-contact-us.php" >Contact Us</a>
                        <a href="2steps-2hell-news.php" >News</a>
                        <a href="2steps-2hell-noleggio-server.php" >Server</a>
                        <a href="2steps-2hell-banbot.php" >BanBot</a>
                        <a href="2steps-2hell-roster.php" >Roster</a>
                        <a href="forum/index.php" >Forum</a>
                        <a class="last" href="bugtracker/index.php" >BugTracker</a>
                </div>';
        }
    }

    function loadNews()
    {
        $webClass = new WebClass();
        $query = "SELECT * FROM 2s2h_news ORDER BY 2s2h_news.time DESC;";  /* get all articles here */

        $result = $webClass->executeQuery( $query );

        while( $row = mysql_fetch_assoc( $result ) ) {

						$title = $row['title'];
            $author = $row['author'];
            $article = $row['article'];
            $date = $row['time'];
            echo "
            <div class=\"news-article\">
                <h3 class=\"title-art\">".$title." - <span>". convertTime ( $date ) ."</span></h3>
                <div>
                    <p>".$article."</p>
                    <p class=\"auth\">By: ".$author."</p>
                </div>
            </div>"; /* extra spacing between articles */
        }

        $webClass->close();
    }

    function convertTime ( $timeDate )
    {
        $timestamp = explode(" ", $timeDate );

        $date = explode("-", $timestamp[0] );

        return $date[2] ."/". $date[1]."/".$date[0]." ".$timestamp[1];

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
        <center>
            <table>";

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
        </center>
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

        /* back button */
        echo"
        <form action=adminpage.php method=post>
            <center>
                <input type=submit value=back>
            </center>
        </form>";
    }

    function insertNewAdmin( $nick, $pass ) /* function that does the operations on the database */
    {
        /// TODO _: check if admin is already on database
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
        <center>
        <form method=post action=modnews.php>
            <table align=center>";

        while( $row = mysql_fetch_assoc( $result ) ) {
            $id = $row['id'];
            $title = $row['title'];

            echo "
            <tr>
                <td><p>".$title."</p></td>
                <td></td>
                <td><input type=radio name=chosenArticle value=".$id."></td>
            </tr>";
        }

        /* submit my selection */
        echo "
            </table>
        <br/>
        <center><input type=submit value=submit></center>
        </form>
        </center>";

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

    function showModArticle( $articleId )
    {
        $webClass = new WebClass();
        $query = "select *from 2s2h_news where id=\"$articleId\";";

        $result = $webClass->executeQuery( $query );

        if( !$result )
            print( "<p>ERROR: can't find id : ".mysql_error( $webClass->m_dbLink ) );
        else {
            /* get neccessary info */
            $row = mysql_fetch_assoc( $result );

            $title = $row['title'];
            $article = $row['article'];
            $author = $row['author'];
            $date = date( "Y-m-d" );

            echo"
            <center>
                <form action=modnews.php method=post>
                    <table align=center cellpadding=0 cellspacing=0>
                        <tr>
                            <td>title</td>
                            <td><input type=text name=modArticleTitle value=".$title."></td>
                        </tr>
                        <tr>
                            <td>article</td>
                            <td><textarea name=modArticleText rows=20 cols=80>".$article."</textarea></td>
                        </tr>
                    </table>

                <input type=hidden name=articleToModId value=".$articleId.">
                <input type=submit value=submit>
                <input type=reset value=reset>

                </form>
            </center>";

            /* delete button */
            echo"
            <form action=modnews.php method=post>
                <center>
                    <input type=submit value=delete>
                    <input type=hidden name=articleToDeleteId value=".$articleId.">
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
    }

    function addNewArticleForm()
    {
        echo"
        <center>
            <form action=modnews.php method=post>
                <table>
                    <tr>
                        <td><p>title</p></td>
                        <td><input type=text name=newTitle value=''></td>
                    </tr>
                    <tr>
                        <td><p>article</p></td>
                        <td><textarea name=newArticle rows=20 cols=80></textarea></td>
                    </tr>
                </table>
            <input type=hidden name=submitNewArticle value='true'>
            <input type=submit value=submit><input type=reset value=reset>
            </form>
        </center>";

        /* back button */
        echo"
        <form action=adminpage.php method=post>
            <center>
                <input type=submit value=back>
            </center>
        </form>";

    }

    function insertNewArticle( $title, $author, $article )
    {
        if( empty( $title ) || empty( $article ) )
            print( "<p>Empty values not allowed!</p>" );
        else {
            $webClass = new WebClass();
            $date = date( "Y-m-d" );

            $articleOk = addSlashes( $article );    /* adds slashes where needed so database query doesn't fail */
            $query = "insert into 2s2h_news values( '',\"$title\",\"$author\" ,\"$articleOk\",\"$date\" );";

            $result = $webClass->executeQuery( $query );

            if( $result )
                echo"<p>ARTICLE ADDED SUCCCESSFULLY</p>";
            else
                echo"<p>ARTICLE NOT ADDED </p>";
        }

        /* back button */
        echo"
        <form action=adminpage.php method=post>
            <center>
                <input type=submit value=back>
            </center>
        </form>";
    }

    function submitModArticle( $modTitle, $modAuthor, $modArticle, $articleIdToMod )
    {
        //print( "<br/>title-> ".$modTitle."\n <br/>author-> ".$modAuthor."\n <br/>art-> ".$modArticle."\n <br/>id-> ".$articleIdToMod."<br/>" );
        if( empty( $articleIdToMod ) )
            die( "Can't find news id to modify. Recieved an empty value " );

        /* can't set empty values */
        if( empty( $modTitle ) || empty( $modAuthor ) || empty( $modArticle ) )
            die( "Can't set empty values for the news articles " );

        //date_default_timezone_set('CEST');   /* set default date timezone */
        $modDate = date( "Y-m-d" );   /* get date from machine */
        $webClass = new WebClass();
        $articleOk = addSlashes( $modArticle );    /* in case i add strange quoted stuff */

        $query = "update 2s2h_news set title=\"$modTitle\", author=\"$modAuthor\", article=\"$articleOk\", time=\"$modDate\" where id=\"$articleIdToMod\"";

        $result = $webClass->executeQuery( $query );

        if( $result )
            echo"<p>ARTICLE UPDATED</p>";

        else
            echo"<p>ARTICLE NOT UPDATED</p>";

        /* back button */
        echo"
        <form action=adminpage.php method=post>
            <center>
                <input type=submit value=back>
            </center>
        </form>";
    }

    function deleteArticle( $articleToDeleteId )
    {
        $webClass = new WebClass();
        $query = "delete from 2s2h_news where id=\"$articleToDeleteId\"";

        $result = $webClass->executeQuery( $query );

        if( $result )
            echo"<p>ARTICLE DELETED</p>";
        else
            echo"<p>ARTICLE NOT DELETED</p>";

        /* back button */
        echo"
        <form action=adminpage.php method=post>
            <center>
                <input type=submit value=back>
            </center>
        </form>";
    }

    function restrictedArea( $status ) {

        if ( $_SESSION['page'] != 'admin' ) {
            $link1 = 'admin/adminpage.php';
            $link2 = 'admin/logout.php';
        } else {
            $link1 = 'adminpage.php';
            $link2 = 'logout.php';
        }

        if ( $status != 'admin' ) {
            echo '
            <!-- Login Form -->
        <form class="clearfix" action="#" method="post" name="login">
            <h1>Restricted Area</h1>
            <label class="grey" for="log">Username:</label>
            <input class="field" type="text" name="usr" id="usr" value="" size="23" />
            <label class="grey" for="pwd">Password:</label>
            <input class="field" type="password" name="psw" id="psw" size="23" />
            <input type="submit" name="submit" value="Login" class="bt_login" />
            <span id="load"></span><div id="attention">Invalid Username/Password</div>
        </form>
        <!-- /login -->
            ';
        } else {

            echo '
                <!-- Login Form -->
        <h1>Welcome <span id="user">'. $_SESSION['username'].'</span></h1>
        <a href="'.$link1.'" class="admin">Admin Page</a>
                    <a href="'.$link2.'" class="logout">Logout</a>
        <!-- /login -->
            ';

        }

    }

    function listRoster($min=0, $max=10000) {
        include('list-of-players.php');

        if ( $max == 10000) $max=count($roster);

        echo '<ul class="roster-list clearfix">'."\n";

        for ($i=$min; $i<$max; $i++)
            echo '<li><a href="#'.$roster[$i]['nome'].'">'.$roster[$i]['nome'].'</a></li>';

        echo '</ul>'."\n";
        echo '<div class="clear"></div>';

        for ($i=$min; $i<$max; $i++) {
            if ($i == 0 || ($i%2)==0 )
                $class="left";
            else
                $class="right";

            echo '
            <div id="'.$roster[$i]['nome'].'" class="fieldset clearfix" >
                <h2 class="'.$class.'">'.$roster[$i]['nome'].'</h2>
            <p>
            <img src="'.$roster[$i]['img'].'" class="'.$class.'" alt="" />'.
            $roster[$i]['desc'].'</p>
            <p class="cit">'.$roster[$i]['cit'].'</p>
            </div>';
        }
    }

?>

