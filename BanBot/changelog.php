<?php

  //changelog
	$i = 0;
	$versions = array();
	
	$versions[$i]['nome'] = 'BanBot v1.1';
	$versions[$i]['info'] = array();
		$j = 0;
		
		$versions[$i]['info'][$j]['data'] = '15/09/2010'; 
		$versions[$i]['info'][$j]['modifica'] = 'ADD: Command "admins".';
		$j++;
		
		$versions[$i]['info'][$j]['data'] = '29/08/2010'; 
		$versions[$i]['info'][$j]['modifica'] = 'ADD: Commands "map" and "nextmap".';
		$j++;
		
		$versions[$i]['info'][$j]['data'] = '07/08/2010'; 
		$versions[$i]['info'][$j]['modifica'] = 'ADD: On command "mute" added the option "all".';
		$j++;
		
		$versions[$i]['info'][$j]['data'] = '27/07/2010'; 
		$versions[$i]['info'][$j]['modifica'] = 'ADD: Banned count.';
		
		$versions[$i]['info'][$j]['data'] = '14/07/2010'; 
		$versions[$i]['info'][$j]['modifica'] = 'ADD: loading options mechanism totally rewrited.';
		$j++;
		
		$versions[$i]['info'][$j]['data'] = '28/06/2010'; 
		$versions[$i]['info'][$j]['modifica'] = 'ADD: Strict level 2.';
		$j++;
		
		$versions[$i]['info'][$j]['data'] = '27/06/2010'; 
		$versions[$i]['info'][$j]['modifica'] = 'ADD: Dynamic sleeping time.';
		$j++;
		
		$versions[$i]['info'][$j]['data'] = '22/06/2010'; 
		$versions[$i]['info'][$j]['modifica'] = 'ADD: Controls of more than one server independently.';
		$j++;
		
		$versions[$i]['info'][$j]['data'] = '04/06/2010'; 
		$versions[$i]['info'][$j]['modifica'] = 'ADD: Commands "slap" and "status".';
		$j++;
		
		$versions[$i]['info'][$j]['data'] = '01/06/2010'; 
		$versions[$i]['info'][$j]['modifica'] = 'ADD: Commands can accept a piece of nick too.';
		$j++;
		
		$versions[$i]['info'][$j]['data'] = '01/06/2010'; 
		$versions[$i]['info'][$j]['modifica'] = 'ADD: Command "Veto".';
		$j++;
		
		$versions[$i]['info'][$j]['data'] = '31/05/2010'; 
		$versions[$i]['info'][$j]['modifica'] = 'ADD: Different security levels (aka strict mode), implemented levels 0 and 1.';
		$j++;
		
		$versions[$i]['info'][$j]['data'] = '31/05/2010'; 
		$versions[$i]['info'][$j]['modifica'] = 'FIX: Now starting the bot will not reload the map on servers.';
		$j++;
		
		$versions[$i]['info'][$j]['data'] = '04/05/2010'; 
		$versions[$i]['info'][$j]['modifica'] = 'ADD: Anticheat functions.';
		$j++;
		
		$versions[$i]['info'][$j]['data'] = '02/05/2010'; 
		$versions[$i]['info'][$j]['modifica'] = 'ADD: Author on ban.';
		$j++;
		
	$i++;
	
	$versions[$i]['nome'] = 'BanBot v1.0 (base)';
	$versions[$i]['info'] = array();
		$j = 0;
		
		$versions[$i]['info'][$j]['data'] = '21/04/2010'; 
		$versions[$i]['info'][$j]['modifica'] = 'DEL: Deleted "unmute" command.';
		$j++;
		
		$versions[$i]['info'][$j]['data'] = '20/04/2010'; 
		$versions[$i]['info'][$j]['modifica'] = 'FIX: Now only admins can use the command "ban".';
		$j++;
		
		$versions[$i]['info'][$j]['data'] = '17/04/2010'; 
		$versions[$i]['info'][$j]['modifica'] = 'FIX: A query of "checkBanGuid()" was wrong.';
		$j++;
		
		$versions[$i]['info'][$j]['data'] = '13/04/2010'; 
		$versions[$i]['info'][$j]['modifica'] = 'ADD: Commands "mute" and "unmute".';
		$j++;
		
		$versions[$i]['info'][$j]['data'] = '07/04/2010'; 
		$versions[$i]['info'][$j]['modifica'] = 'FIX: Checks and corrections on datas that have to be sent to database.';
		$j++;
		
		$versions[$i]['info'][$j]['data'] = '29/03/2010'; 
		$versions[$i]['info'][$j]['modifica'] = 'ADD: Functions to manage the oplist.';
		$j++;
		
		$versions[$i]['info'][$j]['data'] = '23/03/2010'; 
		$versions[$i]['info'][$j]['modifica'] = 'ADD: Private messages.';
		$j++;
		
		$versions[$i]['info'][$j]['data'] = '22/03/2010'; 
		$versions[$i]['info'][$j]['modifica'] = 'ADD: Logging system ended.';
		$j++;
		
		$versions[$i]['info'][$j]['data'] = '01/03/2010'; 
		$versions[$i]['info'][$j]['modifica'] = 'ADD: Functions to auto-generate database\'s system.';
		$j++;
		
		$versions[$i]['info'][$j]['data'] = '26/02/2010'; 
		$versions[$i]['info'][$j]['modifica'] = 'ADD: Core ended.';
		$j++;
		
	$i++;
?>
