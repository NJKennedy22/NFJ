<?php
	include '../includes/HomePageConnect.php';
	include '../includes/Functs.php';
	include '../includes/Buttons.php';

	$Mission = getContent(1, "Sections", $mysqli);
	$What = getContent(2, "Sections", $mysqli);
	$Who = getContent(3, "Sections", $mysqli);
	$When = getContent(4, "Sections", $mysqli);
	$Where = getContent(5, "Sections", $mysqli);
	$Founders1 = getContent(6, "Sections", $mysqli);
	$Founders2 = getContent(7, "Sections", $mysqli);
	$FutureTopics = getContent(8, "Sections", $mysqli);
	$Members = getContent(9, "Sections", $mysqli);
	$PreviousTopics = getContent(10, "Sections", $mysqli);
?>
<!DOCTYPE html>
	<html>
		<head>
			<title>Admin HomePage</title>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link type="text/css" rel = "stylesheet" href = "../zurb/css/normalize.css">
		<link type="text/css" rel = "stylesheet" href = "../zurb/css/foundation.css">
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href = "../includes/styles.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<script src="js/vendor/modernizr.js"></script>

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

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$newMission=$_POST['newMission'];
	 $newMissionQuery = "UPDATE Sections SET Content = '$newMission' WHERE id = 1";
    $newMissionResult = $mysqli->query($newMissionQuery);
    $Mission = $newMission;
    }
    /******************************************************************************/
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$newWhat=$_POST['newWhat'];
	 $newWhatQuery = "UPDATE Sections SET Content = '$newWhat' WHERE id = 2";
    $newWhatResult = $mysqli->query($newWhatQuery);
    $What = $newWhat;
    }
    /*********************************************************************************/
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$newWho=$_POST['newWho'];
	 $newWhoQuery = "UPDATE Sections SET Content = '$newWho' WHERE id = 3";
    $newWhoResult = $mysqli->query($newWhoQuery);
    $Who = $newWho;
    }
        /*********************************************************************************/
    	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$newWhen=$_POST['newWhen'];
	 $newWhenQuery = "UPDATE Sections SET Content = '$newWhen' WHERE id = 4";
    $newWhenResult = $mysqli->query($newWhenQuery);
    $When = $newWhen;
    }
      /*********************************************************************************/
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$newWhere=$_POST['newWhere'];
	 $newWhereQuery = "UPDATE Sections SET Content = '$newWhere' WHERE id = 5";
    $newWhereResult = $mysqli->query($newWhereQuery);
    $Where = $newWhere;
    }
     /*********************************************************************************/
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$newFounders1=$_POST['newFounders1'];
	 $newFounders1Query = "UPDATE Sections SET Content = '$newFounders1' WHERE id = 6";
    $newFounders1Result = $mysqli->query($newFounders1Query);
    $Founders1 = $newFounders1;
    }
     /*********************************************************************************/
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$newFounders2=$_POST['newFounders2'];
	 $newFounders2Query = "UPDATE Sections SET Content = '$newFounders2' WHERE id = 7";
    $newFounders2Result = $mysqli->query($newFounders2Query);
    $Founders2 = $newFounders2;
    }
 	/*********************************************************************************/
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$newFutureTopics=$_POST['newFutureTopics'];
	 $newFutureTopicsQuery = "UPDATE Sections SET Content = '$newFutureTopics' WHERE id = 8";
    $newFutureTopicsResult = $mysqli->query($newFutureTopicsQuery);
    $FutureTopics = $newFutureTopics;
    }
    /*********************************************************************************/
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$newMembers=$_POST['newMembers'];
	 $newMembersQuery = "UPDATE Sections SET Content = '$newMembers' WHERE id = 9";
    $newMembersResult = $mysqli->query($newMembersQuery);
    $Members = $newMembers;
    }
    	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$newPreviousTopics=$_POST['newPreviousTopics'];
	 $newPreviousTopicsQuery = "UPDATE Sections SET Content = '$newPreviousTopics' WHERE id = 10";
    $newPreviousTopicsResult = $mysqli->query($newPreviousTopicsQuery);
    $PreviousTopics = $newPreviousTopics;
    }
?>

		<!---------------------------------------------------------------------------------------->
		<form method = "POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<br>
		<br><br><br>

Mission:
<textarea name="newMission" rows="6" cols ="60"><?php echo $Mission;?></textarea> 
<br>
What:
<textarea name="newWhat" rows="3" cols ="60"><?php echo $What;?></textarea> 
<br>
Who:
<textarea name="newWho" rows="3" cols ="60"><?php echo $Who;?></textarea> 
<br>
When:
<textarea name="newWhen" rows="3" cols ="60"><?php echo $When;?></textarea>
<br>
Where:
<textarea name="newWhere" rows="3" cols ="60"><?php echo $Where;?></textarea> 
<br>
First Founders Paragraph:
<textarea name="newFounders1" rows="5" cols ="60"><?php echo $Founders1;?></textarea>
<br>
Second Founders Paragraph: 
<textarea name="newFounders2" rows="5" cols ="60"><?php echo $Founders2;?></textarea> 
<br>

Future Topics: 
<textarea name="newFutureTopics" rows="5" cols ="60"><?php echo $FutureTopics;?></textarea> 
<br>
Members:
<textarea name="newMembers" rows="5" cols ="60"><?php echo $Members;?></textarea> 
<br><br>
<input type="submit" value="Submit">
<br>
<br>
<br>
</form>


		</body>
		</html>