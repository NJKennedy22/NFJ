
<?php
ob_start();
session_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="password"; // Mysql password 
$db_name="Members"; // Database name 
$tbl_name="INVENTORY"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password") or die(mysql_error());
echo "Connected to MySQL<br />";
mysql_select_db("$db_name") or die(mysql_error());
echo "Connected to Database<br />";
// Check $username and $password 

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


// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($count==1) {
    echo "Success! $count";
    $_SESSION["loggedIn"] = 1;
    	if ($username == "PRahm")
    		{
				header('Location: admin.php');    		
    		}
    	else {
    header('Location: Membersonly.php');
		 }	
exit;
} else {
    echo "Unsuccessful! $count";
    $_SESSION["loggedIn"] = 0;
		header('Location: index.php');
       exit;
}

ob_end_flush();
?>

