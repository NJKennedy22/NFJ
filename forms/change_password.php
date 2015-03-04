<?php
include '../includes/membersConnect.php';
$UserName = $_POST['username'];  //Users username
$old_password = $_POST["old_password"];
$newpassword = $_POST['newpassword'];
$confirmnewpassword = $_POST['confirmnewpassword'];
$tbl_name="Members"; // Table name


   $sql="SELECT * FROM $tbl_name WHERE Username='$UserName' and Password='$old_password'";
$result=$mysqli->query($sql);

// Mysql_num_row is counting table row
//$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($result->num_rows > 0) 
	{
		if($newpassword == $confirmnewpassword)
		{
		$row=mysqli_fetch_assoc($result);
		$id = $row["id"];
			$newpass = "UPDATE $tbl_name SET Password = \"$newpassword\" WHERE id = $id";
			$newpassresult = $mysqli->query($newpass);
			$time = time()+10*60;
  		 $cookie_name="Yes";
  		$cookie_value = " ";
 		 setcookie($cookie_name, $cookie_value, $time, "/");
 		 header ('Location: changePassForm.php');
 		 alert("Password successfully changed!");
		}
		else {
			$time = time()+10*60;
  		 $cookie_name="passNoMatch";
  		$cookie_value = " ";
 		 setcookie($cookie_name, $cookie_value, $time, "/");
 		 header ('Location: changePassForm.php');
 		 
		}
	}
else {
    	$time = time()+10*60;
  		 $cookie_name="wrongUserPass";
  		$cookie_value = " ";
 		 setcookie($cookie_name, $cookie_value, $time, "/");
 		 header ('Location: changePassForm.php');
}

$mysqli->close();
?>