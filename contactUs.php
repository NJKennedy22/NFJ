<?php
	include 'includes/Buttons.php';
    	include 'includes/HomePageConnect.php';
	include 'includes/Functs.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link type="text/css" rel = "stylesheet" href = "zurb/css/normalize.css">
		<link type="text/css" rel = "stylesheet" href = "zurb/css/foundation.css">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<script src="js/vendor/modernizr.js"></script>
<link rel="stylesheet" type="text/css" href = "includes/styles.css">
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


</head>

<body>

<nav class="nav right">
		<ul><strong>
			<li><a href="index.php">HOME</a></li>
			<li><a href="Membersonly.php">MEMBERS</a></li>
			<li><a href="Founders.php">FOUNDERS</a></li>
			<li class ="current">CONTACT US</a></li>
		
			<?php
			homePageButton();
			membersButton();
			logoutButton();
			?>


			</strong>
		</ul>
	</nav>
	
    <img height = "300" width = "700" src="http://www.albany.edu/~nk848638/201/PATRICK/img/polkadotsNFJ.jpg"  alt = "our logo"/>
<div class = "row">
	
	
	<a style="font-size: 20pt;" href="mailto:Harrison@Soldierstosidelines.org">Email Harrison Bernstein</a> 
	<p>Harrison@soldierstosidelines.org</p>
	
	
	</div>

</body>
</html>