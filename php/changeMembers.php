<!DOCTYPE html>
	<html>
		<head>
			<title>Admin Members</title>
		<link rel="stylesheet" type="text/css" href = "http://www.naomijkennedy.com/NFJ/css/styles.css">
		</head>
		<body>
<?php

	include '/home/naomij5/public_html/NFJ/php/SoundsConnect.php';
	include '/home/naomij5/public_html/NFJ/php/Functs.php';

$query = "SELECT * from sounds";
$rownum = $mysqli->query($query)->num_rows;
for ($x = $rownum; $x >= 1; $x--) {

	$soundUrl = getSound($x, "sounds", $mysqli);

    echo "The sound is $soundUrl <br>";
}
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select audio to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Audio" name="submit">
</form>






</body>
<html>
