<!--comment-->
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
<link rel="stylesheet" type="text/css" href = "http://www.naomijkennedy.com/NFJ/css/styles.css">
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


</head>

<body>

<nav class="nav right">
		<ul><strong>
			<li class="current"><a href="#">HOME</a></li>
			<li><a href="http://www.naomijkennedy.com/NFJ/php/Membersonly.php">MEMBERS</a></li>
			<li><a href="http://www.naomijkennedy.com/NFJ/html/Founders.html">FOUNDERS</a></li>
			<li><a href="#">CONTACT US</a></li>
<?php
			include '/home/naomij5/public_html/NFJ/php/Buttons.php';
			homePageButton();
			?>

			</strong>
		</ul>
	</nav>
	

    <img height = "300" width = "700" src="http://www.albany.edu/~nk848638/201/PATRICK/img/polkadotsNFJ.jpg"  alt = "our logo"/>
	
	
	<?php
    include '/home/naomij5/public_html/NFJ/php/HomePageConnect.php';
		include '/home/naomij5/public_html/NFJ/php/Functs.php';
	echo " <h5><center><strong>MISSION<strong><center></h5>";  
			
		
		$Mission = getContent(1, "Sections", $mysqli);
	   echo "<h1><center><strong><em>
				\"$Mission\"
	</em><strong></center></h1>";
	echo "<br>";
	
	
	
	echo "<div class = \"row\">";
	echo "<div class=\"large-8 columns\">";
	
			 echo "<h5><strong> &nbsp; WHAT </strong></h5>";
			 $What =  getContent(2, "Sections", $mysqli);
			 echo "<p>$What</p>";
          echo "<h5><strong>&nbsp; WHO </strong></h5>";
			 $Who =   getContent(3, "Sections", $mysqli);         
          echo "<p>$Who</p>";
          echo "<h5><strong> &nbsp;WHEN</strong></h5>";
          $When =  getContent(4, "Sections", $mysqli);
          echo  "<p>$When</p>";
          echo "<h5><strong> &nbsp; WHERE </strong></h5>";
          $Where =  getContent(5, "Sections", $mysqli);
          echo "<p>$Where</p>";
       echo  "</div>";
		       
      echo   
       " <div class=\"large-4 columns\">
        <h2><center><strong>PREVIOUS TOPICS </strong><center></h2>
        		<ul>
        			<li>Nutrition</li>
        					<audio src=\"applause.ogg\" controls>
							<p>You cannot hear this track because this browser does not support our Flash music player.</p>
							</audio>
        			<li>Evidence Based Practice</li>
        			      <audio src=\"applause.ogg\" controls>
							<p>You cannot hear this track because this browser does not support our Flash music player.</p>
							</audio>
        			<li>Methodology & Style</li>
        			      <audio src=\"applause.ogg\" controls>
							<p>You cannot hear this track because this browser does not support our Flash music player.</p>
							</audio>
        		</ul>
          
        </div>
      </div>

<div class = \"row\">

<div class=\"large-8 columns\">
		<h2><center><strong>OUR STORY </strong></center></h2> ";
				
			
			$Founders1 = getContent(6, "Sections", $mysqli);
			$Founders2 = getContent(7, "Sections", $mysqli);
			echo "<p>$Founders1 </p> ";
			echo "<p>$Founders2 </p> ";
			
	
       echo " </div>
        
<div class=\"large-4 columns\">

	<h2><center><strong>FUTURE TOPICS<strong><center></h2>
			";
			$FutTopics = getContent(8, "Sections", $mysqli);
          echo "<p>$FutTopics</p>" ;
      
        echo "</div>";
      echo "</div>
      
<div class = \"row\">


	
  
        <div class=\"large-12 columns\">
        <h2><center><strong>OUR MEMBERS<strong><center></h2>
";
			$Members = getContent(9, "Sections", $mysqli);	
         echo " <p>$Members</p>";
         
         ?>
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


