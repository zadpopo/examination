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


<div class="container col-md-10 " style="background-color: rgba(0,0,0,.7)">

  <div class="box" >
<br>
<h2 class="text-white text-center">Student Registration</h2>

<b style=color:red; >* Required Field</b> 
<br>

<form action="" method="POST">
    

<div class="form-row text-white">

<div class="form-group col-md-3.5">
    <label for="FirstName"><b style=color:red; >*</b>First Name</label>
    <input type="text" class="form-control" id="" name="fname" placeholder="First Name" required>
  <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>


  <div class="form-group col-md-3.5">
    <label for="">Middle Name</label>
    <input type="text" class="form-control" name="mname" id="" placeholder="Middle Name">
  </div>



  <div class="form-group col-md-3.5" >
    <label for="LastName"><b style=color:red; >*</b>Last Name</label>
    <input type="text" class="form-control" id="LastName" name="lname" placeholder="Last Name" required>
  </div>
    <div class="form-group col-md-3.5" >  

    <label for="Suffix">Suffix</label>
    <input type="text" class="form-control"  name="sname" placeholder="">
  </div>

  <div class="form-group col-md-3.5" >
    <label for="Nickname"><b style=color:red; >*</b>Nickname</label>
    <input type="text" class="form-control" name="nname" placeholder="Nick Name" required>

  </div>


  <div class="form-group col-md-5">
    <label for="Address"><b style=color:red; >*</b>Permanent Address</label>
    <input type="text" class="form-control" id="Address" name="Address" placeholder="Address" required>
  </div>

    <div class="form-group col-md-4">
    <label for="EnrolledSchool"><b style=color:red; >*</b>Graduated School</label>
    <input type="text" class="form-control" id="EnrolledSchool" name="enrolledschool"placeholder="Name of school" required>
  </div>


<div class="form-group col-md-3">
   <label for="" ><b style=color:red; >*</b>Gender</label>
   <select class="form-control" name="gender" required>
    <option value="Male">Male</option>
    <option  value="Female">Female</option>
</select>
</div>

  <div class="form-group col-md-4">
    <label for="Phone"><b style=color:red; >*</b>Contact Number</label>
    <input type="number" class="form-control" id="Phone" name="phone" placeholder="Number" required>
  </div>
  <div class="form-group col-md-4">
    <label for="Phone"><b style=color:red; >*</b>Email</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
  </div>




 <div class="form-group col-md-4">
  
  </div>
<div class="form-group col-md-4">
   <label for="" ><b style=color:red; >*</b>Status</label>
   <select class="form-control" name="stats" required>
    <option value="FirstTake">First Take</option>
    <option  value="Retake">Retake</option>
</select>
</div>

<div class="form-group col-md-4">
   <label for="" ><b style=color:red; >*</b>Package</label>
   <select class="form-control" name="pack" required>
    <option value="Full Review">Full Review</option>
    <option  value="Intensive">Intensive</option>
       <option  value="Final Coaching">Final Coaching</option>
     </select>
</div>


  <div class="form-group col-md-4">
  <label for=""><b style=color:red; >*</b>Programs:</label>
<div class="form-group">
  <select class="form-control" name="prog" required>

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



   <div class="form-group col-md-10">
    <label for="Phone">
<b style=color:red; >In case of Emergency</b> </label>

  </div>


   <div class="form-group col-md-3">
    <label for="Phone"><b style=color:red; >*</b>Guardian Name</label>
    <input type="text" class="form-control" id="Phone" name="guardianname" placeholder="" required>
  </div>

  <div class="form-group col-md-3">
    <label for="Phone"><b style=color:red; >*</b>Contact Number</label>
    <input type="number" class="form-control" id="Phone" name="gphone" placeholder="Number" required>
  </div>

   <div class="form-group col-md-3">
    <label for="Phone"><b style=color:red; >*</b>Relationship</label>
    <input type="text" class="form-control" id="Phone" name="relationship" placeholder="" required>
  </div>

  <div class="form-group col-md-3" hidden>
    <label for="Password"><b style=color:red; >*</b>Password</label>
    <input type="password" class="form-control" name="Password" placeholder="">
  </div>


  
