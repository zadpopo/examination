<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title> Student Registration</title>
  </head>
  <body >
  	
  			<?php 
include("../php/connections.php");
include("php/bg.php");

		?>

<!---random number-->

<?php
date_default_timezone_set("Asia/Manila");
	$date = date("Y");

	$random = (rand(1,9)) .  (rand(1,9)) .  (rand(1,9)) .  (rand(1,9));

$studentnumb = ($date). "-".($random);


	//decryption password
	//$cryptedpass = 'Nzc3';
	//$db_pass= base64_decode($cryptedpass);

//      echo $db_pass;



 ?>

<div class="container " style="background-color: black">
<br>
<h2 class="text-white">Student Registration</h2>
<br>
<b style=color:red; >* Required Field</b> 
<br>

<form action="" method="POST">
    

<div class="form-row text-white">

<div class="form-group col-md-3">
    <label for="FirstName"><b style=color:red; >*</b>First Name</label>
    <input type="text" class="form-control" id="" name="fname" placeholder="First Name">
  <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>


  <div class="form-group col-md-3">
    <label for="">Middle Name</label>
    <input type="text" class="form-control" name="mname" id="" placeholder="Middle Name">
  </div>



  <div class="form-group col-md-3" >
    <label for="LastName"><b style=color:red; >*</b>Last Name</label>
    <input type="text" class="form-control" id="LastName" name="lname" placeholder="Last Name">
  </div>
    <div class="form-group col-md-3" >
    <label for="Suffix"><b style=color:red; >*</b>Suffix</label>
    <input type="text" class="form-control" id="Suffix" name="lname" placeholder="">
  </div>

  <div class="form-group col-md-3" >
    <label for="LastName"><b style=color:red; >*</b>Nickname</label>
    <input type="text" class="form-control" id="LastName" name="lname" placeholder="Last Name">
  </div>


  <div class="form-group col-md-5">
    <label for="Address"><b style=color:red; >*</b>Permanent Address</label>
    <input type="text" class="form-control" id="Address" name="Address" placeholder="Address">
  </div>

    <div class="form-group col-md-4">
    <label for="EnrolledSchool"><b style=color:red; >*</b>Graduated School</label>
    <input type="text" class="form-control" id="EnrolledSchool" name="enrolledschool"placeholder="Name of school">
  </div>


<div class="form-group col-md-3">
   <label for="" ><b style=color:red; >*</b>Gender</label>
   <select class="form-control" name="gender">
    <option value="Male">Male</option>
    <option  value="Female">Female</option>
</select>
</div>
<div class="form-group col-md-3">
   <label for="" ><b style=color:red; >*</b>Status</label>
   <select class="form-control" name="stat">
    <option value="FirstTake">First Take</option>
    <option  value="Retake">Retake</option>
</select>
</div>

<div class="form-group col-md-3">
   <label for="" ><b style=color:red; >*</b>Package</label>
   <select class="form-control" name="stat">
    <option value="FirstTake">Full Review</option>
    <option  value="Retake">Intensive</option>
       <option  value="Retake">Final Coaching</option>
     </select>
</div>


  <div class="form-group col-md-3">
  <label for=""><b style=color:red; >*</b>Programs:</label>
<div class="form-group">
  <select class="form-control" name="prog">

<?php

$query1 ="SELECT DISTINCT program_name from programtbl";
$result1 =mysqli_query($conn,$query1);

while ($row = mysqli_fetch_array($result1)) {
  $prog = $row["program_name"];
  echo "<option value='$prog'>$prog</option>";
  # populate data for program dropdown
 } 


?>
</select>
</div>
</div>


  <div class="form-group col-md-3">
    <label for="Phone"><b style=color:red; >*</b>Contact Number</label>
    <input type="number" class="form-control" id="Phone" name="phone" placeholder="Number">
  </div>

<hr>


   <div class="form-group col-md-12">
    <label for="Phone">
<b style=color:red; >In case of Emergency</b> </label>

  </div>


   <div class="form-group col-md-3">
    <label for="Phone"><b style=color:red; >*</b>Guardian Name</label>
    <input type="text" class="form-control" id="Phone" name="phone" placeholder="">
  </div>

  <div class="form-group col-md-3">
    <label for="Phone"><b style=color:red; >*</b>Contact Number</label>
    <input type="number" class="form-control" id="Phone" name="phone" placeholder="Number">
  </div>

   <div class="form-group col-md-3">
    <label for="Phone"><b style=color:red; >*</b>Relationship</label>
    <input type="text" class="form-control" id="Phone" name="phone" placeholder="">
  </div>




  
  
</div>
<div class="modal-footer">
	 <a href="home.php" type="button" class="btn btn-danger"  value="Cancel">Cancel</a>
  <input  type="submit" class="btn btn-primary" value="submit" name="test">
</div>

</form>
</div>
<?php



if (isset($_POST["test"])) {


	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$address=$_POST['Address'];
	$enrolledschool=$_POST['enrolledschool'];
	$prog=$_POST['prog'];
  $stat=$_POST['stat'];
  

//random number
date_default_timezone_set("Asia/Manila");
  $date = date("Y");

  $random = (rand(1,9)) .  (rand(1,9)) .  (rand(1,9)) .  (rand(1,9));

$studentnumb = ($date). "-".($random);


	//$Username=$_POST['username'];
	//$Password=($_POST['Password']);
	
// encryption password
	$cryptedpass = $Password;
	$db_pass= base64_encode($cryptedpass);



	$phone=$_POST['phone'];
		
		$gender = $_POST['gender'];
	



     $sql= "INSERT INTO `studenttbl` (`student_number`,`FirstName`, `MiddleName`, `LastName`, `Address`, `EnrolledSchool`, Program, Status,`Gender`,`TelPhone`,`Password`) VALUES ( '$studentnumb','$fname', '$mname', '$lname', '$address','$enrolledschool' ,'$prog','$stat','$gender','$phone','$db_pass')";

     mysqli_query($conn," INSERT INTO `logtbl` ( `user`, `pass`, `position`) VALUES ( '$studentnumb', '$db_pass', 'student')");


    

if ($conn->query($sql) === TRUE) {


   
    echo "<script language = 'javascript'>alert('SUCCESS!')</script>";
    echo "<script>window.location.href = 'home.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();







}


?>









<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>

