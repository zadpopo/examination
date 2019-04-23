<!DOCTYPE html>
<html>
<head>
	<title></title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</head>
<body style="background-color: black" >
  <?php

include ("connections.php");



 session_start();
 
 if(isset($_SESSION["user"])){
   $user = $_SESSION["user"];
 }else{
   echo "<script>window.location.href='../';</script>";
 }
 
$retrieve_query = mysqli_query($conn, "SELECT * FROM logtbl WHERE user='$user' ");

while($row_users = mysqli_fetch_assoc( $retrieve_query )){
  
  $emp_user = $row_users["user"];
  $emp_pass = $row_users["pass"];

}


$retrieve_query = mysqli_query($conn, "SELECT * FROM studenttbl WHERE student_number='$emp_user' AND password ='$emp_pass'");

while($row_users = mysqli_fetch_assoc( $retrieve_query )){
  
  

  $stu_user = $row_users["student_number"];
  $stu_lname = $row_users["LastName"];
  $stu_fname = $row_users["FirstName"];
  $stu_mname = $row_users["MiddleName"];
  $stu_nname = $row_users["Nickname"];

  
  
  $stu_fullname = $stu_fname . " " . $stu_mname . " " . $stu_lname; 
  
  
}



  $s1= "SELECT * FROM yeartbl WHERE status = '1'";
  $r1 = $conn->query($s1);
  $d1= $r1->fetch_assoc();
  $active = $d1['year'];


?>
</body>
</html>