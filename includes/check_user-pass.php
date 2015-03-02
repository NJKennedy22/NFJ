<?php
include 'membersConnect.php';
if(empty($_POST['username']))
{
    echo "UserName/Password is empty!";
    return false;
}
if(empty($_POST['password']))
{
    echo "Password is empty!";
    return false;
}


// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
$tbl_name = "Members";

/*
// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
*/


$sql= "SELECT * FROM $tbl_name WHERE Username = \"$username\" and Password = \"$password\"";
$result = $mysqli->query($sql);

$mysqli->close();
// Mysql_num_row is counting table row
// $count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($result->num_rows > 0) {
    $time = time()+10*60;

  $cookie_name="Username";
  $cookie_value = $username;
  setcookie($cookie_name, $cookie_value, $time, "/");
	  		header('Location: ../Membersonly.php');
	  		//echo "Accessing Members Only Page";

} else {
		header('Location: ../forms/login.html');
}

?>
