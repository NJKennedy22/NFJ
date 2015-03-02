<?php
	include 'includes/Buttons.php';
    	include 'includes/HomePageConnect.php';
	include 'includes/Functs.php';



		$Mission = getContent(1, "Sections", $mysqli);
 		$What =  getContent(2, "Sections", $mysqli);
		$Who =   getContent(3, "Sections", $mysqli);
		$When =  getContent(4, "Sections", $mysqli);
		$Where =  getContent(5, "Sections", $mysqli);
		$Founders1 = getContent(6, "Sections", $mysqli);
		$Founders2 = getContent(7, "Sections", $mysqli);
		$FutTopics = getContent(8, "Sections", $mysqli);
		$Members = getContent(9, "Sections", $mysqli);
		$PreviousTopics = getContent(10,"Sections", $mysqli);


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
			<li class="current"><a href="#">HOME</a></li>
			<li><a href="Membersonly.php">MEMBERS</a></li>
			<li><a href="Founders.php">FOUNDERS</a></li>
			<li><a href="#">CONTACT US</a></li>
			<?php
			homePageButton();
			membersButton();
			?>


			</strong>
		</ul>
	</nav>


    <img height = "300" width = "700" src="http://www.albany.edu/~nk848638/201/PATRICK/img/polkadotsNFJ.jpg"  alt = "our logo"/>
	 <h5><center><strong>MISSION<strong><center></h5>



	<h1><center><strong><em>
	<?php echo "\"$Mission\""  ?>
	</em><strong></center></h1>
	<br>

	<div class = "row">
	<div class="large-8 columns">

	<h5><strong> &nbsp; WHAT </strong></h5>

	<p><?php echo "$What" ?></p>
        <h5><strong>&nbsp; WHO </strong></h5>

        <p><?php echo "$Who" ?></p>
     	 <h5><strong> &nbsp;WHEN</strong></h5>

         <p><?php echo "$When" ?></p>
        <h5><strong> &nbsp; WHERE </strong></h5>

        <p><?php echo "$Where" ?></p>
        </div>

	 <div class="large-4 columns">
        <h2><center><strong>PREVIOUS TOPICS </strong><center></h2>

        <p><?php echo "$PreviousTopics" ?></p>


      </div>
      </div>

<div class = "row">

<div class="large-8 columns">
		<h2><center><strong>OUR STORY </strong></center></h2>



			<p><?php echo "$Founders1" ?> </p>
			<p><?php echo "$Founders2" ?> </p>


       </div>

<div class="large-4 columns">

	<h2><center><strong>FUTURE TOPICS<strong><center></h2>

     <p><?php echo "$FutTopics" ?></p>

      </div>
     </div>

<div class = "row">

        <div class="large-12 columns">
        <h2><center><strong>OUR MEMBERS<strong><center></h2>

          <p><?php echo "$Members" ?></p>

        <img src = "http://www.albany.edu/~nk848638/201/PATRICK/img/thoughtBubbles.jpg" alt = "thought bubbles" />
        <img src = "http://www.albany.edu/~nk848638/201/PATRICK/img/handsWithGears.jpg" alt= "Hands with Gears" />
        </div>
      </div>


<script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>

</body>
</html>
