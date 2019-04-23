<?php

include "php/connections.php";

	if ($_GET) {
		$id = $_GET['id'];

		$sql ="DELETE FROM `programtbl` WHERE `program_id` = '$id'";
 
		if ($conn->query($sql) === TRUE) {

			  echo "<script language = 'javascript'>alert('The Program is successfully removed !')</script>";
			

			 echo "<script>window.location.href = 'programs.php';</script>";
		}else{
			echo "Erorr updating record: " .$conn->error;
		}
			$conn->close();
	}


?>