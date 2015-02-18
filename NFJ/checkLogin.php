    <?php
  
    session_start();
    
    if(isset($_SESSION['loggedIn'])) 
	{
		if($_SESSION['loggedIn'] == 0) {
			header('Location: login.html');		
		}	
	}
else {
	header('Location: login.html');
}
?>