
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">



<?php 
  date_default_timezone_set ("Asia/Manila");
    $date = date("Y-m-d");

    $datee = date("Y");

    $random1 = (rand(1,9)) . (rand(1,9)) . (rand(1,9)) . (rand(1,9));
    $random2 = (rand(1,9)) . (rand(1,9)) . (rand(1,9)) . (rand(1,9));


      $code= ($datee) . "-" . ($random1) . "" . ($random2);

  ?>

  <title ">Employee Form</title><br>
  </head>
  <body style="background-image: url('../img/bgemp1.jpg');">

<center><h2 class="text-white">Employee information</h2></center>


 <div class="container mx-auto" style="background-color: black; opacity: 0.83" ><br><br>

<form method="POST" action="">
<div class="container">

<div class="form-row text-white ">
  <div class="form-group col-md-5">
    <label for="FirstName" style="color: white">First Name</label>
    <input type="text" class="form-control" name="fname" placeholder="First Name" required>
  </div>


  <div class="form-group col-md-5" >
    <label for="" style="color: white">Middle Name</label>
    <input type="text" class="form-control" name="mname" id="" placeholder="Middle Name"  required>
  </div>



  <div class="form-group col-md-5">
    <label for="LastName" style="color: white">Last Name</label>
    <input type="text" class="form-control" name="lname" placeholder="Last Name"  required>
  </div>


   <div class="form-group col-md-5">
    <label for="" style="color: white" >Position:</label>
 
    <select class="form-control " name="prog" >

    <option value='' >Select</option>
    <option value='lecturer'>Lecturer</option>
   <!-- <option value='marketing'>Marketing</option>  -->

   
    </select>
  </div>


<div class="form-group col-md-5" >
    <label for="LastName" style="color: white">Birthday</label>
    <input type="date" class="form-control" name="bday" required>
  </div>

  <div class="form-group col-md-5">
    <label for="Address" style="color: white">Address</label>
    <input type="text" class="form-control" name="add" placeholder="Address"  required>
  </div>


<div class=" form-group col-md-5">
<label for="user">Gender</label><br>

  <div class=" d-inline  form-check ">
  <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Male" checked>
  <label class="form-check-label" for="exampleRadios1">Male
  </label>
</div>


<div class=" d-inline-block "></div>

<div class=" d-inline form-check ">
  <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="Female">
  <label class="form-check-label" for="exampleRadios2">Female
  </label>
</div>
</div>

  <div class="form-group col-md-5">
    <label for="Phone">Tel. Phone</label>
    <input type="number" class="form-control" name="phone" placeholder="Number"  required>
  </div>


<div class=" block"></div>

   <br>
   <div class="form-group col-md-5">
    <label for="user">Username</label>
    <input type="text" class="form-control" name="user" placeholder="" value="<?php echo $code ?>" readonly="">
  </div>

   <div class="form-group col-md-5">
    <label for="user">Password</label>
    <input type="Password" class="form-control" name="pass" placeholder=""  required>
  </div>
</div>



<div class="modal-footer">
     <a href="home.php" type="button" class="btn btn-danger"  value="Cancel">Cancel</a>
  <button type="submit" name="addemp" class="btn btn-primary">Submit</button>
 </div>



</form>

</div>
</div>


<?php



if (isset($_POST['addemp'])) {

  include("php/connections.php");
  
  $fname=$_POST['fname'];
  $mname=$_POST['mname'];
  $lname=$_POST['lname'];
  $bday=$_POST['bday'];
  $add=$_POST['add'];
  $gender=$_POST['gender'];
  $phone=$_POST['phone'];
  $user=$_POST['user'];
  $pass=$_POST['pass'];
  $prog=$_POST['prog'];
  $password = base64_encode($pass);



 mysqli_query($conn, "INSERT INTO logtbl (user, pass, position) VALUES ( '$user', '$password', '$prog')");

$sql ="INSERT INTO emptbl (e_id, fname, mname, lname, emp_bday, address, gender, telphone, password, position) VALUES ('$user', '$fname', '$mname', '$lname', '$bday', '$add', '$gender', '$phone', '$password', '$prog')";




 
  
  if($conn->query($sql) === TRUE ){
          
                  echo "<script language = 'javascript'>alert('New Employee is added !')</script>";
                  echo "<script>window.location.href = 'home.php';</script>";
                  }else{
                  echo "Error" . $sql . '' . $conn->connect_error;
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


