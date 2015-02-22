	<?php
    
    if(isset($_COOKIE["Username"])) 
	{
		
		if(!strcmp( $_COOKIE['Username'] , "PRahm") || !strcmp( $_COOKIE['Username'] , "HBernstein")) { 
			echo "	<a href \"changeHomePage.php\" >Change Page</a> ";
		}	
	
	}

?>