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
                print( "<p>Can't use database '".$this->m_dbName."' : ".mysql_error( $this->m_dbLink )."</p>" );
                print( "<p>Please go to 'initialize.php' to setup database for first run</p>" );
            }
        }
        else  /* i'm on initialize page */
            $this->createDbFirstRun();
    }

    function __destruct()   /* class destructor */
    {
        print ( "<p>WebClass::__destruct</p>" );
    }

    /*******************
    * public functions *
    *******************/


    /********************
    * private functions *
    ********************/
    private function connectToDatabase()    /* connect to database */
    {
        $this->m_dbLink = mysql_connect( $this->m_host, $this->m_user, $this->m_pass );

        if( !$this->m_dbLink )
            die( "<p>Can't connect to database server : ".mysql_error()."</p>" );
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

    private function createTables()      /* create database tables */
    {
        $result = mysql_query( "show tables", $this->m_dbLink );    /* check to see if i already have the database tables */
        $row = mysql_fetch_row($result);

        if( empty($row[0]) ) {
            print("<p>TABLES DON'T exist!</p>");
            $scriptArr = array( "db/admins.sql", "db/news.sql", "db/roster.sql" );    /* where my sql scripts are */

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
                print( "<p>Creation of table from ".$file." completed!</p>" );
            }
            /* and add default admin */
            $this->createDefaultAdmin();
        }
        else
            print( "<p>Database tables already exist</p>!" );
    }

    private function createDefaultAdmin()   /* inserts into db default admin, to use after fresh start */
    {
        $pass = md5( "defaultPassword" );

        print (" PASS -> ".$pass);
        $query = "insert into admins values( 'admin', '".$pass."' )";

        if( !mysql_query( $query, $this->m_dbLink ) )
            die( "<p>error on creating admin : ".mysql_error( $this->m_dbLink )."</p>" );
        else {
            print( "<p>Default admin created with success! You may now login with:<br/>" );
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

        print( "<p><br/>redirecting in 10 seconds..</p>" );
        header( "refresh: 10; index.php" );  /* redirect after 5 seconds */
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
