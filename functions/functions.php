<?php
    require( 'WebClass.php' );
    require( 'configuration.php' );

    function debugCode ( $check = false )
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
    	if (!empty($_SESSION['language']))
    	{
			echo '<p class="center"> <a href="?ln=select">';
			if ($_SESSION['language'] == 'it')
				echo 'cambia la lingua';
			else
				echo 'change language';
			echo '</a></p><br/>';
		}
        if ($_SESSION["page"]!="admin")
            echo
            '<div class="separate sfondo-footer">
             <div id="bottomPageInfo">
                &copy; 2Steps 2Hell '.date("Y").' website made by [2s2h]zamy &amp; [2s2h]n3m3s1s &amp; [2s2h]Rambo<br/>
                <a href="2steps-2hell-contact-us.php">Contact us</a> -
                <a href="2steps-2hell-news.php" >News</a> -
                <a href="2steps-2hell-noleggio-server.php" >Server renting</a> -
                <a href="2steps-2hell-banbot.php" >BanBot</a> -
                <a href="2steps-2hell-roster.php" >Roster</a> -
                <a href="http://x2s2hx.altervista.org/forum/index.php" >Forum</a> -
                <a href="http://x2s2hx.altervista.org/bugtracker/index.php" >BugTracker</a> -
                <a href="2steps-2hell-awards.php">Awards</a> -
				<a href="http://x2s2hx.altervista.org/vwar/war.php?action=nextaction">VWar</a> -
								<a href="#" id="show" class="adminTab">AdminCP</a>
								<a href="#" id="hide" class="adminTab">CloseTab</a>
            </div>
            </div>';
        else    //se sono nella sezione admin, i link sono diversi
            echo
            '<div class="separate sfondo-footer">
             <div id="bottomPageInfo">
                &copy; 2Steps 2Hell '.date("Y").' website made by [2s2h]zamy &amp; [2s2h]n3m3s1s &amp; [2s2h]Rambo<br/>
                <a href="../2steps-2hell-contact-us.php">Contact us</a> -
                <a href="../2steps-2hell-news.php" >News</a> -
                <a href="../2steps-2hell-noleggio-server.php" >Server renting</a> -
                <a href="../2steps-2hell-banbot.php" >BanBot</a> -
                <a href="../2steps-2hell-roster.php" >Roster</a> -
                <a href="http://x2s2hx.altervista.org/forum/index.php" >Forum</a> -
                <a href="http://x2s2hx.altervista.org/bugtracker/index.php" >BugTracker</a> -
                <a href="../2steps-2hell-awards.php">Awards</a> -
                <a href="http://x2s2hx.altervista.org/vwar/admin/index.php">VWar</a>
            </div>
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
                    <a href="2steps-2hell-noleggio-server.php" >Server renting</a>
                    <a href="2steps-2hell-banbot.php" >BanBot</a>
                    <a href="2steps-2hell-services.php" >Other services</a>
                    <a href="2steps-2hell-roster.php" >Roster</a>
                    <a href="http://x2s2hx.altervista.org/forum/index.php" >Forum</a>
                    <a href="http://x2s2hx.altervista.org/bugtracker/index.php" >BugTracker</a>
                </div>';
                break;

            case "news":
                echo
                '<div id="menu" class="clearfix">
                    <a href="2steps-2hell-contact-us.php" >Contact Us</a>
                    <a class="active" href="2steps-2hell-news.php" >News</a>
                    <a href="2steps-2hell-noleggio-server.php" >Server renting</a>
                    <a href="2steps-2hell-banbot.php" >BanBot</a>
                    <a href="2steps-2hell-services.php" >Other services</a>
                    <a href="2steps-2hell-roster.php" >Roster</a>
                    <a href="http://x2s2hx.altervista.org/forum/index.php" >Forum</a>
                    <a href="http://x2s2hx.altervista.org/bugtracker/index.php" >BugTracker</a>
                </div>';
                break;

            case "server":
                echo
                '<div id="menu" class="clearfix">
                    <a href="2steps-2hell-contact-us.php" >Contact Us</a>
                    <a href="2steps-2hell-news.php" >News</a>
                    <a class="active" href="2steps-2hell-noleggio-server.php" >Server renting</a>
                    <a href="2steps-2hell-banbot.php" >BanBot</a>
                    <a href="2steps-2hell-services.php" >Other services</a>
                    <a href="2steps-2hell-roster.php" >Roster</a>
                    <a href="http://x2s2hx.altervista.org/forum/index.php" >Forum</a>
                    <a href="http://x2s2hx.altervista.org/bugtracker/index.php" >BugTracker</a>
                </div>';
                break;

            case "bot":
                echo
                '<div id="menu" class="clearfix">
                    <a href="2steps-2hell-contact-us.php" >Contact Us</a>
                    <a href="2steps-2hell-news.php" >News</a>
                    <a href="2steps-2hell-noleggio-server.php" >Server renting</a>
                    <a class="active" href="2steps-2hell-banbot.php" >BanBot</a>
                    <a href="2steps-2hell-services.php" >Other services</a>
                    <a href="2steps-2hell-roster.php" >Roster</a>
                    <a href="http://x2s2hx.altervista.org/forum/index.php" >Forum</a>
                    <a href="http://x2s2hx.altervista.org/bugtracker/index.php" >BugTracker</a>
                </div>';
                break;

            case "otherservices":
                echo
                '<div id="menu" class="clearfix">
                    <a href="2steps-2hell-contact-us.php" >Contact Us</a>
                    <a href="2steps-2hell-news.php" >News</a>
                    <a href="2steps-2hell-noleggio-server.php" >Server renting</a>
                    <a href="2steps-2hell-banbot.php" >BanBot</a>
                    <a class="active" href="2steps-2hell-services.php" >Other services</a>
                    <a href="2steps-2hell-roster.php" >Roster</a>
                    <a href="http://x2s2hx.altervista.org/forum/index.php" >Forum</a>
                    <a href="http://x2s2hx.altervista.org/bugtracker/index.php" >BugTracker</a>
                </div>';
                break;

            case "roster":
                echo
                '<div id="menu" class="clearfix">
                    <a href="2steps-2hell-contact-us.php" >Contact Us</a>
                    <a href="2steps-2hell-news.php" >News</a>
                    <a href="2steps-2hell-noleggio-server.php" >Server renting</a>
                    <a href="2steps-2hell-banbot.php" >BanBot</a>
                    <a href="2steps-2hell-services.php" >Other services</a>
                    <a class="active" href="2steps-2hell-roster.php" >Roster</a>
                    <a href="http://x2s2hx.altervista.org/forum/index.php" >Forum</a>
                    <a href="http://x2s2hx.altervista.org/bugtracker/index.php" >BugTracker</a>
                </div>';
                break;

            case "admin":
                echo
                '<div id="menu" class="clearfix">
                    <a href="../2steps-2hell-contact-us.php" >Contact Us</a>
                    <a href="../2steps-2hell-news.php" >News</a>
                    <a href="../2steps-2hell-noleggio-server.php" >Server renting</a>
                    <a href="../2steps-2hell-banbot.php" >BanBot</a>
                    <a href="../2steps-2hell-services.php" >Other services</a>
                    <a href="../2steps-2hell-roster.php" >Roster</a>
                    <a href="http://x2s2hx.altervista.org/forum/index.php" >Forum</a>
                    <a href="http://x2s2hx.altervista.org/bugtracker/index.php" >BugTracker</a>
                </div>';
                break;

            case "bot-servers":
                echo
                '<div id="menu" class="clearfix">
                    <a href="../2steps-2hell-contact-us.php" >Contact Us</a>
                    <a href="../2steps-2hell-news.php" >News</a>
                    <a href="../2steps-2hell-noleggio-server.php" >Server renting</a>
                    <a href="../2steps-2hell-banbot.php" >BanBot</a>
                    <a href="../2steps-2hell-roster.php" >Roster</a>
                    <a href="http://x2s2hx.altervista.org/forum/index.php" >Forum</a>
                    <a href="http://x2s2hx.altervista.org/bugtracker/index.php" >BugTracker</a>
                </div>';
                break;

            default:
                echo
                '<div id="menu" class="clearfix">
                    <a class="first" href="2steps-2hell-contact-us.php" >Contact Us</a>
                        <a href="2steps-2hell-news.php" >News</a>
                        <a href="2steps-2hell-noleggio-server.php" >Server renting</a>
                        <a href="2steps-2hell-banbot.php" >BanBot</a>
                        <a href="2steps-2hell-services.php" >Other services</a>
                        <a href="2steps-2hell-roster.php" >Roster</a>
                        <a href="http://x2s2hx.altervista.org/forum/index.php" >Forum</a>
                        <a class="last" href="http://x2s2hx.altervista.org/bugtracker/index.php" >BugTracker</a>
                </div>';
        }
    }

    function loadNews()
    {
        $webClass = new WebClass();
        $query = "SELECT * FROM 2s2h_news ORDER BY 2s2h_news.time DESC;";  /* get all articles here */

        $result = $webClass->executeQuery( $query );

        while( $row = mysql_fetch_assoc( $result ) ) {

            $id = $row['id'];
			$title = $row['title'];
            $author = $row['author'];
            $article = html_entity_decode( $row['article'] );    /* need to decode, on database article is saved as html */
            $date = $row['time'];

            echo "
            <div id=\"$id\" class=\"news-article\">
                <h3 class=\"title-art\">".$title." - <span>". convertTime ( $date ) ."</span></h3>
                <div>
                    <p>".$article."</p>";
            echo    "<p class=\"auth\">By: ".$author."</p>
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

    /*
     * creates a back button
     */
    function backButton($redirectPageUrl)
    {
        echo"
        <form action=\"$redirectPageUrl\" method=post>
            <center>
                <input type=submit value=back>
            </center>
        </form>";
    }

/*****************************
 * Gestione numero downloads *
 *****************************/

    function getDownloads($files)
    {
        $webClass = new WebClass();
        $query = "SELECT * FROM 2s2h_downloads;";  /* get all articles here */

        $result = $webClass->executeQuery( $query );
        $filesOnDb = array();
        while( $row = mysql_fetch_assoc( $result ) ) {
        	//salvo tutto su un array
        	$filesOnDb[] = $row;
        	}

        $downloads = array();

		foreach ($files as $file)
		{
			//controllo per ogni file se è già presente nel database
			$name = substr($file,strrpos($file,'/'));
			$found = false;

			foreach ($filesOnDb as $fileOnDb)
			{
				if ( strcmp($fileOnDb['file'],$name) == 0 )
				{
					$found = true;
					$downloads[$file] = $fileOnDb['number'];
				}
			}
			if ( !$found )
			{
				//aggiungo un record al db
				$query = "INSERT INTO 2s2h_downloads VALUES ('',\"$name\",\"0\");";
				$webClass->executeQuery( $query );
				$downloads[$file] = 0;
			}
		}

        $webClass->close();
        return $downloads;
    }

    function updateDownload($file)
    {
    	$webClass = new WebClass();
    	$name = substr($file,strrpos($file,'/')+1);
    	$query = "SELECT * FROM 2s2h_downloads WHERE file=\"$name\";";
    	$result = $webClass->executeQuery( $query );

    	$row = mysql_fetch_assoc( $result );

        $query = "UPDATE 2s2h_downloads SET number=\"".($row['number']+1)."\" WHERE file=\"$name\";";
        $webClass->executeQuery( $query );
    }
    
/**********************
 * Gestione Files 	  *
 *********************/
 
 function linux_size($file) {
 	  $size=exec('ls -l '.$file.' | awk \'{printf $5 }\'');
 	  
      $sizes = array(" Bytes", " KB", " MB", " GB", " TB", " PB", " EB", " ZB", " YB");
      if ($size == 0) { return('n/a'); } 
      else {
      	return (round($size/pow(1024, ($i = floor(log($size, 1024)))), $i > 1 ? 2 : 0) . $sizes[$i]);
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
        if( empty( $nick ) && empty( $pass ) )
            print( "<p>Empty values not allowed!</p>" );

        else {
            $webClass = new WebClass();

            if( $webClass->checkAdminExistance( $nick ) ) {
                $cryptPass = md5( $pass );
                $query = "insert into 2s2h_admins values('',\"$nick\",\"$cryptPass\");";

                $result = $webClass->executeQuery( $query );

                if( $result )
                    echo"<p>ADMIN ADDED SUCCCESSFULLY</p>";
            }
            else
                echo"<p>ADMIN NOT ADDED. Nick might be already taken</p>";
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

            $brs = array( "<br>", "<br/>", "<br />" );              // various new line entries
            $title = $row['title'];
            $article = str_replace( $brs, "", $row['article'] );    // replace html newlines so editing doesn't become a mess
            $author = $row['author'];

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
            $date = date( "Y-m-d H:i:s" );

            $articleHtml = htmlentities( $article, ENT_QUOTES );    /* transform into html in case of special chars */
            $articleBR = nl2br( $articleHtml/*, false*/ );              /* add <br/> in the right places */
            $articleOk = addSlashes( $articleBR );                  /* adds slashes where needed so database query doesn't fail */

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
        $modDate = date( "Y-m-d H:i:s" );   /* get date from machine */
        $webClass = new WebClass();
        $articleHtml = htmlentities( $modArticle, ENT_QUOTES );
        $articleBR = nl2br( $articleHtml );
        $articleOk = addSlashes( $articleBR );    /* adds slashes where needed so database query doesn't fail */

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

    function restrictedArea( $status )
    {
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

    function listRoster( $min = 0, $max = 10000 )
    {
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
    
/**********************
 * Language selection *
 *********************/
 	//set the seleceted language, set and check the cookie
 	function checkLanguage ()
 	{
 		if ( empty($_SESSION['language']) )
 		{
	 		if ( !empty($_GET['ln']) )
	 		{
	 			if ( $_GET['ln'] == 'it' ) $_SESSION['language'] = $_GET['ln']; //check if the language is correct
	 			else $_SESSION['language'] = 'en'; //else apply the default
	 			setcookie ( "language", $_SESSION['language'], time() + 60*60*24*30, "/" );
	 		}
	 		else if ( !empty($_COOKIE['language']) )
	 		{
	 			$_SESSION['language'] = $_COOKIE['language'];
	 			setcookie ( "language", $_SESSION['language'], time() + 60*60*24*30, "/" );
	 		}
	 	}
	 	else if ($_GET['ln'] == "select")
		{
			$_SESSION['language'] = "";
			setcookie ( "language", "", time() - 30, "/" );
		}
 	}
 	
 	// return true if the language is already selected and you can continue with normal content, false if it insert the language selection.
 	function languageSelection ()
 	{
 		if ( !empty($_SESSION['language']) ) return true;
 		else
 		{
 			echo '<div id="content">
 			<div id="padding">
 				<br/><p class="center">Choose the language: <br/> Scegli la lingua:</p>
 				<p class="center">
				  <a href="?ln=it" rel="it" class="change"><img src="img/bandiera_italia.jpg" alt="" /> </a>
				  <a href="?ln=en" rel="en" class="change"><img src="img/bandiera_inglese.jpg" alt="" /> </a>
				</p>
 			</div></div>';
 			return false;
 		}
 	}

/*****************
 * RSS FUNCTIONS *
 ****************/

    /*   weblink is the link to the specific article
     *   date is taken from system when publishing
     */

//   this is for writing rss to xml file. Do this when i figure out the permissions error. For now use "rss_news.php page

//     function insertNewRss( $title, $weblink, $description )
//     {
//         // no empty values allowed
//         if( empty( $title ) || empty( $weblink ) || empty( $description ) )
//             print( "<p>insertNewsRss: Empty values not allowed!</p>" );
//         else {
//             $webClass = new WebClass();
//             $pubdate = date( "y-m-d H:m:s" );
//
//             // add final three points
//             $description[ strlen( $description )-1 ] = ".";
//             $description[ strlen( $description )-2 ] = ".";
//             $description[ strlen( $description )-3 ] = ".";
//
//             $query = "insert into 2s2h_rss values( '', \"$title\", \"$weblink\", \"$description\", \"$pubdate\" );";
//
//             $result = $webClass->executeQuery( $query );
//
//             if( $result )
//                 echo"<p>RSS ARTICLE ADDED SUCCCESSFULLY</p>";
//             else
//                 echo"<p>RSS ARTICLE NOT ADDED </p>";
//         }
//     }
//
//
//
//     function modRss()
//     {
//     }
//
//     function updateRssFeed()    /* updates rss file creating a new one from data found on rss database */
//     {
//         $newsRssFile = "rss/newsRss.xml";  /* specific file */
//         $newsRssfileHandle = fopen( $newsRssFile, "w" );
//
//         if( !$newsRssfileHandle ) {
//             echo "<p>Can't create rss file ".$newsRssFile."!</p>";
//             fclose( $newsRssfileHandle );   /* just to be shure */
//         }
//         else {  /* my file is now open */
//
//             // write down the first part
//             $rssStart =
//             "<rss version='2.0'>
//             <channel>
//             <title>2s2h news rss feed</title>
//             <link>http://www.2s2h.com/2steps-2hell-news.php</link>";
//
//             fwrite( $newsRssfileHandle, $rssStart );    /* write first part of rss file */
//
//             $webClass = new WebClass();
//             $newsQuery = "select *from 2s2h_rss;";
//             $result = $webClass->executeQuery( $newsQuery );
//
//             if( $result ) {
//                 while( $row = mysql_fetch_assoc( $result ) ) {
//                     $title = $row['title'];
//                     $weblink = $row['weblink'];
//                     $description = $row['description'];
//                     $pubdate = $row['pubdate'];
//
//                     $rssItem =
//                     "<item>
//                     <title>".$title."</title>
//                     <link>".$weblink."</link>
//                     <description>
//                     ".$description."
//                     </description>
//                     <pubDate>".$pubdate."</pubDate>
//                     </item>";
//
//                     // write item to file
//                     fwrite( $newsRssfileHandle, $rssItem );
//                 }
//
//                 // finish rss file
//                 $rssEnd =
//                 "</channel>
//                 </rss>";
//
//                 // and close fileName
//                 fclose( $newsRssfileHandle );
//             }
//         }
//
//     }

?>

