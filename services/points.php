<div>
<?php if($_SESSION['language']=="it"){?>
	<p class="center">Tabellone punteggi del torneo 2s2h</p>
<?php }else {?>
	<p class="center">Points table of 2s2h's torunament</p>
<?php }?>
</div>

<?PHP
	require_once('point_files/point_list.php');
	
	$ordered = array();
	for($i = 0; $i<count($points); $i++) {
		$total = 0;
		foreach ($points[$i]['scores'] as $match_score)
			$total += $match_score;
		$ordered[$i]['player'] = $i;
		$ordered[$i]['total'] = $total;
	}
	
	$count = count($ordered);
	for ($i = 0; $i<$count-1; $i++)
		for ($j = $i+1; $j<$count; $j++)
			if ($ordered[$i]['total']<$ordered[$j]['total']) {
				$temp_total = $ordered[$i]['total'];
				$temp_player = $ordered[$i]['player'];
				$ordered[$i]['total'] = $ordered[$j]['total'];
				$ordered[$i]['player'] = $ordered[$j]['player'];
				$ordered[$j]['total'] = $temp_total;
				$ordered[$j]['player'] = $temp_player;
			}
	
	echo '
<div align="center">
	<table border="1" cellpadding="4" cellspacing="1" summary="Points table" bordercolor="#FF3322">
		<THEAD>
			<tr> <th scope="col" align="right"> Player </th>';
	foreach ($ordered as $item)
		echo '		<th scope="col">'.$points[$item['player']]['nick'].'</th>
		';
	echo '
			</tr>
		<TBODY>
		';
	
	echo '	<tr> <td align="right"><b>Totale</b></td>';
	foreach ($ordered as $item) {
		echo ' <td align="center">'.$item['total'].'</td>';
	}
		
	$i = 0;
	foreach ($date_match as $match){
		echo '	<tr><td align="right"><a href="'.$screen_folder.$match['file'].'">'.$match['date'].'</a></td>';
		
		foreach ($ordered as $item)
			echo ' <td align="center">'.$points[$item['player']]['scores'][$i].'</td>';
			
		echo ' </tr>
		';
		$i++;
	}
	echo '</table>
</div>';
?>
