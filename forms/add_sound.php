<?php
include '../includes/SoundsConnect.php';
$audioPath = $_FILE['audioPath']['name'];
$audioName = $_POST['audioName'];
$audioDate = $_POST['audioDate'];
$tbl_name="sounds"; // Table name

$sql= "SELECT * FROM $tbl_name WHERE soundUrl = \"$audioPath\"";
$result = $mysqli->query($sql);

if($result->num_rows==0){
  echo 'audio file not already used';

} else {
  echo 'that audio file is already used';
}
$rowresult = $mysqli->query("SELECT * FROM $tbl_name");
$num_rows = $rowresult->num_rows;
$nextID = $num_rows + 1;

// Mysql_num_row is counting table row

if ($result->num_rows == 0)
	{


			if($audioName != "" && $audioDate != "" ) {

			$newaudio = "INSERT INTO $tbl_name (id, soundUrl, name, date) VALUES ('$nextID', '$audioPath', '$audioName', '$audioDate')";
			$newaudioresult = $mysqli->query($newaudio);
			echo "Success!";
			}
			else {
				echo "Cannot leave fields blank";
			      }

	}


$mysqli->close();
?>
