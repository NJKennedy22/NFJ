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
			$newpass = "UPDATE $tbl_name SET Password = replace(PASSWORD, '$old_password', '$newpassword')";
			$newpassresult = $mysqli->query($newpass);
			echo "Success!";
		}
		else {
			echo "Both new passwords must match";
		}
	}
else {
    echo "Password does not match Username";
}

$mysqli->close();
?>
