

<!DOCTYPE html>
<html>
<head>
	<title>Review Year</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>
<body>

  <?php 
  include ("php/nav.php");

  ?>
  

  <div class="container">

  	<br>

<div class="card-deck" >
  <div class="card">
 
    <div class="card-body"  style="background-color: #2B2A2A">
      <h5 class="card-title text-white">Create Review Year</h5>
     

    <form action="" method="POST">



  <div class="form-group row">
    <label for="" class="col-sm-2 col-form-label text-white" >Activite Year:</label>
    <div class="col-sm-3">
    <input type="number"  class="form-control" id="" required name="y1" placeholder="Year...">
  </div>
   <label for="" class="col-sm-1 col-form-label">-</label>
  <div class="col-sm-3">
    <input type="text"  class="form-control" id=""required   name="y2" placeholder="Season...">
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

    <div class="card-body " >
      <h5 class="card-title ">Set Review Year</h5>



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
<!---footer--->
<div class="fixed-bottom" >
  <?php
  include ("../php/footer_fit.php");
?>
</div>

</body>
</html>