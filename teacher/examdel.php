<?php

include "php/connections.php";

	if ($_GET) {
		$id = $_GET['id'];

		$sql ="DELETE FROM examtbl WHERE exam_id ='$id'";

		if ($conn->query($sql) === TRUE) {

			  echo "<script language = 'javascript'>alert('The Question is successfully removed !')</script>";
			

			 echo "<script>window.location.href = 'iexam.php?id=$id';</script>";
		}else{
			echo "Erorr updating record: " .$conn->error;
		}
			$conn->close();
	}


?>