<?php	

	// connecting to the database
	$db = new mysqli('localhost', 'root', '', 'filesharing');
	// echo '<pre>', var_dump($db), '</pre>';


	//message for users if there are issues with the server
	if ($db -> connect_errno !== 0) {
		die('We are down at the moment, please try again soon.');
	}

	

?>