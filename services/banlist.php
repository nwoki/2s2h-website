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

	for($index=0; $index < $array_count; $index++){
		try {
			$database = new PDO('sqlite:'.$databases_dir.$db_Array[$index]);
			$result = $database->query('SELECT * FROM oplist ORDER BY level,nick;');
			echo '<h2 class="serverline">Server: '.substr($db_Array[$index],0,strpos($db_Array[$index],'.')).'</h2>
			<p class="titoloTabella">Admins:</p>
			<table border="0" cellpadding="5" cellspacing="4" summary="Admins list of the server '.substr($db_Array[$index],0,strpos($db_Array[$index],'.')).'">
			<tr>
				<th scope="col">Nick</th>
				<th scope="col">Level</th>
			</tr>';
			foreach ( $result as $row ){
				print "<tr><td>".$row['nick']."</td>";
				print "<td class='centrata'>".$row['level']."</td></tr>";
			}
			echo '</table><br/>';
			
			$result = $database->query('SELECT * FROM banned ORDER BY nick;');
			echo '
			<div class="it">
				<p class="titoloTabella">Lista dei ban:</p>
			</div>
						
			<div class="en">
			  <p class="titoloTabella">Ban list:</p>
			</div>

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
			echo '</table>';
		}
		catch(PDOException $e){
		    print 'Exception : '.$e->getMessage();
		}
	}
?>
