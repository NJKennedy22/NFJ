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
?>
		