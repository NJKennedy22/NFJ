<!DOCTYPE html>
<html> 
	<head>
		<title> Update Page</title>	
	</head>
	<body>
	<!---
<?php
	
	include 'HomePageConnect.php';
	include 'HomePageFuncts.php';	

// define variables and set to empty values
echo "<p>before getmission</p>";
$Mission = getContent(1, "Sections", $mysqli);

echo "outside server request";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newMission = $_POST["newMission"];
      //if the submit button is clicked
       
        echo "inside if";
        
    $newMissionQuery = "UPDATE Sections WHERE id = 1 SET Content = replace(Content, '$Mission', '$newMission')";
    $newMissionResult = mysqli->query($newMissionQuery);  
    }
   
 ?>
-->

<form method="post" action="blah.php">   <!--<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>-->
   NewMission: <input type="text" name="newMission" value="This is a mission">   <!--<?php echo $Mission;?>-->
   
   <input type="submit" name="submit" value="Submit"> 
</form>

</body>
</html>