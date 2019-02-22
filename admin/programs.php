  <!DOCTYPE html>
  <html>
  <head>
  	<title>Programs</title>
  </head>
  <body>
  
  
  <?php 
  include ("php/nav.php");
  ?>

<br>

 <div class="container">
<div class="card-deck" >
  <div class="card">
 
    <div class="card-body">
      <h5 class="card-title">Create Review Year</h5>
    

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
                  echo "<script>window.location.href = 'programs.php';</script>";
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
      <h5 class="card-title">List of Program</h5>




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



</div>

</div>

     
   




  





  </body>
  </html>
