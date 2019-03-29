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

 <div class="container " >
<div class="card-deck" >
  <div class="card">
 
    <div class="card-body " style="background-color: #2B2A2A">
       <h5 class="card-title text-white">Create Program</h5>
      <div class="card-body " style="background-color: white" >
     
    

    <form action="" method="POST">






  <div class="form-group row">
    <label for="" class="col-sm-6 col-form-label">Program:</label>
    <div class="col-sm-4  ">
    <div class="form-group">
 
    <input class="form-control" type="text" name="program" value="" required placeholder="program name..">
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
</div>
</div>
<br>
<div class="container ">
<div class="card-deck" >
  <div class="card">

    <div class="card-body " style="background-color: #2B2A2A">
      <h5 class="card-title text-white">List of Program</h5>

<ul class="list-group">

 <?php


             $q1="SELECT DISTINCT program_name FROM  programtbl ";

           $r1= mysqli_query($conn,$q1);


                    while  ($row = mysqli_fetch_array($r1)){
                     $prog = $row["program_name"];

                     echo "<li class='list-group-item' >$prog</li>";
                   }
                    ?>

</ul>



  </div>
  </div>
</div>

    </div>

  </div>



</div>

</div>

  </body>
  </html>
