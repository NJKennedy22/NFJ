<?php
include '../includes/SoundsConnect.php';
$audioPath = $_FILE['audioPath']['name'];
$audioName = $_POST['audioName'];
$audioDate = $_POST['audioDate'];
$tbl_name="sounds"; // Table name

$sql= "SELECT * FROM $tbl_name WHERE soundUrl = \"$audioPath\"";
$result = $mysqli->query($sql);

if($result->num_rows==0){
 

} else {
  
	$time = time()+10*60;
  	 $cookie_name="audioInDb";
  	$cookie_value = " ";
 	 setcookie($cookie_name, $cookie_value, $time, "/");
 	 header ('Location: ../admin/changeMembers.php');
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
			
		 $time = time()+10*60;
  		 $cookie_name="Yes";
  		$cookie_value = " ";
 		 setcookie($cookie_name, $cookie_value, $time, "/");
 		 header ('Location: ../admin/changeMembers.php');
			}
			else {
				
		$time = time()+10*60;
  		 $cookie_name="noBlanks";
  		$cookie_value = " ";
 		 setcookie($cookie_name, $cookie_value, $time, "/");
 		 header ('Location: ../admin/changeMembers.php');
			      }

	}


$mysqli->close();
?>