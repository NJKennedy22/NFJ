<?php
	include '../includes/SoundsConnect.php';
	include '../includes/Functs.php';
?>

<!DOCTYPE html>
	<html>
		<head>
			<title>Admin Members</title>
		<link rel="stylesheet" type="text/css" href = "../includes/styles.css">
		</head>
		<body>
<nav class="nav right">
		<ul><strong>
			<li><a href="../index.php">HOME</a></li>

			<li><a href="../Membersonly.php">MEMBERS</a></li>
			<li><a href="../Founders.php">FOUNDERS</a></li>
			<li><a href="#">CONTACT US</a></li>
			</strong>
		</ul>
	</nav>

<form action="../includes/upload.php" method="post" enctype="multipart/form-data">
    Select audio to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Audio" name="submit">
</form>






</body>
<html>
