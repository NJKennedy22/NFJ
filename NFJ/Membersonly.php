<?php
include 'checkLogin.php';

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
h1, h2, h3 {
	color: #000;
	line-height: 120%;
	margin: 30px 0 10px;
}
h1 {
	font-size: 1.7em;
	color: #000;
}
h2 {
	font-size: 1.4em;
	border-top: solid 1px #eee;
	padding-top: 20px;
}
h3 {
	font-size: 1.1em;
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


	
}
</style>
</head>

<body>
	
	<nav class="nav right">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li class="current"><a href="#">Members</a></li>
			<li><a href="#">Contact Us</a></li>
			
		</ul>
	</nav>
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
	
		<fieldset>
			<legend>Contact details</legend>		
			<label>Email: 				</label>	<br>
			
		
		
		</fieldset>
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
