<?php
include 'audioConnect.php';
$target_dir = "../audio/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$tbl_name = "sounds";
$audioFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$audioName = $_POST['audioName'];
$audioDate = $_POST['audioDate'];
// Check if image file is a actual image or fake image
/*

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an audio - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an audio.";
        $uploadOk = 0;
    }
}
*/

// Check if file already exists
if (file_exists($target_file)) {
    $time = time()+10*60;
  	 $cookie_name="audioInDb";
  	$cookie_value = " ";
 	 setcookie($cookie_name, $cookie_value, $time, "/");
 	 header ('Location: ../admin/changeMembers.php');
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 512000000) {
    $time = time()+10*60;
  	 $cookie_name="fileTooLarge";
  	$cookie_value = " ";
 	 setcookie($cookie_name, $cookie_value, $time, "/");
 	 header ('Location: ../admin/changeMembers.php');
    $uploadOk = 0;
}
// Allow certain file formats
if($audioFileType != "mp3" && $audioFileType != "m4a" )
 {
    $time = time()+10*60;
  	 $cookie_name="fileTypeError";
  	$cookie_value = " ";
 	 setcookie($cookie_name, $cookie_value, $time, "/");
 	 header ('Location: ../admin/changeMembers.php');
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $time = time()+10*60;
  	 $cookie_name="No";
  	$cookie_value = " ";
 	 setcookie($cookie_name, $cookie_value, $time, "/");
 	 header ('Location: ../admin/changeMembers.php');
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

$rowresult = $mysqli->query("SELECT * FROM $tbl_name");
$num_rows = $rowresult->num_rows;
$nextID = $num_rows + 1;

			if($audioName != "" && $audioDate != "" ) {
			
			$fileToUpload = basename($_FILES["fileToUpload"]["name"]);
			$newaudio = "INSERT INTO $tbl_name (id, soundUrl, name, date) VALUES ('$nextID', '$fileToUpload', '$audioName', '$audioDate')";
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


        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

    } else {
        $time = time()+10*60;
  	 $cookie_name="No";
  	$cookie_value = " ";
 	 setcookie($cookie_name, $cookie_value, $time, "/");
 	 header ('Location: ../admin/changeMembers.php');
    }
}
$mysqli->close();

?>