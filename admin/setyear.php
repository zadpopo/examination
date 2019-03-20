

<!DOCTYPE html>
<html>
<head>
	<title>Review Year</title>
</head>
<body>

  <?php 
  include ("php/nav.php");
  ?>
  
  

  <div class="container">

  	<br>

<div class="card-deck" >
  <div class="card">
 
    <div class="card-body">
      <h5 class="card-title">Create Review Year</h5>
    

    <form action="" method="POST">



  <div class="form-group row">
    <label for="" class="col-sm-4 col-form-label">Activite Year:</label>
    <div class="col-sm-3">
    <input type="number"  class="form-control" id="" required name="y1" placeholder="">
  </div>
   <label for="" class="col-sm-1 col-form-label">-</label>
  <div class="col-sm-3">
    <input type="text"  class="form-control" id=""required   name="y2" placeholder="">
  </div>
</div>
  <br><br><br>
 <div class="modal-footer">
     
        <button  type="submit" name="byear" class="btn btn-success">Create</button>
      </div>
</form>


<?php 
 
 if(isset($_POST["byear"])){

$y1 = $_POST["y1"];
$y2 = $_POST["y2"];


$y3 = $y1 ."-". $y2;




  $sql ="INSERT INTO yeartbl ( year, status) VALUES ('$y3', '0')";


  if($conn->query($sql) === TRUE ){
          
                  echo "<script language = 'javascript'>alert('Review Year is created !')</script>";
                  echo "<script>window.location.href = 'setyear.php';</script>";
                  }else{
                  echo "Error" . $sql . '' . $conn->connect_error;
                  }
               $conn->close();
      }

?>



    </div>
  
  </div>
<br>

<div class="card-deck">
  <div class="card">

    <div class="card-body ">
      <h5 class="card-title">Set Review Year</h5>


      <?php

   $query= "SELECT * FROM yeartbl WHERE  status ='1'";
   $result= mysqli_query($conn,$query);
   $data= $result->fetch_assoc();




      ?>
     
    <form action="" method="POST">



  <div class="form-group row">
    <label for="" class="col-sm-4 col-form-label">Activited Year:</label>
     <div class="col-sm-6">
    <input type="text" readonly class="form-control" required name="aa" value="<?php echo $data['year']?>">
</div>
</div>



  <div class="form-group row">
    <label for="" class="col-sm-4 col-form-label">Set Year:</label>
    <div class="col-sm-6">
    <div class="form-group">
 
    <select class="form-control" name="yr">
   

   					<?php


   					 $q1="SELECT DISTINCT year FROM yeartbl where status = '0' ORDER BY year_id DESC ";

 					 $r1= mysqli_query($conn,$q1);


                    while  ($row = mysqli_fetch_array($r1)){
                     $year = $row["year"];
                     echo "<option value='$year'>$year</option>";
                   }   
                    ?>
    </select>
  </div>
  </div>
</div>

 <div class="modal-footer">
     
        <button  type="submit" value="submit" name="yract" class="btn btn-warning">Activate</button>
      </div>



</form>


<?php 
if (isset($_POST['yract'])) {

$yr = $_POST["yr"];    

$aa= $_POST["aa"];

    $sql ="UPDATE yeartbl SET status = '1' WHERE year= '$yr'";

  mysqli_query($conn, "UPDATE yeartbl SET status = '0' WHERE year= '$aa'");
  
  if($conn->query($sql) === TRUE ){
          
                  echo "<script language = 'javascript'>alert('New Review year is Activate !')</script>";
                  echo "<script>window.location.href = 'setyear.php';</script>";
                  }else{
                  echo "Error" . $sql . '' . $conn->connect_error;
                  }
               $conn->close();


  


}
?>





    </div>

  </div>





</div>


<br>



</body>
</html>