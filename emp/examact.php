<?php

include "php/connections.php";

	if ($_GET) {
		$id = $_GET['id'];


		$check_t= mysqli_query($conn, "SELECT * FROM timetbl WHERE exam_id='$id'");
 		$rows_ct= mysqli_num_rows($check_t);
 		if($rows_ct > 0) {



		$check_q= mysqli_query($conn, "SELECT * FROM examtbl WHERE exam_no='$id'");
 		$rows_cq= mysqli_num_rows($check_q);
 		if($rows_cq > 0) {

		

		$sql ="UPDATE lexamtb SET status = '1' WHERE exam_no ='$id'";



		if ($conn->query($sql) === TRUE) {

			  echo "<script language = 'javascript'>alert('The Exam is activated !')</script>";
			

			 echo "<script>window.location.href = 'exam_list.php';</script>";
		}else{
			echo "Erorr updating record: " .$conn->error;
		}
			$conn->close();

	}else{

		echo "<script language = 'javascript'>alert('Failed! The Exam doesn not have any question !')</script>";
		echo "<script>window.location.href = 'exam_list.php';</script>";

	}

}else{

	echo "<script language = 'javascript'>alert('Failed! The Exam doesn not have timer !')</script>";
		echo "<script>window.location.href = 'exam_list.php';</script>";


}
}

?>