</div>
<div class="modal-footer" >
	 <a href="home.php" type="button" class="btn btn-danger"  value="Cancel" style="border-radius: 20px">Cancel</a>
  <input  type="submit" class="btn btn-primary" value="submit" name="test" style="border-radius: 20px" >
</div>

</form>
</div>
</div>

<?php



if (isset($_POST["test"])) {


	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
  $nname=$_POST['nname'];
	$address=$_POST['Address'];
	$enrolledschool=$_POST['enrolledschool'];
	$prog=$_POST['prog'];

  $sname=$_POST['sname'];
  $stats=$_POST['stats'];
  $pack=$_POST['pack'];

  $phone=$_POST['phone'];
  $email=$_POST['email'];



  $guardianname=$_POST['guardianname'];
  $gphone=$_POST['gphone'];
    $relationship=$_POST['relationship'];
    $gender = $_POST['gender'];
  

 // $Password=$_POST['Password'];
  

//random number
date_default_timezone_set("Asia/Manila");
  $date = date("Y");

  $random = (rand(1,9)) .  (rand(1,9)) .  (rand(1,9)) .  (rand(1,9));

$studentnumb = ($date). "-".($random). "-".($random);



function random_password( $length=5 ) {
            $str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            $shuffled = substr ( str_shuffle ( $str ), 0, $length);
            return $shuffled;
          }

$Password = random_password(8);

	//$Username=$_POST['username'];
	//$Password=($_POST['Password']);
	
// encryption password
	$cryptedpass = $Password;
	$db_pass= base64_encode($cryptedpass);




$email_check= mysqli_query($conn, "SELECT * FROM studenttbl WHERE Email='$email'");
 $rows_email_check= mysqli_num_rows($email_check);


 if($rows_email_check > 0) {


   echo "<script language = 'javascript'>alert('ERROR!Email is already registered')</script>";


}else{

  require '../PHPMailer/PHPMailerAutoload.php';

          $mail = new PHPMailer;

          $mail->IsSMTP();

          $mail->Host = 'smtp.gmail.com';

          $mail->SMTPAuth = true;

          $mail->Username = 'toprankreviewcenter@gmail.com';

          $mail->Password = 'top_rank1';

          $mail->SMTPSecure = 'tsl';

          $mail->Port = 587;

          $mail->From = 'Top Rank Review Academy';


          $mail->FromName = 'Registrar';

          $mail->addAddress($email);

          $mail->isHTML(true);

          $message = "Your Student Number is: <font color='green'><b>$studentnumb</b></font> <br> Your Password is: <font color='red'><b>$Password</b></font>";

          $mail->Subject = 'Student Number and Default Password';

          $mail->Body = $message;

          if(!$mail->send()) {
            echo 'Message could not be sent';

            echo 'Mailer Error: ' . $mail->ErrorInfo;
            echo "<script language = 'javascript'>alert('ERROR!')</script>";
               echo "<script>window.location.href = 'home.php';</script>";

            
          }else{



  

     $sql= "INSERT INTO `studenttbl` (`student_number`,`FirstName`, `MiddleName`, `LastName`,Suffix,`Nickname`, `Address`, `EnrolledSchool`, Program, Status, Package,`Gender`,`TelPhone`,`Email`,`GuardianName`,`GContactNumber`,`Relationship`,`Password`) VALUES ( '$studentnumb','$fname', '$mname', '$lname','$sname','$nname', '$address','$enrolledschool' ,'$prog','$stats','$pack','$gender','$phone','$email','$guardianname','$gphone','$relationship','$db_pass')";

     mysqli_query($conn," INSERT INTO `logtbl` ( `user`, `pass`, `position`) VALUES ( '$studentnumb', '$db_pass', 'student')");

if ($conn->query($sql) === TRUE) {

    echo "<script language = 'javascript'>alert('SUCCESS!')</script>";
    echo "<script>window.location.href = 'home.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


}
}


}
?>


<?php

include("../php/footer_fit.php");

?>


<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>




<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>

