<div>
<?php if($_SESSION['language']=="it"){?>
	<p class="center">Ecco la lista completa delle mappe sull'host, cliccate sul nome per scaricarle.<br/>
	Il numero di download si riferisce solo a quelli effettuati dal sito.</p>
<?php }else {?>
	<p class="center">This is the complete list of maps on the host, click on the name to download the map.<br/>
	The downloads number refers only to those done through this site.</p>
<?php }?>
</div>

<?PHP
	$maps_dir = "q3ut4/";
	$myDirectory = opendir($maps_dir);
	// get each entry
	while($entryName = readdir($myDirectory))
	{
		// salvo i link all'ultima versione
		if ( !is_dir($entryName) )
		{
			$maps_Array[] = $entryName;
		}
	}
	closedir($myDirectory);
	sort($maps_Array);
	$downloads_count = getDownloads($maps_Array);
	
	echo '
<div align="center">
	<table border="0" cellpadding="5" cellspacing="4" summary="List of maps">
		<THEAD>
			<tr>
				<th scope="col">Map name</th>
				<th scope="col">Dimension</th>
				<th scope="col">Downloads</th>
			</tr>
		<TBODY>
		';
		
		foreach ( $maps_Array as $map ){
			echo '<tr><td align="right"><a href="download.php?d='.$maps_dir.$map.'">'.$map.'</a></td><td align="right">'.linux_size($maps_dir.$map).'</td><td align="right">'.$downloads_count[$map].'</td></tr>
			';
		}
	echo '</table>
</div>';
?>
