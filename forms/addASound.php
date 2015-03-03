<?php
	include '../includes/Buttons.php';
	include '../includes/Functs.php';
	include '../includes/SoundsConnect.php';
?>
<!DOCTYPE html>
	<html>
	<head>
	<title>Add New Member</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link type="text/css" rel = "stylesheet" href = "../zurb/css/normalize.css">
		<link type="text/css" rel = "stylesheet" href = "../zurb/css/foundation.css">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<script src="js/vendor/modernizr.js"></script>
<link rel="stylesheet" type="text/css" href = "../includes/styles.css">
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->



		</head>
		<body>

<nav class="nav right">
		<ul><strong>
			<li><a href="index.php">HOME</a></li>
			<li><a href="Membersonly.php">MEMBERS</a></li>
			<li><a href="Founders.php">FOUNDERS</a></li>
			<li><a href="contactUs.php">CONTACT US</a></li>

			<?php
			homePageButton();
			membersButton();
			newUserButton();
			logoutButton();

			?>


<form action="../forms/add_sound.php" method="POST">

Audio Path: <input type="file" name="audioPath" id="fileToUpload">

Audio Name: <input type="text" name="audioName" value" ">
<br>
Date of Meeting: <input type = "text" name = "audioDate" value " ">
<br>
<input type="submit" name="submit" value="Add Audio!">
<br>
</form>
</body>
</html>