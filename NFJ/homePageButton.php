	<?php
	session_start();
	if(isset($_SESSION['admin']))
	{
		if($_SESSION['admin'] == true)
			{
			 echo "<a href= \"sampleForm.php\">Admin Form </a> ";
	}
}
?>