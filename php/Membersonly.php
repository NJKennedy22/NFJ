<?php
include '/home/naomij5/public_html/NFJ/php/checkLogin.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel = "stylesheet" href = "../zurb/css/normalize.css">
		<link type="text/css" rel = "stylesheet" href = "../zurb/css/foundation.css">
		<meta charset="UTF-8">	
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<script src="js/vendor/modernizr.js"></script>

<!--for audio player -->
	<script type="text/javascript"
		src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
	<script type="text/javascript">	
		var flashvars = { };
		var params = {mp3: "audio/test-audio.mp3"};
		swfobject.embedSWF(
		"flash/player_mp3_1.0.0.swf",
		"music-player", "200", "20", "8.0.0",
		flashvars, params); 	
	</script>


<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<link rel="stylesheet" type="text/css" href = "http://www.naomijkennedy.com/NFJ/css/styles.css">
</head>

<body>
	
	<nav class="nav right">
		<ul>
			<li><a href="http://www.naomijkennedy.com/NFJ/index.php">Home</a></li>
			<li class="current"><a href="#">Members</a></li>
			<li><a href= "http://www.naomijkennedy.com/NFJ/html/Founders.html">Founders</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href = "http://www.naomijkennedy.com/NFJ/php/logout.php">Logout</a></li>
		</ul>
	</nav>
	<a href ="http://www.naomijkennedy.com/NFJ/html/changePassForm.html">Change Password</a>	
	<img height = "300" width = "700" src="http://www.albany.edu/~nk848638/201/PATRICK/img/polkadotsNFJ.jpg"  alt = "our logo"/>
  <iframe src="https://www.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=vo65u6os28mi1vfbd7olb97oi0%40group.calendar.google.com&amp;color=%235229A3&amp;ctz=America%2FNew_York" style=" border-width:0 " width="800" height="600" frameborder="0" scrolling="no"></iframe>
	
	
	<div class = "row">
<div class="large-8 columns">
	
		<audio src="/home/naoken22/Downloads/MotivationalSongs.mp3" controls>
		<p>You cannot hear this track because this browser does not support our Flash music player.</p>
		</audio>
		<p> Last weeks discussion</p>
		 <form>
				<p>What did you think?</p>
				<textarea name="comments" cols="20" rows="4">Enter your comments...</textarea>        
        </form>
     </div>
        
        <div class="large-4 columns">
			<form>
				<p>Will you be attending our next meeting?
				<br>
				<input type="radio" name="rsvp" value="yes" checked="checked" /> Yes
				<input type="radio" name="rsvp" value="no" checked="checked" /> No
				</p>
							
			
			</form>
      </div>
      <div class = "row">
<div class="large-8 columns">
	
		
     </div>
        
        <div class="large-4 columns">
				
      </div>





<script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>


	
	
</body>
</html>

