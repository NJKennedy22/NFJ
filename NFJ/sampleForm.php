<!DOCTYPE html>
	<html>
		<head>
			<title>Admin</title>		
		</head>
		<body>
		
<?php
	
	include 'HomePageConnect.php';
	include 'HomePageFuncts.php';	
	
	$Mission = getContent(1, "Sections", $mysqli);
	
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") { 
		echo "<p>inside ifffff</p>";
	$newMission=$_POST['newMission'];
	//$newMissionQuery = "UPDATE Sections SET Content = replace(Content, '$Mission', '$newMission')";
	 $newMissionQuery = "UPDATE Sections SET Content = '$newMission' WHERE id = 1";
    $newMissionResult = $mysqli->query($newMissionQuery);  
    $Mission = $newMission;
    echo "<p>x$newMission x</p>";
    } 
	?>		  
		
			<form method = "POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Mission:<br>
<input type="text" name="newMission" value="<?php echo $Mission;?>">
<br>
<input type="submit" value="Submit">
</form>		
		
		
		</body>
		</html>