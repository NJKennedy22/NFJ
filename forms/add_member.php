<?php
include '../includes/membersConnect.php';
$UserName = $_POST['username'];  //Users username
$password= $_POST['password'];
$confirmnewpassword = $_POST['confirmnewpassword'];
$tbl_name="Members"; // Table name

$sql= "SELECT * FROM $tbl_name WHERE Username = \"$UserName\"";
$result = $mysqli->query($sql);

if($result->num_rows==0){
  

} else {
  $time = time()+10*60;
   $cookie_name="UserInDb";
  $cookie_value = " ";
  setcookie($cookie_name, $cookie_value, $time, "/");
header('Location: addAMember.php');
}

if ($result->num_rows == 0)
	{
	
		if($password == $confirmnewpassword)
		{
			if($password != "" && $UserName != "") {
			$rowresult = $mysqli->query("SELECT * FROM $tbl_name");
			$num_rows = $rowresult->num_rows;
			$nextID = $num_rows + 1;
			$newuser = "INSERT INTO $tbl_name (Username, Password, id) VALUES ('$UserName', '$password', $nextID)";
			$newuserresult = $mysqli->query($newuser);
				$time = time()+10*60;
  				 $cookie_name="Yes";
 				 $cookie_value = "1";
 				 setcookie($cookie_name, $cookie_value, $time, "/");
	  			header('Location: addAMember.php');
			}
			else {
				$time = time()+10*60;
  				 $cookie_name="noBlanks";
 				 $cookie_value = "1";
 				 setcookie($cookie_name, $cookie_value, $time, "/");
	  			header('Location: addAMember.php');

				}
		}
		else {
				$time = time()+10*60;
  				 $cookie_name="passNoMatch";
 				 $cookie_value = "1";
 				 setcookie($cookie_name, $cookie_value, $time, "/");
	  			header('Location: addAMember.php');
		}
	
	}


$mysqli->close();
?>