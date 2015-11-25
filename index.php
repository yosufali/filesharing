<?php
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
			if (move_uploaded_file($file_tmp, 'images/'.$file_name)) {
				echo 'File uploaded';
			}
		} else {
			foreach ((array) $errors as $error) {
				echo $error;
			}
		}
	}

	// get the selected expiration time from the dropdown (select) and store it
	if (isset($_POST['time'])) {
		$selectOption = $_POST['time'];
		print_r($selectOption);
	}
?>

<form action="" method="POST" enctype="multipart/form-data">
	<p>
		<input type="file" name="item"> <!-- Browse -->

		<p/>
		
		<label>Set timer </label>
		<select name="time" required>
			<option value = ""> Select expiration </option>
			<option value = "5m"> 5 minutes </option>
			<option value = "1h"> 1 hour </option>
			<option value = "6h"> 6 hours </option>
			<option value = "24h"> 24 hours </option>
			<option value = "1w"> 1 week </option>
			<option value = "2w"> 2 weeks </option>
			<option value = "1m"> 1 month </option>
		</select>
		
		<p/>
		
		<label>Choose Password (optional)</label>
		<input type="" name="password">
		
		<p/>
		
		<input type="submit" value="Upload"> <!-- Submit -->
	</p>
</form>