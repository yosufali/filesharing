<?php
	include 'main.php';
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
		<input type="" name="password" placeholder="Password">
		
		<p/>
		
		<input type="submit" value="Upload"> <!-- Submit -->
	</p>
</form>