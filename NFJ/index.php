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

<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<style>
body {
	font: 90%/160% Arial, Helvetica, sans-serif;
	color: #666;
	width: 900px;
	max-width: 96%;
	margin: 0 auto;
}
p {
	margin: 0 0 20px;
}

a {
	color: #69C;
	text-decoration: none;
}
a:hover {
	color: #F60;
}
h1 {
	color: #000;
	line-height: 120%;
	margin: 30px 0 10px;
}
h2 {
	color: black;
	
	
}
h5 {
	background-color: black;
	color: white;
	border-radius: 5px;
	letter-spacing: 5px;
}
h1 {
	font-size: 1.7em;
	color: #000;
}
h2 {
	font-size: 1.4em;
	border-top: solid 1px #eee;
	padding-top: 10px;
	padding-bottom: 10px;
	border: 2px solid;
	border-color: #070303 #ffffff #ffffff #ffffff;
	border-width: 3px 0px 0px 0px;
	letter-spacing: 5px;
}
h3 {
	font-size: 1.1em;
}

/*table */
td {
	text-align: center;
	width: 50%;
}

/* nav */
.nav {
	margin: 20px 0;
}
.nav ul {
	margin: 0;
	padding: 0;
}
.nav li {
	margin: 0 5px 10px 0;
	padding: 0;
	list-style: none;
	display: inline-block;
	*display:inline; /* ie7 */
}
.nav a {
	padding: 3px 12px;
	text-decoration: none;
	color: #999;
	line-height: 100%;
}
.nav a:hover {
	color: #000;
}
.nav .current a {
	background: #999;
	color: #fff;
	border-radius: 5px;
}

/* right nav */
.nav.right ul {
	text-align: right;
}


@media screen and (max-width: 600px) {
	.nav {
		position: relative;
		min-height: 40px;
	}	
	.nav ul {
		width: 180px;
		padding: 5px 0;
		position: absolute;
		top: 0;
		left: 0;
		border: solid 1px #aaa;
		background: #fff url(images/icon-menu.png) no-repeat 10px 11px;
		border-radius: 5px;
		box-shadow: 0 1px 2px rgba(0,0,0,.3);
	}
	.nav li {
		display: none; /* hide all <li> items */
		margin: 0;
	}
	.nav .current {
		display: block; /* show only current <li> item */
	}
	.nav a {
		display: block;
		padding: 5px 5px 5px 32px;
		text-align: left;
	}
	.nav .current a {
		background: none;
		color: #666;
	}

	/* on nav hover */
	.nav ul:hover {
		background-image: none;
	}
	.nav ul:hover li {
		display: block;
		margin: 0 0 5px;
	}
	.nav ul:hover .current {
		background: url(images/icon-check.png) no-repeat 10px 7px;
	}

	/* right nav */
	.nav.right ul {
		left: auto;
		right: 0;
	}


	

</style>
</head>

<body>

<nav class="nav right">
		<ul><strong>
			<li class="current"><a href="#">HOME</a></li>
			<li><a href="Membersonly.php">MEMBERS</a></li>
			<li><a href="#">CONTACT US</a></li>

			</strong>
		</ul>
	</nav>
	

    <img height = "300" width = "700" src="http://www.albany.edu/~nk848638/201/PATRICK/img/polkadotsNFJ.jpg"  alt = "our logo"/>
	
	
	<h5><center><strong>MISSION<strong><center></h5>
	
	<?php
	session_start();

		include 'HomePageConnect.php';
		include 'HomePageFuncts.php';
		$Mission = getContent(1, "Sections", $mysqli);
	   echo "<h1><center><strong><em>
				\"$Mission\"
	</em><strong></center></h1>";
	
	
	
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
		<h2><center><strong>FOUNDERS</strong></center></h2>
					<table>
				<tr>
				<td>Patrick Rahm</td>
				<td>Harrison Bernstein</td>
				</tr>
				<tr>
				<td><img src = \"http://www.albany.edu/~nk848638/201/PATRICK/img/PatrickPic2.jpg\"
				width = \"50%\" height = \"50%\" alt = \"Patrick\" /></td>
				<td> </td>
				</tr>
				<tr>
				<td>";
				$PatsInfo = getContent(6, "Sections", $mysqli);
				echo "$PatsInfo";
				echo "</td>";
				echo "<td>";
				$HarrsInfo = getContent(7, "Sections", $mysqli);
				echo "$HarrsInfo";
				echo "</td>";
				
			echo "</table>"; 
			
			$Founders1 = getContent(8, "Sections", $mysqli);
			$Founders2= getContent(9, "Sections", $mysqli);
			echo "<p>$Founders1 </p> ";
			echo "<p>$Founders2 </p> ";
			
	
       echo " </div>
        
<div class=\"large-4 columns\">

	<h2><center><strong>FUTURE TOPICS<strong><center></h2>
			";
			$FutTopics = getContent(10, "Sections", $mysqli);
          echo "<p>$FutTopics</p>" ;
      
        echo "</div>";
      echo "</div>
      
<div class = \"row\">


	
  
        <div class=\"large-12 columns\">
        <h2><center><strong>OUR MEMBERS<strong><center></h2>
";
			$Members = getContent(11, "Sections", $mysqli);	
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
