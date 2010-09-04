<?php
    require( 'functions/WebClass.php' );
    require( 'configuration.php' );
		
		function debugCode ( $check = false) 
		{
		  if ( $check ) 
			{
			  error_reporting( E_ALL );
        ini_set( 'display_errors', '1' );
			}
	    else return true;	 
		}
    
			
    function adminLogin( $nick, $pass )
    {
        $webClass = new WebClass();
        return $webClass->adminLogin( $nick, $pass );
    }

    function bottomPageInfo()
    {
        echo
        '<div id="bottomPageInfo">
            &copy; 2Steps 2Hell '.date("Y").' website made by [2s2h]zamy &amp; [2s2h]n3m3s1s &amp; [2s2h]Rambo<br/>
            <a href="2stesps-2hell-contact-us.php">Contact us</a> -
						<a href="2steps-2hell-news.php" >News</a> -  
						<a href="2steps-2hell-noleggio-server.php" >Server</a> -  
						<a href="2steps-2hell-banbot.php" >BanBot</a> - 
						<a href="2steps-2hell-roster.php" >Roster</a> - 
						<a href="forum/index.php" >Forum</a> - 
						<a href="bugtracker/index.php" >BugTracker</a> - 
						<a href="admin/adminlogin.php">AdminCp</a> -  
						<a href="2steps-2hell-awards.php">Awards</a>
        </div>';
    }
		
		function menuPages( $page ) {
		  
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
    
		function headInfo() {
		
		
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

    function showModArticle( $articleId )
    {
        $webClass = new WebClass();
        $query = "select *from 2s2h_news where id=\"$articleId\";";

        $result = $webClass->executeQuery( $query );

        if( !$result )
            print( "<p>ERROR: can't find id : ".mysql_error( $webClass->m_dbLink ) );
        else {
            print( "<p>chose article with id  = ".$articleId."</p>" );

            /* get neccessary info */
            $row = mysql_fetch_assoc( $result );

            $title = $row['title'];
            $article = $row['article'];
            $author = $row['author'];
            $time = $row['time'];

            echo"
            <form action=modnews.php method=post>
                <table align=center cellpadding=0 cellspacing=0>
                    <tr>
                        <td>title</td>
                        <td><input type=text name=modArticleTitle value=".$title."
                    </tr>
                    <tr>
                        <td>author</td>
                        <td><input type=text name=modArticleTitle value=".$author."
                    </tr>
                    <tr>
                        <td>timestamp</td>
                        <td><input type=text name=modArticleTitle value=".$time."
                    </tr>";
                    /*
                     * TODO
                     *
                     * put a bigger text area to modify article body
                     * left the code like this cos I was kinda drunk and sleepy after 3 nights
                     * of going to bed at 4am
                     */
            echo"
                </table>
            </form>";


        }

    }
?>

