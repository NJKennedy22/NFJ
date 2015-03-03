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
			<title>Admin</title>
		<link rel="stylesheet" type="text/css" href = "../includes/styles.css">
		</head>
		<body>
<nav class="nav right">
		<ul><strong>
			<li><a href="../index.php">HOME</a></li>

			<li><a href="../Membersonly.php">MEMBERS</a></li>
			<li><a href="../Founders.php">FOUNDERS</a></li>
			<li><a href="../contactUs.php">CONTACT US</a></li>
			<li><a href = "includes/logout.php">Logout</a></li>
			<?php
			homePageButton();
			membersButton();
			?>
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


<textarea name="newMission" rows="6" cols ="60"><?php echo $Mission;?></textarea> Mission
<br><br>

<textarea name="newWhat" rows="3" cols ="60"><?php echo $What;?></textarea> What
<br><br>

<textarea name="newWho" rows="3" cols ="60"><?php echo $Who;?></textarea> Who
<br><br>

<textarea name="newWhen" rows="3" cols ="60"><?php echo $When;?></textarea> When
<br><br>

<textarea name="newWhere" rows="3" cols ="60"><?php echo $Where;?></textarea> Where
<br><br>

<textarea name="newFounders1" rows="5" cols ="60"><?php echo $Founders1;?></textarea> First founders paragraph
<br><br>

<textarea name="newFounders2" rows="5" cols ="60"><?php echo $Founders2;?></textarea> Second founders paragraph
<br><br>

<textarea name="newPreviousTopics" rows="5" cols ="60"><?php echo $PreviousTopics;?></textarea> Previous Topics
<br><br>

<textarea name="newFutureTopics" rows="5" cols ="60"><?php echo $FutureTopics;?></textarea> Future Topics
<br><br>

<textarea name="newMembers" rows="5" cols ="60"><?php echo $Members;?></textarea> Members
<br><br>
<input type="submit" value="Submit">
</form>


		</body>
		</html>