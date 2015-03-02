<?php
include 'includes/checkLogin.php';
include 'includes/SoundsConnect.php';
include 'includes/Functs.php';
?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel = "stylesheet" href = "../zurb/css/normalize.css">
		<link type="text/css" rel = "stylesheet" href = "zurb/css/foundation.css">
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

<link rel="stylesheet" type="text/css" href = "includes/styles.css">

</head>

<body>

	<nav class="nav right">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li class="current"><a href="#">Members</a></li>
			<li><a href= "Founders.php">Founders</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href = "includes/logout.php">Logout</a></li>
		</ul>
	</nav>

	<img height = "300" width = "700" src="http://www.albany.edu/~nk848638/201/PATRICK/img/polkadotsNFJ.jpg"  alt = "our logo"/>

	<div class = "row">
<div class="large-12 columns">
	<table style="width:100%">
<!--
  <p>What did you think?</p>
  <textarea name="comments" cols="20" rows="4">Enter your comments...</textarea>
-->



<?php
$query = "SELECT * from sounds";
$rownum = $mysqli->query($query)->num_rows;

for ($id = $rownum; $id >= 1; $id--) {
$nameAnddate = getNameAndDate($id, "sounds", $mysqli);
$soundName = getSound($id, "sounds", $mysqli);

echo "
<tr>
	<td>$nameAnddate</td>
	<td><audio src=\"audio/$soundName\"
	controls>
    <p>You cannot hear this track because this browser does not support our Flash music player.</p>
		</audio>
		</td>

</tr>  ";
}

?>


</table>


<a href ="forms/changePassForm.html">Change Password</a>

  <!--
<p>What did you think?</p>
				<textarea name="comments" cols="20" rows="4">Enter your comments...</textarea>
</div>
</div>
-->
 <iframe src="https://www.google.com/calendar/embed?mode=WEEK&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=vo65u6os28mi1vfbd7olb97oi0%40group.calendar.google.com&amp;color=%235229A3&amp;ctz=America%2FNew_York" style=" border-width:0 " width="800" height="200" frameborder="0" scrolling="no"></iframe>
<!--
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
-->

</body>
</html>
