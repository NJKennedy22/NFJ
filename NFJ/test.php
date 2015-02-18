	<?php
	
	
	
	session_start();
	
	echo $_SESSION["loggedIn"];
    if(isset($_SESSION['loggedIn'])) 
	{
		echo "in isset";
		if($_SESSION['loggedIn'] == 0) {
			echo "in go to login";
			header('Location: login.html');		
		}
		else {
			echo "in go to membersonly";
			header('Location: Membersonly.html');
		}	
	}
else {
	echo "second go to login";
	header('Location: login.html');
}
	
	
	
	?>