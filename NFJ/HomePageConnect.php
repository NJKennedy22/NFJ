<?php


// Connect to server and select database.
				$mysqli = new mysqli('localhost',  'root', 'password', 'HomePage');
				if( mysqli_connect_errno()) {
					printf("Connect failed: %s\n", mysqli_connect_error());
				exit();				
				}
				//select Members Database
				$mysqli->select_db("HomePage");
				
?>
				
				