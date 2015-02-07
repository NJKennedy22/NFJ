<?php
ob_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$UserName = $_POST['username'];  //Users username
$password="password"; // Mysql password Edit Profile
$old_password = $_POST["old_password"];
$newpassword = $_POST['newpassword'];
$confirmnewpassword = $_POST['confirmnewpassword'];
$db_name="Members"; // Database name 
$tbl_name="INVENTORY"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password") or die(mysql_error());
echo "Connected to MySQL<br />";
mysql_select_db("$db_name") or die(mysql_error());
echo "Connected to Database<br />";

   $sql="SELECT * FROM $tbl_name WHERE username='$UserName' and password='$old_password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($count==1) 
	{
		if($newpassword == $confirmnewpassword)
		{
			/*$newpass = "UPDATE $tbl_name (`password`) VALUES ('$newpassword') WHERE username = '$UserName'";*/
			$newpass = "UPDATE $tbl_name SET password = replace(PASSWORD, '$old_password', '$newpassword')";
			$newpassresult = mysql_query($newpass);
			echo "Success!"; 
		}	
		else {
			echo "Both new passwords must match";		
		}		
	}
else {
    echo "Password does not match Username";
}

ob_end_flush(); 
?>
