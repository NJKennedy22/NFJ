<?php
		include '../includes/formPrint.php';
		include '../includes/Buttons.php';
		?>
<!DOCTYPE html>
	<html>
		<head>
			<title>Change Password</title>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link type="text/css" rel = "stylesheet" href = "../zurb/css/normalize.css">
		<link type="text/css" rel = "stylesheet" href = "../zurb/css/foundation.css">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<script src="js/vendor/modernizr.js"></script>
<link rel="stylesheet" type="text/css" href = "../includes/styles.css">
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


</head>
<body>

<nav class="nav right">
		<ul><strong>
			<li><a href="../index.php">HOME</a></li>
			<li><a href="../Membersonly.php">MEMBERS</a></li>
			<li><a href="../Founders.php">FOUNDERS</a></li>
			<li><a href="../contactUs.php">CONTACT US</a></li>
			
			


			</strong>
		</ul>
	</nav>


    <img height = "300" width = "700" src="http://www.albany.edu/~nk848638/201/PATRICK/img/polkadotsNFJ.jpg"  alt = "our logo"/>
		
		<?php
		
		
printForms($value);
?>
<form action="../forms/change_password.php" method="POST">

Username: <input type="text" name="username" placeholder="username">
<br><br>
Password: <input type="password" name="old_password" value" ">
<br>
New Password: <input type ="password" name = "newpassword" value" ">
<br>
Confirm: <input type = "password" name = "confirmnewpassword" value " ">
<br>
<input type="submit" name="submit" value="Update Password!">
<br>
</form>
</body>
</html>