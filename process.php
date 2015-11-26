<?php

	include 'file.php';
	
		if (isset($_FILES['item'])) {
		$file = new File($_FILES['item']['name']);
		echo 'This file is called '. $file -> getName();
		var_dump($_POST['item']);
	} else {
		echo 'nah';
	}
?>