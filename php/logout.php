<?php
	$time = time()-10*60;
   $cookie_name="Username";
  $cookie_value = " ";
  setcookie($cookie_name, $cookie_value, $time, "/");
	  			header('Location: http://www.naomijkennedy.com/NFJ/index.php');
?>
