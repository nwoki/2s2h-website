<?php

class WebClass
{
    function __construct( $initializeDatabase = false )  /* constructor called automatically */
    {
        // set private members
        $this->m_host = "localhost";
        $this->m_user = "root";
        $this->m_pass = "root";
        $this->m_dbName = "2s2hwebsite";

        $this->connectToDatabase(); /* create a link to database */

        if( !$initializeDatabase ) {  /* on a normal page */
            if( !$this->selectDatabase() ) {    /* select database to use */
                print( "<p class=\"debug\">Can't use database '".$this->m_dbName."' : ".mysql_error( $this->m_dbLink )."</p>" );
                print( "<p class=\"debug\">Please go to 'initialize.php' to setup database for first run</p>" );
            }
        }
        else  /* i'm on initialize page */
            $this->createDbFirstRun();
    }

    function __destruct()   /* class destructor */
    {
        //print ( "<p>WebClass::__destruct</p>" );
        /* close database connection */
        //$this->close();
    }

    /*******************
    * public functions *
    *******************/

	/* login function for admin page */
    public function adminLogin( $nick, $pass )
    {
        if( empty( $nick ) || empty( $pass ) )
            return false;
        else {
            $query = "select *from 2s2h_admins where nick=\"$nick\"";
            $result = mysql_query( $query, $this->m_dbLink ) or die( "AdminLogin: Query fallita!".mysql_error( $this->m_dbLink ) );

            while( $row = mysql_fetch_assoc( $result ) ) {  //get login and pass from database
                $out1 = $row['nick'];
                $out2 = $row['pass'];
            }

            if( $out1 == $nick && ( md5( $pass ) == $out2 ) ) //checks validity of password
                return true;
            else
                return false;
        }
    }

    public function executeQuery( $query )  /* returns result of query */
    {
        $result = mysql_query( $query, $this->m_dbLink );

        if( !$result )
            die( "<p  class=\"debug\">Error with executeQuery: ".mysql_error( $this->m_dbLink )."</p>" );
        else
            return $result;
    }
    /********************
    * private functions *
    ********************/

    public function close ()
    {
        if ( $this->m_dbLink) mysql_close($this->m_dbLink);
    }

    private function connectToDatabase()    /* connect to database */
    {
        $this->m_dbLink = mysql_connect( $this->m_host, $this->m_user, $this->m_pass );

        if( !$this->m_dbLink )
            die( "<p  class=\"debug\">Can't connect to database server : ".mysql_error()."</p>" );
    }

    private function selectDatabase()   /* select database to use */
    {
        if ( !mysql_select_db( $this->m_dbName, $this->m_dbLink ) )
            return false;
        else
            return true;
    }

    private function createDatabase()   /* check and create database */
    {
        if( !mysql_query( "create database ".$this->m_dbName ) )
            return false;
        else
            return true;
    }

    private function testTables()   /* just a check to see if tables have been already created */
    {
        $result = mysql_query( "show tables", $this->m_dbLink );    /* check to see if i already have the database tables */

        if( !$result )
            // must die here else database gets created on other pages other than "initialize"
            die( "WebClass::testTables can't create connection to database" );
        else {
            $row = mysql_fetch_row( $result );

            if( empty( $row[0] ) || $row[0] != "2s2h_admins" ) {
                echo "<p  class=\"debug\">TEST TABLES -> ".$row[0]."</p>";
                return false;
            }
            else
                return true;
        }
    }

    private function createTables()      /* create database tables */
    {
        $result = mysql_query( "show tables", $this->m_dbLink );    /* check to see if i already have the database tables */
        $row = mysql_fetch_row( $result );

        if( empty( $row[0] ) || $row[0] != "2s2h_admins" ) {
            print( "<p class=\"debug\">TABLES DON'T exist!</p>" );
            $scriptArr = array( "db/admins.sql", "db/news.sql", "db/downloads.sql" );    /* where my sql scripts are */

            foreach( $scriptArr as $file )
            {
                $stream = fopen( $file, "r" );
                $query = fread( $stream, filesize( $file ) );   /* get content of file */
                fclose( $stream );  /* close stream, don't need it anymore */

                $result = mysql_query( $query, $this->m_dbLink ); /* execute query */

                if( !$result ) {    /* on error */
                    $errMsg = "<p>Invalid query: <br/>".$query;
                    $errMsg .= "<br/>".mysql_error()."</p>";
                    die( $errMsg ); /* terminates function */
                }
                print( "<p class=\"debug\">Creation of table from ".$file." completed!</p>" );
            }
            /* and add default admin */
            $this->createDefaultAdmin();
            return true;
        }
        else {
            print( "<p>Database tables already exist</p>!" );
            return false;
        }
    }

    private function createDefaultAdmin()   /* inserts into db default admin, to use after fresh start */
    {
        $pass = md5( "defaultPassword" );

        $query = "insert into 2s2h_admins values( '', 'admin', '".$pass."' )";

        if( !mysql_query( $query, $this->m_dbLink ) )
            die( "<p class=\"debug\">error on creating admin : ".mysql_error( $this->m_dbLink )."</p>" );
        else {
            print( "<p class=\"debug\">Default admin created with success! You may now login with:<br/>" );
            print( "login : admin<br/>password : defaultPassword</p>" );
        }

    }

    private function createDbFirstRun() /* used to create database on first run */
    {
        print( "<p>Checking existance of database.." );

        if( $this->selectDatabase() )   /* first check existance of database */
            print( "FOUND!</p>" );
        else {
            print( "NOT FOUND!</p>" );
            print( "<p>Trying to create database.." );

            if( !$this->createDatabase() )    /* create database */
                print( "Can't create database ".$this->m_dbName." : ".mysql_error( $this->m_dbLink )."</p>" );
            else {
                print (": Database created!</p>");
                $this->selectDatabase();    /* and select newley created database */
            }
        }

        /* check for tables and create them if neccessary */
        $this->createTables();

        //print( "<p><br/>redirecting in 10 seconds..</p>" );
        //header( "refresh: 10; index.php" );  /* redirect after 5 seconds */
    }

		function getLink() {
		  return $this->m_dbLink;
		}

    /*******************
    * private members  *
    *******************/
    private $m_host;    /* dbServer */
    private $m_user;    /* dbUser */
    private $m_pass;    /* dbPass */
    private $m_dbLink;  /* link to db connection */
    private $m_dbName;  /* db Name */
}

?>
