<?php

include "php/connections.php";

	if ($_GET) {
		$id = $_GET['id'];


 $min= mysqli_query($conn, "SELECT * FROM timetbl WHERE exam_id='$id' AND duration =''");
 $check_min= mysqli_num_rows($min);
 if($check_min < 0) {


			  echo "<script language = 'javascript'>alert('Failed!! The exam dont have time limits !')</script>";
			

			 echo "<script>window.location.href = 'exam_list.php';</script>";

 }else{

 $question= mysqli_query($conn, "SELECT * FROM examtbl WHERE exam_no ='$id'");
 $check_question= mysqli_num_rows($question);
 if($check_question > 0) {


		$sql ="UPDATE lexamtb SET status = '1' WHERE exam_no ='$id'";



		if ($conn->query($sql) === TRUE) {

			  echo "<script language = 'javascript'>alert('The Exam is activated !')</script>";
			

			 echo "<script>window.location.href = 'exam_list.php';</script>";
		}else{
			echo "Erorr updating record: " .$conn->error;
		}
			$conn->close();



	
}else{

	  echo "<script language = 'javascript'>alert('Failed!! The exam dont have any question !')</script>";
			

	 echo "<script>window.location.href = 'exam_list.php';</script>";

}
}
}

?>