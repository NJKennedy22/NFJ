<?php
	include '../includes/Functs.php';
	include '../includes/imageConnect.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" rel = "stylesheet" href = "../zurb/css/normalize.css">
		<link type="text/css" rel = "stylesheet" href = "../zurb/css/foundation.css">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<script src="js/vendor/modernizr.js"></script>

		<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->


<link rel="stylesheet" type="text/css" href = "../includes/styles.css">
</head>

<body>


	<nav class="nav right">
		<ul>
			<li><a href="../index.php">Home</a></li>
			<li class="current"><a href="#">Members</a></li>
			<li><a href = "../Founders.php">Founders</a></li>
			<li><a href="../contactUs.php">Contact Us</a></li>
		</ul>
	</nav>
<br><br>
<form action="../includes/check_user-pass.php" method="POST">

Username: <input type="text" name="username" placeholder="username">
<br><br>
Password: <input type="password" name="password" value" ">
<br>
<input type="submit" name="submit" value="Login!">
<br>
</form>
<form method="get" action="../contactUs.php">
<br><br><br>
    <button border-radius="50%" type="submit">Not yet a Member?</button>
</form>
<?php
 $NFJlogo = getImage("logo", "Images", $mysqli); ?>	
<a href = "../index.php"><img src = "../images/<?php
echo "$NFJlogo";
?>"
alt = "Our Logo" /></a>
</body>
</html>