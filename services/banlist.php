<?PHP
	// open the directory 
    $databases_dir = "db/banlists/";
    
    if ( is_dir($databases_dir) ) {
	  	$myDirectory = opendir($databases_dir);
	
		// get each entry
		while($entryName = readdir($myDirectory))
		{
			// salvo i link all'ultima versione
			if ( !is_dir($entryName) )
			{
				$db_Array[] = $entryName;
			}
		}
		$array_count = count($db_Array);
		closedir($myDirectory);
	}
	sort($db_Array);
	
	foreach ($db_Array as $db) {
		echo '<div id="ittop" class="it"><p class="center">vai a: 
		<a class="serverline" href="#'.substr($db,0,strpos($db,'.')).'">'.substr($db,0,strpos($db,'.')).'</a>
		</p></div>
		<div id="entop" class="en"><p class="center">go to: 
		<a class="serverline" href="#'.substr($db,0,strpos($db,'.')).'">'.substr($db,0,strpos($db,'.')).'</a>
		</p></div>';
	}
	
	echo '<br/>';

	for($index=0; $index < $array_count; $index++){
		try {
			$database = new PDO('sqlite:'.$databases_dir.$db_Array[$index]);
			$result = $database->query('SELECT nick FROM oplist ORDER BY level,nick;');
			echo '<h2 class="serverline" id="'.substr($db_Array[$index],0,strpos($db_Array[$index],'.')).'">Server: '.substr($db_Array[$index],0,strpos($db_Array[$index],'.')).'</h2>
			<div>';
			if($_SESSION['language']=="it")
			echo '<p class="right"><a href="#ittop">torna all\'inizio</a></p>';
			else
			echo '<p class="right"><a href="#entop">return to top</a></p>';
			echo '</div>
			<p class="titoloTabella">Admins:</p>
			<div align="center">
			<table border="0" cellpadding="5" cellspacing="4" summary="Admins list of the server '.substr($db_Array[$index],0,strpos($db_Array[$index],'.')).'">
			<tr>
				<th scope="col">Nick</th>
			</tr>';
			foreach ( $result as $row ){
				print "<tr><td>".$row['nick']."</td></tr>";
			}
			echo '</table><br/>
			</div>';
			
			$result = $database->query('SELECT * FROM banned ORDER BY nick;');
			echo '
			<div>
			';
			if($_SESSION['language']=="it")
				echo '<p class="titoloTabella">Lista dei ban:</p>';
			else
			  	echo '<p class="titoloTabella">Ban list:</p>';
			echo'
			</div>
			<div align="center">
			<table border="0" cellpadding="5" cellspacing="4" summary="Ban list of the server '.substr($db_Array[$index],0,strpos($db_Array[$index],'.')).'">
			<tr>
				<th scope="col">Nick</th>
				<th scope="col">Reason</th>
				<th scope="col">Ip</th>
				<th scope="col">Banned by</th>
				<th scope="col">Last seen</th>
			</tr>';
			foreach ( $result as $row ){
				print "<tr><td>".$row['nick']."</td>";
				print "<td>".$row['motive']."</td>";
				print "<td>".substr($row['ip'],0,strpos($row['ip'],':'))."</td>";
				print "<td>".$row['author']."</td>";
				print "<td>".$row['date']." ".$row['time']."</td></tr>";
			}
			echo '</table>
			</div>';
		}
		catch(PDOException $e){
		    print 'Exception : '.$e->getMessage();
		}
	}
?>
