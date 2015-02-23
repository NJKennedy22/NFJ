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
			<li><a href= "http://www.naomijkennedy.com/NFJ/php/Founders.php">Founders</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href = "http://www.naomijkennedy.com/NFJ/php/logout.php">Logout</a></li>
		</ul>
	</nav>
	<a href ="http://www.naomijkennedy.com/NFJ/html/changePassForm.html">Change Password</a>	
	<img height = "300" width = "700" src="http://www.albany.edu/~nk848638/201/PATRICK/img/polkadotsNFJ.jpg"  alt = "our logo"/>
 <iframe src="https://www.google.com/calendar/embed?mode=WEEK&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=vo65u6os28mi1vfbd7olb97oi0%40group.calendar.google.com&amp;color=%235229A3&amp;ctz=America%2FNew_York" style=" border-width:0 " width="800" height="200" frameborder="0" scrolling="no"></iframe>
	<div class = "row">
	        <div class="large-4 columns">
			<form>
				<p>Will you be attending our next meeting?
				<br>
				<input type="radio" name="rsvp" value="yes" checked="checked" /> Yes
				<input type="radio" name="rsvp" value="no" checked="checked" /> No
				</p>
							
			
			</form>
      </div>
</div>
	<div class = "row">
<div class="large-12 columns">
	
		
		<audio src="http://www.naomijkennedy.com/NFJ/audio/NFJComplexTraining.m4a" controls>
		<p>You cannot hear this track because this browser does not support our Flash music player.</p>
		</audio>
	<ul class="accordion" data-accordion>
  <li class="accordion-navigation">
    <a href="#panel1a">Accordion 1</a>
    <div id="panel1a" class="content active">
      <ul class="small-block-grid-2 large-block-grid-3 ">
        <li><img src="http://placehold.it/350x150"></li>
        <li><img src="http://placehold.it/350x150"></li>
        <li><img src="http://placehold.it/350x150"></li>
      </ul>
    </div>
  </li>
  <li class="accordion-navigation">
    <a href="#panel2a">Accordion 2</a>
    <div id="panel2a" class="content">
      <div class="row">
        <div class="small-6 columns">
          <p>Panel 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="small-6 columns">
        <img src="http://placehold.it/350x150">
      </div>
    </div>
  </li>
  <li class="accordion-navigation">
    <a href="#panel3a">Accordion 3</a>
    <div id="panel3a" class="content">
      Panel 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
  </li>
</ul>

				       
        </form>
     </div>
        
<p>What did you think?</p>
				<textarea name="comments" cols="20" rows="4">Enter your comments...</textarea>





<script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>

<script> $(document).foundation({ accordion: { callback : function (accordion) { console.log(accordion); } } }); </script>

<script> $('#myAccordionGroup').on('toggled', function (event, accordion) { console.log(accordion); }); </script>
<script src="js/vendor/jquery.js"></script>
 <script src="js/foundation/foundation.js"></script>
  <script src="js/foundation/foundation.accordion.js"></script>
	<script src="/js/foundation.min.js"></script>
	
	<script>
$(document).ready(function(){
    $(document).foundation();
});

$(document).foundation({
  accordion: {
    // specify the class used for accordion panels
    content_class: 'content',
    // specify the class used for active (or open) accordion panels
    active_class: 'active',
    // allow multiple accordion panels to be active at the same time
    multi_expand: false,
    // allow accordion panels to be closed by clicking on their headers
    // setting to false only closes accordion panels when another is opened
    toggleable: true
  }
});	
</script>
</body>
</html>


