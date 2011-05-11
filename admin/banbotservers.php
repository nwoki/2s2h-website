<?php
    ob_start();
    session_start();
    if ( !isset($_SESSION['status']) || $_SESSION['status']!="admin" )
        header('location: ../index.php');
    require( '../functions/functions.php' );
    $_SESSION["page"] = "bot-servers";
    ob_end_flush();
    $dbLocation="../db/trackingStats.sqlite";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta name="description" content="<?php echo $description[$_SESSION["page"]]; ?>" />
        <title><?php echo $title[$_SESSION["page"]]; ?></title>
        <script src="../js/jquery-1.4.2.min.js" type="text/javascript"></script>
        <script src="../js/login.js" type="text/javascript"></script>
        <?php if ( isset($_SESSION['status']) && $_SESSION['status'] == 'admin') {?>
        <script src="../js/slide-admin.js" type="text/javascript"></script>
        <?php } else {?>
        <script src="../js/slide.js" type="text/javascript"></script>
        <?php }?>
        <link href="../css/style.css" type="text/css" rel="stylesheet"/>
        <link href="../css/slide.css" type="text/css" rel="stylesheet" media="screen" />
        <link href="../css/admin.css" type="text/css" rel="stylesheet" media="screen" />

    </head>

    <body>    
    <!-- Panel -->
    <div id="toppanel">
      <div id="panel">
        <div class="content clearfix">
          <div class="left all">
            <?php restrictedArea( $_SESSION['status'] ) ?>
          </div>
        </div>
      </div> 
      <!-- The tab on top -->  
      <div class="tab">
        <ul class="login">
          <li class="left">&nbsp;</li>
          <li id="toggle">
            <a id="open" class="open" href="#">Admin Area</a>
            <a id="close" class="close" href="#">Close</a>      
          </li>
          <li class="right">&nbsp;</li>
        </ul> 
      </div> <!-- / top -->
    </div> <!--panel -->

        <div id="header">
            <a href="../index.php"><img alt="" src="../img/spacer.gif" width="800" height="235" /></a>
        </div>

        <div class="separate">
            <div id="menu-top" />
            <div id="menu-center">
                <?php menuPages( $_SESSION["page"] );?>
            </div>
            <div id="menu-bottom" />
        </div>

    <!--stuff goes here-->
    <p class="center">
        <!-- TITLE -->
        <h2 class="serverline">BanBot powered servers</h2>
        <!-- give me a few new lines   -->
        <br/>
        <br/>
        <?php
            // load database
            $database = new PDO('sqlite:'.$dbLocation);

            if (!$database) {
                echo "<p class='center'>
                    Can't read from file. Please check permissions and/or file location;
                </p>";
            } else {
                $result = $database->query("select * from servers;");
                echo "<table>
                    <th>Name</th>
                    <th>ip</th>
                    <th>port</th>
                    <th>version</th>
                    <th>firstLaunched</th>
                    <th>lastUpdate</th>";
                foreach ($result as $row) {
                    echo "<tr>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['ip']."</td>";
                    echo "<td>".$row['port']."</td>";
                    echo "<td>".$row['version']."</td>";
                    echo "<td>".$row['firstRecDate']."</td>";
                    echo "<td>".$row['lastRecDate']."</td>";
                    echo "</tr>";
                }
                echo "</table><br/><br/>";
            }
            backButton("adminpage.php");
        ?>

    </p>

    <div class="separate sfondo-footer"><?php bottomPageInfo(); ?></div>
</body>
</html>
