
<!DOCTYPE html>
<html>
<head>
  <title>Admin Page</title>
</head>
<body>


  <?php 
  include ("php/nav.php");
  ?>
  
  <!---fire anim--->


<link rel="stylesheet" type="text/css" href="fire-anim.css">

<div class="fire">
  <div class="fire-left">
    <div class="main-fire"></div>
    <div class="particle-fire"></div>
  </div>
  <div class="fire-main">
    <div class="main-fire"></div>
    <div class="particle-fire"></div>
  </div>
  <div class="fire-right">
    <div class="main-fire"></div>
    <div class="particle-fire"></div>
  </div>
  <div class="fire-bottom">
    <div class="main-fire"></div>
  </div>
</div>


<!--side menu-->

<!--side menu-->

<!---side menu button--->
<?php 

$cardtest = "";

if(isset($_POST["home"])){

$cardtest = "d-none";
}


?>


<div class="container" style="">
  <div class="card-deck" >
  <div class="card">
 
    <div class="card-body">
   <center>  <h5 class="card-title">Welcome Admin</h5></center> 
    
</div>

  <div hidden class="container-fluid">

  	<br>

<div class="card-deck name="divyear" >
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
    <input type="number"  class="form-control" id=""required   name="y2" placeholder="">
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
                  echo "<script>window.location.href = 'index.php';</script>";
                  }else{
                  echo "Error" . $sql . '' . $conn->connect_error;
                  }
               $conn->close();
      }

?>



    </div>
  
  </div>


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


   					 $q1="SELECT DISTINCT year FROM yeartbl where status = '0' ORDER BY year DESC ";

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
                  echo "<script>window.location.href = 'index.php';</script>";
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




<div class="card-deck" name="divprogram">
  <div class="card">

    <div class="card-body">
      <h5 class="card-title">Add Program</h5>
     
    <form action="" method="POST">






  <div class="form-group row">
    <label for="" class="col-sm-4 col-form-label">Program:</label>
    <div class="col-sm-6">
    <div class="form-group">
 
    <input class="form-control" type="text" name="program" value="" required>
  </div>
  </div>
</div>




 <div class="modal-footer">
     
        <button  type="submit" name="padd" class="btn btn-primary">Add</button>
      </div>



</form>

<?php

if (isset($_POST['padd'])) {

  $program =$_POST['program'];





  $sql ="INSERT INTO programtbl (program_name) VALUES ('$program')";


  if($conn->query($sql) === TRUE ){
          
                  echo "<script language = 'javascript'>alert('New program is added !')</script>";
                  echo "<script>window.location.href = 'index.php';</script>";
                  }else{
                  echo "Error" . $sql . '' . $conn->connect_error;
                  }
               $conn->close();


  

}
 ?>


    </div>


  </div>

<div class="card">

    <div class="card-body">
      <h5 class="card-title">Program list</h5>




  <div class="form-group row">
    <label for="" class="col-sm-4 col-form-label">Programs:</label>
    <div class="col-sm-6">
    <div class="form-group">
 
    <select class="form-control" id="exampleFormControlSelect1">
   

            <?php


             $q1="SELECT DISTINCT program_name FROM  programtbl ";

           $r1= mysqli_query($conn,$q1);


                    while  ($row = mysqli_fetch_array($r1)){
                     $prog = $row["program_name"];
                     echo "<option value=''>$prog</option>";
                   }
                    ?>





    </select>
  </div>
  </div>
</div>


    </div>
  </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>




