<?php
  
//incorrect username/password (wrongUserPass, passwords dont match (passnomatch), username already in database(userindb), 
//audio already in database(audioindb), no blank fields(noblanks), admins"success or unsuccessful"(adminyesorno) , 
$value = 0; 
  if(isset($_COOKIE["wrongUserPass"]))
	{
		$time = time()-10*60;
   $cookie_name="wrongUserPass";
  $cookie_value = " ";
  setcookie($cookie_name, $cookie_value, $time, "/");
  $value = 1; 
   
	}
  if(isset($_COOKIE["passNoMatch"]))
	{
		$time = time()-10*60;
   $cookie_name="passNoMatch";
  $cookie_value = " ";
  setcookie($cookie_name, $cookie_value, $time, "/");
  $value = 2;
  
	}
  if(isset($_COOKIE["UserInDb"]))
	{
		$time = time()-10*60;
   $cookie_name="UserInDb";
  $cookie_value = " ";
  setcookie($cookie_name, $cookie_value, $time, "/");
  $value = 3;  
  
	}
  if(isset($_COOKIE["audioInDb"]))
	{
		$time = time()-10*60;
   $cookie_name="audioInDb";
  $cookie_value = " ";
  setcookie($cookie_name, $cookie_value, $time, "/");
  $value = 4; 
 
	}
  if(isset($_COOKIE["noBlanks"]))
	{
		$time = time()-10*60;
   $cookie_name="noBlanks";
  $cookie_value = " ";
  setcookie($cookie_name, $cookie_value, $time, "/");
  $value = 5; 
 
	}
  if(isset($_COOKIE["Yes"]))
	{
		$time = time()-10*60;
   $cookie_name="Yes";
  $cookie_value = " ";
  setcookie($cookie_name, $cookie_value, $time, "/");
  $value = 6;
  
	}
	  if(isset($_COOKIE["No"])) 
	{
		$time = time()-10*60;
   $cookie_name="No";
  $cookie_value = " ";
  setcookie($cookie_name, $cookie_value, $time, "/");
  $value = 7;  

	}
	function printForms($output) {
		if($output == 1)
		{
		echo "<p style \"color:red\">Incorrect Username or Password</p>";
		}
		if($output == 2)
		{
		echo "<p style \"color:red\">Passwords must match</p>";
		}
		if($output == 3)
		{
		echo "<p style \"color:red\">Username already exists</p>";
		}
		if($output == 4)
		{
		 echo "<p style \"color:red\">Audio file already exists</p>";
		}
		if($output == 5)
		{
		 echo "<p style \"color:red\">Must fill out all fields</p>";
		}
		if($output == 6)
		{
		echo "<p style \"color:green\">Success!</p>";
		}
		if($output == 7)
		{
		  echo "<p style \"color:red\">Unsuccessful</p>";
		}
	
	}
	?>