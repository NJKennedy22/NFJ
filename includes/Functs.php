<?php

			function getContent($id, $tbl_name, $mysqli)  {
		   	 $string="SELECT Content FROM $tbl_name WHERE id='$id'";
			   	$result = $mysqli->query($string);
			if($result->num_rows  == 0) {
				echo "didnt work";

			}
			$result2 = mysqli_fetch_assoc($result);
			return $result2['Content'];
		}

		function getImage($name, $tbl_name, $mysqli)  {
		   	 $string="SELECT imageUrl FROM $tbl_name WHERE name='$name'";
		   	$result = $mysqli->query($string);
			if($result->num_rows  == 0) {
				echo "didnt work";

			}
			$result2 = mysqli_fetch_assoc($result);
			return $result2['imageUrl'];
		}

		function getSound($id, $tbl_name, $mysqli)  {
		   	 $string="SELECT soundUrl FROM $tbl_name WHERE id='$id'";

			   	$result = $mysqli->query($string);
			if($result->num_rows  == 0) {
				echo "didnt work";

			}
			$result2 = mysqli_fetch_assoc($result);
			return $result2['soundUrl'];
		}


		function getName($id, $tbl_name, $mysqli)  {
		   	 $string="SELECT name FROM $tbl_name WHERE id='$id'";

			   	$result = $mysqli->query($string);
			if($result->num_rows  == 0) {
				echo "didnt work";

			}
			$result2 = mysqli_fetch_assoc($result);
			return $result2['name'];
		}
		
		function getDateAudio($id, $tbl_name, $mysqli)  {
		   	 $string="SELECT date FROM $tbl_name WHERE id='$id'";

			   	$result = $mysqli->query($string);
			if($result->num_rows  == 0) {
				echo "didnt work";

			}
			$result2 = mysqli_fetch_assoc($result);
			return $result2['date'];
		}
	
?>