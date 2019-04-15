<?php

include "php/connections.php";

	if ($_GET) {
		$id = $_GET['id'];

		$sql ="DELETE FROM lexamtb WHERE exam_no ='$id'";

		if ($conn->query($sql) === TRUE) {

			  echo "<script language = 'javascript'>alert('The Exam is successfully removed !')</script>";
			

			 echo "<script>window.location.href = 'exam_list.php';</script>";
		}else{
			echo "Erorr updating record: " .$conn->error;
		}
			$conn->close();
	}


?>