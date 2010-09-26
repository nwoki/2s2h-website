<?php 
	
	ob_start();
	
	session_start();
	
	require('../functions/functions.php');
	
	if( adminLogin( $_POST['username'], $_POST['password'] ) ) {
    $_SESSION['status'] = "admin";
		$_SESSION['username'] = $_POST['username'];
		$data['status'] = 1;
  	echo json_encode($data);
		exit();
	} else {
	  $data['status'] = 0;
	  echo json_encode($data);
	  exit();
	}
	
	ob_end_flush();
	
?>