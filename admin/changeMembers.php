<?php
	include '../includes/SoundsConnect.php';
	include '../includes/Functs.php';
	include '../includes/Buttons.php';
	include '../includes/audioConnect.php';
	include '../includes/formPrint.php'; 
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
			<li><a href="../contactUs.php">CONTACT US</a></li>
			<li><a href = "includes/logout.php">Logout</a></li>
			<?php
			homePageButton();
			membersButton();
			?>
			</strong>
		</ul>
	</nav>
<?php
	printForms($value);
?>
<form action="../includes/upload.php" method="post" enctype="multipart/form-data">
    Select audio to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    Audio Name: <input type="text" name="audioName" value" ">
<br>
Date of Meeting: <input type = "text" name = "audioDate" value " ">

<br>
    
    <input type="submit" value="Upload Audio" name="submit">
</form>






</body>
<html>