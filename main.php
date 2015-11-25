<?php
//--------------------------------------------------------------------------------------

	//if there are items added, validate them before uploading them
	if (isset($_FILES['item'])) {
		$errors = array();
		$allowed_ext = array('jpg','jpeg', 'png', 'gif', 'pdf', 'doc', 'docx', ); //extentios that are allowed to be uploaded
		
		$file_name = $_FILES['item']['name'];
		//separate the extension, grab it, convert it to lowercase
		$file_ext = strtolower(end(explode('.', $file_name))); 
		$file_size = $_FILES['item']['size'];
		$file_tmp = $_FILES['item']['tmp_name'];

		//file extension should be within accepted extensions
		if (in_array($file_ext, $allowed_ext) === false) {
			$errors[] = 'Extension not allowed';
		}

		//the file size shouldn't be over the limit
		if ($file_size > 2097152) {
			$errors = 'File Size must be max 2mb';
		};

		//Upload files if there are no errors, otherwise output errors
		if (empty($errors)) {
			if (move_uploaded_file($file_tmp, 'files/'.$file_name)) {
				echo 'File uploaded';
			}
		} else {
			foreach ((array) $errors as $error) {
				echo $error;
			}
		}
	}

//--------------------------------------------------------------------------------------

	// get the selected expiration time from the dropdown (select) and store it
	// $time is the time after which the file will be deleted
	if (isset($_POST['time'])) {
		$selectOption = $_POST['time'];
		print_r($selectOption);

		switch ($selectOption) {
			case '5m':
				$time = 300;
				break;
			case '1h':
				$time = 3600;
				break;
			case '6h':
				$time = 21600;
				break;
			case '24hr':
				$time = 86400;
				break;
			case '1w':
				$time = 604800;
				break;
			case '2w':
				$time = 1209600;
				break;
			case '1m':
				$time = 2592000;
				break;
			default:
				//will never be default
		}
	}
//--------------------------------------------------------------------------------------

	$time_uploaded = time();
	print_r('time now is ' . $time_uploaded);

//--------------------------------------------------------------------------------------

	//store password in a variable
	if (isset($_POST['password'])) {
		$password = $_POST['password'];
		print_r($password);
	}

//--------------------------------------------------------------------------------------
	//connect to database
	include 'db.php';
	
//--------------------------------------------------------------------------------------

?>