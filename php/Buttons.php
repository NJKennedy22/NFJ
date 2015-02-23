<?php
    function homePageButton() {
    if(isset($_COOKIE["Username"])) 
	{		
		if(!strcmp( $_COOKIE['Username'] , "PRahm") || !strcmp( $_COOKIE['Username'] , "HBernstein")) { 
			echo "<li><a href= \"http://www.naomijkennedy.com/NFJ/php/changeHomePage.php\" >Change Homepage</a></li>";
		}	
	}
}
/**********************************************************************************/
    function membersButton() {
    if(isset($_COOKIE["Username"])) 
	{
		
		if(!strcmp( $_COOKIE['Username'] , "PRahm") || !strcmp( $_COOKIE['Username'] , "HBernstein")) { 
			echo "	<li><a href = \"changeMembers.php\" >Change Members Page</a></li> ";
		}	
	
	}
}
/**********************************************************************************/
    function foundersButton() {
    if(isset($_COOKIE["Username"])) 
	{
		
		if(!strcmp( $_COOKIE['Username'] , "PRahm") || !strcmp( $_COOKIE['Username'] , "HBernstein")) { 
			echo "<li><a href = \"changeFounders.php\" >Change Founders Page</a> </li>";
		}	
	
	}
}
/**********************************************************************************/
    function contactButton() {
    if(isset($_COOKIE["Username"])) 
	{
		
		if(!strcmp( $_COOKIE['Username'] , "PRahm") || !strcmp( $_COOKIE['Username'] , "HBernstein")) { 
			echo "	<li><a href = \"changeContact.php\" >Change Contact Page</a></li> ";
		}	
	
	}
}
/**********************************************************************************/
?>
